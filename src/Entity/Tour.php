<?php

namespace Apothan\OpenTourLibBundle\Entity;

use Apothan\OpenTourLibBundle\Repository\TourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TourRepository::class)
 */
class Tour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $name;

     /**
     * @ORM\Column(type="string", length=200)
     */
    private $shortname;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $image;

    /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\TourCategory", mappedBy="tour", cascade={"persist","remove"})
      */

    private $categories;

    /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\SellDateBreak", mappedBy="tour", cascade={"persist","remove"})
      */

    private $selldatebreaks;

    /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\TourItinerary", mappedBy="tour", cascade={"persist","remove"})
      */

    private $itinerary;

    /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\TourFeature", mappedBy="tour", cascade={"persist","remove"})
      */

      private $features;

    /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\TourIncluded", mappedBy="tour", cascade={"persist","remove"})
      */

      private $includeds;

     /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\TourHotel", mappedBy="tour", cascade={"persist","remove"})
      */

      private $hotels;

      /**
      * @var \Doctrine\Common\Collections\Collection
      *
      * @ORM\OneToMany(targetEntity="Apothan\OpenTourLibBundle\Entity\TourCoordinate", mappedBy="tour", cascade={"persist","remove"})
      */

      private $coordinates;

    /**
     * @ORM\Column(type="float")
     */
    private $lowsell;

    /**
     * @ORM\Column(type="int")
     */
    private $duration;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->selldatebreaks = new ArrayCollection();
        $this->itinerary = new ArrayCollection();
        $this->features = new ArrayCollection();
        $this->includeds = new ArrayCollection();
        $this->hotels = new ArrayCollection();
        $this->coordinates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getShortname(): ?string
    {
        return $this->shortname;
    }

    public function setShortname(string $shortname): self
    {
        $this->shortname = $shortname;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|TourCategory[]
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(TourCategory $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
            $category->setTour($this);
        }

        return $this;
    }

    public function removeCategory(TourCategory $category): self
    {
        if ($this->categories->contains($category)) {
            $this->categories->removeElement($category);
            // set the owning side to null (unless already changed)
            if ($category->getTour() === $this) {
                $category->setTour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SellDateBreak[]
     */
    public function getSelldatebreaks(): Collection
    {
        return $this->selldatebreaks;
    }

    public function addSelldatebreak(SellDateBreak $selldatebreak): self
    {
        if (!$this->selldatebreaks->contains($selldatebreak)) {
            $this->selldatebreaks[] = $selldatebreak;
            $selldatebreak->setTour($this);
        }

        return $this;
    }

    public function removeSelldatebreak(SellDateBreak $selldatebreak): self
    {
        if ($this->selldatebreaks->contains($selldatebreak)) {
            $this->selldatebreaks->removeElement($selldatebreak);
            // set the owning side to null (unless already changed)
            if ($selldatebreak->getTour() === $this) {
                $selldatebreak->setTour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TourItinerary[]
     */
    public function getItinerary(): Collection
    {
        return $this->itinerary;
    }

    public function addItinerary(TourItinerary $itinerary): self
    {
        if (!$this->itinerary->contains($itinerary)) {
            $this->itinerary[] = $itinerary;
            $itinerary->setTour($this);
        }

        return $this;
    }

    public function removeItinerary(TourItinerary $itinerary): self
    {
        if ($this->itinerary->contains($itinerary)) {
            $this->itinerary->removeElement($itinerary);
            // set the owning side to null (unless already changed)
            if ($itinerary->getTour() === $this) {
                $itinerary->setTour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TourFeature[]
     */
    public function getFeatures(): Collection
    {
        return $this->features;
    }

    public function addFeature(TourFeature $feature): self
    {
        if (!$this->features->contains($feature)) {
            $this->features[] = $feature;
            $feature->setTour($this);
        }

        return $this;
    }

    public function removeFeature(TourFeature $feature): self
    {
        if ($this->features->contains($feature)) {
            $this->features->removeElement($feature);
            // set the owning side to null (unless already changed)
            if ($feature->getTour() === $this) {
                $feature->setTour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TourIncluded[]
     */
    public function getIncludeds(): Collection
    {
        return $this->includeds;
    }

    public function addIncluded(TourIncluded $included): self
    {
        if (!$this->includeds->contains($included)) {
            $this->includeds[] = $included;
            $included->setTour($this);
        }

        return $this;
    }

    public function removeIncluded(TourIncluded $included): self
    {
        if ($this->includeds->contains($included)) {
            $this->includeds->removeElement($included);
            // set the owning side to null (unless already changed)
            if ($included->getTour() === $this) {
                $included->setTour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TourHotel[]
     */
    public function getHotels(): Collection
    {
        return $this->hotels;
    }

    public function addHotel(TourHotel $hotel): self
    {
        if (!$this->hotels->contains($hotel)) {
            $this->hotels[] = $hotel;
            $hotel->setTour($this);
        }

        return $this;
    }

    public function removeHotel(TourHotel $hotel): self
    {
        if ($this->hotels->contains($hotel)) {
            $this->hotels->removeElement($hotel);
            // set the owning side to null (unless already changed)
            if ($hotel->getTour() === $this) {
                $hotel->setTour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TourCoordinate[]
     */
    public function getCoordinates(): Collection
    {
        return $this->coordinates;
    }

    public function addCoordinate(TourCoordinate $coordinate): self
    {
        if (!$this->coordinates->contains($coordinate)) {
            $this->coordinates[] = $coordinate;
            $coordinate->setTour($this);
        }

        return $this;
    }

    public function removeCoordinate(TourCoordinate $coordinate): self
    {
        if ($this->coordinates->contains($coordinate)) {
            $this->coordinates->removeElement($coordinate);
            // set the owning side to null (unless already changed)
            if ($coordinate->getTour() === $this) {
                $coordinate->setTour(null);
            }
        }

        return $this;
    }

    public function getLowsell(): ?float
    {
        return $this->lowsell;
    }

    public function setLowsell(string $lowsell): self
    {
        $this->lowsell = $lowsell;

        return $this;
    }

    public function getDuration(): ?float
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
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
