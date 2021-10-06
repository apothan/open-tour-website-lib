<?php

namespace Apothan\OpenTourLibBundle\Entity;

use Apothan\OpenTourLibBundle\Repository\TourHotelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TourHotelRepository::class)
 */
class TourHotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=60, nullable=true)
     */
    private $name;

    /**
     * @var \App\Entity\Tour
     *
     * @ORM\ManyToOne(targetEntity="Apothan\OpenTourLibBundle\Entity\Tour", inversedBy="hotels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tour", referencedColumnName="id")
     * })
     */
    private $tour;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=60, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="float")
     */
    private $hotelrating;
    
    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=200, nullable=true)
     */
    private $image;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
   
    /**
     * Set tour
     *
     * @param integer $tour
     */
    public function setTour($tour)
    {
        $this->tour = $tour;
        
        return $this;
    }

    /**
     * Get tour
     *
     * @return integer 
     */
    public function getTour()
    {
        return $this->tour;
    }


    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get hotelrating
     *
     * @return float
     */
    public function getHotelrating()
    {
        return $this->hotelrating;
    }

    /**
     * Set hotelrating
     *
     * @param float $hotelrating
     */
    public function setHotelrating(float $hotelrating)
    {
        $this->hotelrating = $hotelrating;

    }

    /**
     * Set image
     *
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
