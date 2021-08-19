<?php

namespace Apothan\OpenTourLibBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Apothan\OpenTourLibBundle\Entity\Tour;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class Products
{

    protected $em;

    function __construct(EntityManagerInterface $em, ParameterBagInterface $params)
    {
        $this->em = $em;
        $this->params = $params;
    }
    public function getTour($tourid)
    {
        
        $tour = $this->em->getRepository(Tour::class)->find($tourid);

        return $tour;
    }
    public function getTours($qty)
    {
        $parameterValue = $this->params->get('opentour.externalapi');
        echo $parameterValue; die();
        $tours = $this->em->getRepository(Tour::class)->getTours($qty);

        return $tours;
    }

}
