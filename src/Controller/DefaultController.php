<?php
// src/Controller/DefaultController.php
namespace Apothan\OpenTourLibBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Apothan\OpenTourLibBundle\Entity\Tour;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="ot_home")
     */
    public function index()
    {
        //$tours = $this->getDoctrine()->getRepository(Tour::class)->getThree();
        $tours = [];
        return $this->render('@ApothanOpenTourLib/index.html.twig', [
            'tours' => $tours,
        ]);
    }

    /**
     * @Route("/Tour/{id}", name="ot_tour")
     */
    public function tour($id)
    {
        $tour = $this->getDoctrine()->getRepository(Tour::class)->find($id);
        
        return $this->render('@ApothanOpenTourLib/tour.html.twig', [
            'tour' => $tour,
        ]);
    }
}