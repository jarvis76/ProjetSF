<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $useName;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $useFirstName;

    /**
     * @ORM\Column(type="date")
     */
    private $useBristhDate;

    public function getId()
    {
        return $this->id;
    }

    public function getUseName(): ?string
    {
        return $this->useName;
    }

    public function setUseName(string $useName): self
    {
        $this->useName = $useName;

        return $this;
    }

    public function getUseFirstName(): ?string
    {
        return $this->useFirstName;
    }

    public function setUseFirstName(?string $useFirstName): self
    {
        $this->useFirstName = $useFirstName;

        return $this;
    }

    public function getUseBristhDate(): ?\DateTimeInterface
    {
        return $this->useBristhDate;
    }

    public function setUseBristhDate(\DateTimeInterface $useBristhDate): self
    {
        $this->useBristhDate = $useBristhDate;

        return $this;
    }
}
