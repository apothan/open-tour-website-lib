<?php
// src/Controller/DefaultController.php
namespace Apothan\OpenTourLibBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Apothan\OpenTourLibBundle\Service\Products;
use Apothan\OpenTourLibBundle\Service\Menu;

class DefaultController extends AbstractController
{
    private $product_service;
    private $menu_service;

    public function __construct(Products $product_service, Menu $menu_service)
    {
        $this->product_service = $product_service;
        $this->menu_service = $menu_service;
    }

    /**
     * @Route("/", name="ot_home")
     */
    public function index()
    {
        $tours = [];
        $tours =  $this->product_service->getTours(3);

        return $this->render('@ApothanOpenTourLib/index.html.twig', [
            'tours' => $tours,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Tour/{id}", name="ot_tour")
     */
    public function tour($id)
    {
        $menuitems = $this->menu_service->getMenuItems();

        $tour = $this->product_service->getTour($id);
        
        return $this->render('@ApothanOpenTourLib/tour.html.twig', [
            'tour' => $tour,
            'menu' => $this->menu_service,
        ]);
    }
}