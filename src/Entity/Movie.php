<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MovieRepository::class)
 */
class Movie
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
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $summary;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $director;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $producer;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $starring;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $releaseDate;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSummary(): ?string
    {
        return $this->summary;
    }

    /**
     * @param string|null $summary
     * @return $this
     */
    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirector(): ?string
    {
        return $this->director;
    }

    /**
     * @param string $director
     * @return $this
     */
    public function setDirector(string $director): self
    {
        $this->director = $director;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getProducer(): ?string
    {
        return $this->producer;
    }

    /**
     * @param string $producer
     * @return $this
     */
    public function setProducer(string $producer): self
    {
        $this->producer = $producer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStarring(): ?string
    {
        return $this->starring;
    }

    /**
     * @param string|null $starring
     * @return $this
     */
    public function setStarring(?string $starring): self
    {
        $this->starring = $starring;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReleaseDate(): ?string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     * @return $this
     */
    public function setReleaseDate(string $releaseDate): self
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }
}
