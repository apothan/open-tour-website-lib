<?php

namespace Apothan\OpenTourLibBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TourFeatureRepository::class)
 */
class TourIncluded
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
    * @var \Apothan\OpenTourLibBundle\Entity\Tour
    *
    * @ORM\ManyToOne(targetEntity="Apothan\OpenTourLibBundle\Entity\Tour", inversedBy="includeds")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="tour", referencedColumnName="id")
    * })
    */
    private $tour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
