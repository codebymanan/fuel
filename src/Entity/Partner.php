<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PartnerRepository")
 */
class Partner
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $NameOfEntity;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $SectorOfEntity;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Function;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $PhoneNumber;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameOfEntity(): ?string
    {
        return $this->NameOfEntity;
    }

    public function setNameOfEntity(string $NameOfEntity): self
    {
        $this->NameOfEntity = $NameOfEntity;

        return $this;
    }

    public function getSectorOfEntity(): ?string
    {
        return $this->SectorOfEntity;
    }

    public function setSectorOfEntity(string $SectorOfEntity): self
    {
        $this->SectorOfEntity = $SectorOfEntity;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getFunction(): ?string
    {
        return $this->Function;
    }

    public function setFunction(string $Function): self
    {
        $this->Function = $Function;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(string $PhoneNumber): self
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
