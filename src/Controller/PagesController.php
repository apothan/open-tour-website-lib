<?php
// src/Controller/PagesController.php
namespace Apothan\OpenTourLibBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Apothan\OpenTourLibBundle\Service\Products;
use Apothan\OpenTourLibBundle\Service\Menu;

class PagesController extends AbstractController
{
    private $product_service;
    private $menu_service;

    public function __construct(Products $product_service, Menu $menu_service)
    {
        $this->product_service = $product_service;
        $this->menu_service = $menu_service;
    }

    /**
     * @Route("/About", name="ot_about")
     */
    public function about()
    {
        return $this->render('@ApothanOpenTourLib/about.html.twig', [
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Contact", name="ot_contact")
     */
    public function contact()
    {
        return $this->render('@ApothanOpenTourLib/contact.html.twig', [
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/TermsAndConditions", name="ot_terms")
     */
    public function termsAndConditions()
    {
        return $this->render('@ApothanOpenTourLib/terms.html.twig', [
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }
}