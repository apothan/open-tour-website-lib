<?php

namespace Apothan\OpenTourLibBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Apothan\OpenTourLibBundle\Entity\Tour;

class Products
{

    protected $em;

    function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function getTour($tourid)
    {

        $tour = $this->em->getRepository(Tour::class)->find($tourid);

        return $tour;
    }
    public function getTours($qty)
    {
        $tours = $this->em->getRepository(Tour::class)->getTours($qty);

        return $tours;
    }

}
