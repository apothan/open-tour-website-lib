<?php

namespace Apothan\OpenTourLibBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Apothan\OpenTourLibBundle\Entity\Tour;
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
    public function getTour($tourid)
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

       //dump($tour);die();
        return $tour;
    }
    public function getTours($qty)
    {
        $use_external_api = $this->params->get('opentour.externalapi');

        if ($use_external_api == true)
        {
            $dataval['start'] = 0;
            $dataval['records'] = 3;
            $dataval['servicerequest']['category'] = 'Tour';

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
        foreach ($tours as $key => $tour)
        {
            $tours[$key]['name'] = $tour['servicename'];
            $tours[$key]['id'] = $tour['productid'];
        }

        return $tours;
    }

    //***** Converts the returned product array into Tour object */
    //***** Still need to add a lot of fields */
    private function mergeProductTour($tourold)
    {
        $tour = new Tour();
        $tour->setName($tourold['name']);
        $tour->setDescription($tourold['description']);

        return $tour;
    }

}
