<?php
// src/Controller/DefaultController.php
namespace Apothan\OpenTourLibBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Apothan\OpenTourLibBundle\Entity\Tour;
use Apothan\OpenTourLibBundle\Entity\SellDateBreak;
use Apothan\OpenTourLibBundle\Entity\SellAmount;
use Apothan\OpenTourLibBundle\Form\Type\AddTourType;
use Apothan\OpenTourLibBundle\Form\Type\EditTourType;
use Apothan\OpenTourLibBundle\Form\Type\TourCategoriesType;
use Apothan\OpenTourLibBundle\Form\Type\TourSellsType;
use Apothan\OpenTourLibBundle\Form\Type\TourBreakAddType;
use Apothan\OpenTourLibBundle\Form\Type\TourFeaturesType;
use Apothan\OpenTourLibBundle\Form\Type\TourItineraryType;
use Apothan\OpenTourLibBundle\Service\Products;
use Apothan\OpenTourLibBundle\Service\Menu;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class TourController extends AbstractController
{

    public function __construct(Products $product_service, Menu $menu_service)
    {
        $this->product_service = $product_service;
        $this->menu_service = $menu_service;
    }


    /**
     * @Route("/Admin/AddTour", name="ot_admin_addtour")
     */
    public function addTour()
    {
        $menuitems = $this->menu_service->getMenuItems();
        $tour = new Tour();
    	$tourForm = $this->createForm(AddTourType::class, $tour);

        return $this->render('@ApothanOpenTourLib/addtour.html.twig', [
            'tourform' => $tourForm->createView(),
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Admin/CreateTour", name="ot_admin_createtour")
     */
    public function createTour(Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = new Tour();
    	$tourForm = $this->createForm(AddTourType::class, $tour);
    	$tourForm->handleRequest($request);
        
    	if ($tourForm->isValid()) {
            
    		$em = $this->getDoctrine()->getManager();
    		
    		$em->persist($tour);
    		$em->flush();
    
    		$this->get('session')->getFlashBag()->add('complete_message',"This tour has been created!");
    		return $this->redirect($this->generateUrl('ot_admin_edittour', array('id' => $tour->getId())));
    
    	}
    
    	return $this->render('@ApothanOpenTourLib/addtour.html.twig', [
            'tourform' => $tourForm->createView(),
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Admin/EditTour/{id}", name="ot_admin_edittour")
     */
    public function editTour($id)
    {
        $menuitems = $this->menu_service->getMenuItems();
        $tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }
        
    	$tourForm = $this->createForm(EditTourType::class, $tour);

        return $this->render('@ApothanOpenTourLib/edittour.html.twig', [
            'tourform' => $tourForm->createView(),
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Admin/UpdateTour/{id}", name="ot_admin_updatetour")
     */
    public function updateTour($id, Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }

    	$tourForm = $this->createForm(EditTourType::class, $tour);
    	$tourForm->handleRequest($request);
    
    	if ($tourForm->isValid()) {
    		$em = $this->getDoctrine()->getManager();
    		
    		$em->persist($tour);
    		$em->flush();
    
    		$this->get('session')->getFlashBag()->add('complete_message',"This tour has been updated!");
    		return $this->redirect($this->generateUrl('ot_admin_edittour', array('id' => $tour->getId())));
    
    	}
    
    	return $this->render('@ApothanOpenTourLib/edittour.html.twig', [
            'tourform' => $tourForm->createView(),
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Admin/TourCategories/{id}", name="ot_admin_tourcategories")
     */
    public function tourCategories($id, Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }

    	$tourForm = $this->createForm(TourCategoriesType::class, $tour);
    	$tourForm->handleRequest($request);
    
    	if ($tourForm->isSubmitted() && $tourForm->isValid()) {
    		// filter $originalTags to contain tags no longer present
            foreach ($tour->getCategories() as $category)
            {
                $category->setTour($tour);
                if (isset($originalCategories))
                    foreach ($originalCategories as $key => $toDel)
                    {
                        if ($toDel->getId() === $category->getId())
                        {
                            unset($originalCategories[$key]);
                        }
                    }
            }

            // remove the relationship between the tag and the Task
            if (isset($originalCategories))
                foreach ($originalCategories as $category)
                {
                    // remove the Task from the Tag
                    //$passenger->getTasks()->removeElement($tour);
                    // if it were a ManyToOne relationship, remove the relationship like this
                    //$tag->setTask(null);

                    $em->persist($category);

                    // if you wanted to delete the Tag entirely, you can also do that
                    $em->remove($category);
                }

            $em->persist($tour);
            $em->flush();
    
    		$this->get('session')->getFlashBag()->add('complete_message',"This tour has been updated!");
    		return $this->redirect($this->generateUrl('ot_admin_tourcategories', array('id' => $tour->getId())));
    
    	}
    
    	return $this->render('@ApothanOpenTourLib/tourcategories.html.twig', [
            'tourform' => $tourForm->createView(),
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    
    /**
     * @Route("/Admin/TourSells/{id}", name="ot_admin_toursells")
     */
    public function tourSells($id, Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }

        $sellbreak = new SellDateBreak();
        $sellbreak->setTour($tour);
        foreach ($tour->getCategories() as $cat)
        {
            $newsell = new SellAmount();
            $newsell->setTourcategory($cat);
            $sellbreak->addSellamount($newsell);
        }
        $breakAddForm = $this->createForm(TourBreakAddType::class, $sellbreak);
    	$tourForm = $this->createForm(TourSellsType::class, $tour);
    	$tourForm->handleRequest($request);
    
    	if ($tourForm->isSubmitted() && $tourForm->isValid()) {
    		// filter $originalTags to contain tags no longer present
            foreach ($tour->getSelldatebreaks() as $break)
            {
                $break->setTour($tour);
                if (isset($originalCategories))
                    foreach ($originalSelldatebreaks as $key => $toDel)
                    {
                        if ($toDel->getId() === $break->getId())
                        {
                            unset($originalSelldatebreaks[$key]);
                        }
                    }
            }

            // remove the relationship between the tag and the Task
            if (isset($originalSelldatebreaks))
                foreach ($originalSelldatebreaks as $break)
                {
                    // remove the Task from the Tag
                    //$passenger->getTasks()->removeElement($tour);
                    // if it were a ManyToOne relationship, remove the relationship like this
                    //$tag->setTask(null);

                    $em->persist($break);

                    // if you wanted to delete the Tag entirely, you can also do that
                    $em->remove($break);
                }
    		
    		$em->persist($tour);
    		$em->flush();
    
    		$this->get('session')->getFlashBag()->add('complete_message',"This tour has been updated!");
    		return $this->redirect($this->generateUrl('ot_admin_toursells', array('id' => $tour->getId())));
    
    	}
    
    	return $this->render('@ApothanOpenTourLib/toursells.html.twig', [
            'tourform' => $tourForm->createView(),
            'breakaddform' => $breakAddForm->createView(),
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Admin/TourSellAdd/{id}", name="ot_admin_tourselladd")
     */
    public function tourSellAdd($id, Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }

        $sellbreak = new SellDateBreak();
        $sellbreak->setTour($tour);
        foreach ($tour->getCategories() as $cat)
        {
            $newsell = new SellAmount();
            $newsell->setTourcategory($cat);
            $sellbreak->addSellamount($newsell);
        }
        $breakAddForm = $this->createForm(TourBreakAddType::class, $sellbreak);

        $breakAddForm->handleRequest($request);
    
    	if ($breakAddForm->isSubmitted() && $breakAddForm->isValid()) {
            $em->persist($sellbreak);
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('complete_message',"This date has been added!");
    		return $this->redirect($this->generateUrl('ot_admin_toursells', array('id' => $tour->getId())));
        }
    }

    /**
     * @Route("/Admin/TourItinerary/{id}", name="ot_admin_touritinerary")
     */
    public function tourItinerary($id, Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }

    	$tourForm = $this->createForm(TourItineraryType::class, $tour);
    	$tourForm->handleRequest($request);
    
    	if ($tourForm->isSubmitted() && $tourForm->isValid()) {
    		// filter $originalTags to contain tags no longer present
            foreach ($tour->getItinerary() as $day)
            {
                $day->setTour($tour);
                if (isset($originalItinerary))
                    foreach ($originalItinerary as $key => $toDel)
                    {
                        if ($toDel->getId() === $day->getId())
                        {
                            unset($originalItinerary[$key]);
                        }
                    }
            }

            // remove the relationship between the tag and the Task
            if (isset($originalItinerary))
                foreach ($originalItinerary as $day)
                {
                    // remove the Task from the Tag
                    //$passenger->getTasks()->removeElement($tour);
                    // if it were a ManyToOne relationship, remove the relationship like this
                    //$tag->setTask(null);

                    $em->persist($day);

                    // if you wanted to delete the Tag entirely, you can also do that
                    $em->remove($day);
                }
    		
    		$em->persist($tour);
    		$em->flush();
    
    		$this->get('session')->getFlashBag()->add('complete_message',"This tour has been updated!");
    		return $this->redirect($this->generateUrl('ot_admin_touritinerary', array('id' => $tour->getId())));
    
    	}
    
    	return $this->render('@ApothanOpenTourLib/touritinerary.html.twig', [
            'tourform' => $tourForm->createView(),
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/Admin/TourFeatures/{id}", name="ot_admin_tourfeatures")
     */
    public function tourFeatures($id, Request $request)
    {
        $menuitems = $this->menu_service->getMenuItems();
    	$tour = $this->product_service->getTour($id);
    
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }

    	$tourForm = $this->createForm(TourFeaturesType::class, $tour);
    	$tourForm->handleRequest($request);
    
    	if ($tourForm->isSubmitted() && $tourForm->isValid()) {
    		// filter $originalTags to contain tags no longer present
            foreach ($tour->getFeatures() as $feature)
            {
                $feature->setTour($tour);
                if (isset($originalFeatures))
                    foreach ($originalFeatures as $key => $toDel)
                    {
                        if ($toDel->getId() === $feature->getId())
                        {
                            unset($originalFeatures[$key]);
                        }
                    }
            }

            // remove the relationship between the tag and the Task
            if (isset($originalFeatures))
                foreach ($originalFeatures as $feature)
                {
                    // remove the Task from the Tag
                    //$passenger->getTasks()->removeElement($tour);
                    // if it were a ManyToOne relationship, remove the relationship like this
                    //$tag->setTask(null);

                    $em->persist($feature);

                    // if you wanted to delete the Tag entirely, you can also do that
                    $em->remove($feature);
                }
    		
    		$em->persist($tour);
    		$em->flush();
    
    		$this->get('session')->getFlashBag()->add('complete_message',"This tour has been updated!");
    		return $this->redirect($this->generateUrl('ot_admin_tourfeatures', array('id' => $tour->getId())));
    
    	}
    
    	return $this->render('@ApothanOpenTourLib/tourfeatures.html.twig', [
            'tourform' => $tourForm->createView(),
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems(),
        ]);
    }

    /**
     * @Route("/BookTour/{id}", name="ot_booktour")
     */
    public function bookTour($id, ParameterBagInterface $params)
    {
        $menuitems = $this->menu_service->getMenuItems();
        $tour = $this->product_service->getTour($id);
        
    	if (!$tour) {
    		throw $this->createNotFoundException('Unable to find tour entity.');
        }
        
        $bookingURL = $params->get('opentour.apibookingurl');

        $bookingURL = str_replace('{id}',$tour->getId(),$bookingURL);
        
        return $this->render('@ApothanOpenTourLib/booking.html.twig', [
            'bookingUrl' => $bookingURL,
            'tour' => $tour,
            'menu' => $this->menu_service->getMenuItems()
        ]);
    }
    
}