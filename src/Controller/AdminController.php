<?php
// src/Controller/DefaultController.php
namespace Apothan\OpenTourLibBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Apothan\OpenTourLibBundle\Entity\Tour;

class AdminController extends AbstractController
{
    /**
     * @Route("/Admin", name="ot_admin")
     */
    public function index()
    {
        $tours = $this->getDoctrine()->getRepository(Tour::class)->findAll();

        return $this->render('@ApothanOpenTourLib/admin.html.twig', [
            'tours' => $tours
        ]);
    }
}