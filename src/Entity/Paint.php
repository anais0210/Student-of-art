<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * class paint
 * @ORM\Entity(repositoryClass="App\Repository\PaintRepository")
 */
class Paint
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var 
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     */
    private $artiste;

    /**
     * @var string
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ajouter une image jpg")
     * @Assert\File(mimeTypes={ "image/jpeg" })
     */
    private $image;

    /**
     * @var datetime
     * @ORM\Column(type="datetime")
     */
    private $date;
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Get title. 
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title. 
     * @param string $title
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Get description.
     * @return string 
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description 
     * @param string $description
     * @return self 
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
    /**
     * Get artiste
     * @return string 
     */
    public function getArtiste(): ?string
    {
        return $this->artiste;
    }
    /**
     * Set artiste
     * @param string $artiste
     * @return self 
     */
    public function setArtiste(string $artiste): self
    {
        $this->artiste = $artiste;

        return $this;
    }
    /**
     * Get image
     * @return string 
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * Set image
     * @param string $image
     * @return string 
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
    /**
     * Get date
     * @return DateTimeInterface 
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }
    /**
     * Set date
     * @param \DateTimeInterface $date
     * @return DateTimeInterface 
     */
    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }
}
