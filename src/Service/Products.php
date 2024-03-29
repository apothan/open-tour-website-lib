<?php

namespace Apothan\OpenTourLibBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Apothan\OpenTourLibBundle\Entity\Tour;
use Apothan\OpenTourLibBundle\Entity\TourCategory;
use Apothan\OpenTourLibBundle\Entity\TourHotel;
use Apothan\OpenTourLibBundle\Entity\TourCoordinate;
use Apothan\OpenTourLibBundle\Entity\TourItinerary;
use Apothan\OpenTourLibBundle\Entity\SellDateBreak;
use Apothan\OpenTourLibBundle\Entity\SellAmount;
use Apothan\OpenTourLibBundle\Entity\TourIncluded;
use Apothan\OpenTourLibBundle\Entity\TourFeature;
use Apothan\OpenTourLibBundle\Service\RestClient;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class Products
{

    protected $em;
    protected $params;
    protected $restclient;

    function __construct(EntityManagerInterface $em, ParameterBagInterface $params, RestClient $restclient)
    {
        $this->em = $em;
        $this->params = $params;
        $this->restclient = $restclient;
    }
    public function getTour($tourid) : Tour
    {
        $use_external_api = $this->params->get('opentour.externalapi');

        if ($use_external_api == true)
        {
            $dataval['productid'] = $tourid;

            $json = json_encode($dataval);

            $ApiUser = $this->params->get('opentour.apiuser');
            $ApiPass = $this->params->get('opentour.apipass');
            $this->restclient->setUser($ApiUser, $ApiPass);
            $ApiUrl = $this->params->get('opentour.apiurl');
            $return = $this->restclient->post('https://'.$ApiUrl.'/api/productdetails.json', $json);

            $tour2 = json_decode($return, true);
           
            $tour = $this->mergeProductTour($tour2);
        }
        else
        {
            $tour = $this->em->getRepository(Tour::class)->find($tourid);
        }

        return $tour;
    }

    public function getTours($category=null, $country=null, int $passengers=2, int $start=0, int $qty=3) : array
    {
        $use_external_api = $this->params->get('opentour.externalapi');

        if ($use_external_api == true)
        {
            $dataval['start'] = $start;
            $dataval['records'] = $qty;
            $dataval['servicerequest']['category'] = 'Tour';
            
            if(!empty($category) && is_int($category))
                $dataval['servicerequest']['subcategory'] = $category;
            if(!empty($country) && is_string($country) && strlen($country) == 2)
                $dataval['servicerequest']['country'] = $country;

            $dataval['servicerequest']['passengers'] = $passengers;

            $full_list = array();

            $json = json_encode($dataval);

            $ApiUser = $this->params->get('opentour.apiuser');
            $ApiPass = $this->params->get('opentour.apipass');
            $this->restclient->setUser($ApiUser, $ApiPass);
            $ApiUrl = $this->params->get('opentour.apiurl');
            $return = $this->restclient->post('https://'.$ApiUrl.'/api/productavailrqs.json', $json);

            $tours4 = json_decode($return, true);
            
            $tours = array();
            if (isset($tours4['products'])) $tours = array_merge ($full_list, $tours4['products']);
            $tours = $this->openTourNormaliser($tours);
        }
        else
        {
            $tours = $this->em->getRepository(Tour::class)->getTours($qty);
        }
        return $tours;
    }

    //***** Converts the returned format into what this website expect */
    //***** Any differences should eventually be cleaned up */
    private function openTourNormaliser($tours)
    {
        $nomalizedTours = [];
        foreach ($tours as $key => $tour)
        {
            $nomalizedTours[] = $this->mergeProductTour($tour);
        }

        return $nomalizedTours;
    }

    //***** Converts the returned product array into Tour object */
    //***** Still need to add a lot of fields */
    private function mergeProductTour($tourold)
    {
        $tour = new Tour();
        $tour->setId($tourold['productid']);
        $name = $tourold['servicename'] ?? $tourold['name'];
        $tour->setName($name);
        $tour->setShortname($tourold['sname']);
        $tour->setDescription($tourold['description']);
        $lowsell = $tourold['lowsell'] ?? $tourold['low'];
        $tour->setLowsell($lowsell);
        $tour->setDuration($tourold['duration'] ?? '');
        $tour->setImage($tourold['image']);

        if(isset($tourold['categories']))
            foreach($tourold['categories'] as $cat)
            {
                $category = new TourCategory();
                $category->setId($cat['id']);
                $category->setName($cat['category']);
                $category->setShortname($cat['catshort']);
                $category->setMin($cat['min']);
                $category->setMax($cat['max']);
                $category->setPricing($cat['pricing']);
                //$category->addSellamount();

                $tour->addCategory($category);
            }

        if(isset($tourold['breaks']))
            foreach($tourold['breaks'] as $break)
            {
                $sellDateBreak = new SellDateBreak();
                $sellDateBreak->setStart(new \DateTime($break['start']));
                $sellDateBreak->setEnd(new \DateTime($break['end']));
                $sellDateBreak->setMon($break['days']['mon']);
                $sellDateBreak->setTue($break['days']['tue']);
                $sellDateBreak->setWed($break['days']['wed']);
                $sellDateBreak->setThu($break['days']['thu']);
                $sellDateBreak->setFri($break['days']['fri']);
                $sellDateBreak->setSat($break['days']['sat']);
                $sellDateBreak->setSun($break['days']['sun']);

                foreach($break['amounts'] as $amount)
                {
                    $sellAmount = new SellAmount();
                    $sellAmount->setAmount($amount['amount']);
                   
                    foreach($tour->getCategories() as $cat)
                        if($cat->getId() == $amount['categoryid'])
                        {
                            $cat->addSellamount($sellAmount);
                        }

                    $sellDateBreak->addSellamount($sellAmount);
                }

                $tour->addSelldatebreak($sellDateBreak);
            }

        if(isset($tourold['coordinates']))
            foreach($tourold['coordinates'] as $coordinate)
            {
                $tourCoor = new TourCoordinate();
                $tourCoor->setCoorx($coordinate['coorx']);
                $tourCoor->setCoory($coordinate['coory']);
                $tourCoor->setCity($coordinate['city']);

                $tour->addCoordinate($tourCoor);
            }

        if(isset($tourold['hotels']))
            foreach($tourold['hotels'] as $hotel)
            {
                $tourHotel = new TourHotel();
                $tourHotel->setName($hotel['name']);
                $tourHotel->setCity($hotel['city']);
                $tourHotel->setDescription($hotel['description']);
                $tourHotel->setHotelrating($hotel['hotel_rating']);
                $tourHotel->setImage($hotel['image']);

                $tour->addHotel($tourHotel);
            }

        if(isset($tourold['itinerary']))
            foreach($tourold['itinerary'] as $itin)
            {
                $itinerary = new TourItinerary();
                $itinerary->setHeader($itin['header']);
                $itinerary->setDescription($itin['itin'] ?? '');

                $tour->addItinerary($itinerary);
            }

        if(isset($tourold['included']))
            foreach($tourold['included'] as $included)
            {
                $tourIncluded = new TourIncluded();
                $tourIncluded->setDescription($included['text']);

                $tour->addIncluded($tourIncluded);
            }

        if(isset($tourold['feature']))
            foreach($tourold['feature'] as $feature)
            {
                $tourFeature = new TourFeature();
                $tourFeature->setDescription($feature['text']);

                $tour->addIncluded($tourFeature);
            }

        return $tour;
    }

}
