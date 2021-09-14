<?php

namespace Apothan\OpenTourLibBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class TourCoordinate
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $coorx;

    /**
     * @ORM\Column(type="float")
     */
    private $coory;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
    * @var \Apothan\OpenTourLibBundle\Entity\Tour
    *
    * @ORM\ManyToOne(targetEntity="Apothan\OpenTourLibBundle\Entity\Tour", inversedBy="coordinates")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="tour", referencedColumnName="id")
    * })
    */
    private $tour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoorx(): ?string
    {
        return $this->coorx;
    }

    public function setCoorx(string $coorx): self
    {
        $this->coorx = $coorx;

        return $this;
    }

    public function getCoory(): ?string
    {
        return $this->coory;
    }

    public function setCoory(string $coory): self
    {
        $this->coory = $coory;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getTour(): ?Tour
    {
        return $this->tour;
    }

    public function setTour(?Tour $tour): self
    {
        $this->tour = $tour;

        return $this;
    }
}
