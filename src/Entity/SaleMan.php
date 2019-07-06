<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SaleManRepository")
 */
class SaleMan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SurName;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $BirthDate;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $NIC;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $PhoneNumber;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $Localisation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getSurName(): ?string
    {
        return $this->SurName;
    }

    public function setSurName(string $SurName): self
    {
        $this->SurName = $SurName;

        return $this;
    }

    public function getBirthDate(): ?string
    {
        return $this->BirthDate;
    }

    public function setBirthDate(string $BirthDate): self
    {
        $this->BirthDate = $BirthDate;

        return $this;
    }

    public function getNIC(): ?string
    {
        return $this->NIC;
    }

    public function setNIC(string $NIC): self
    {
        $this->NIC = $NIC;

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

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

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

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->Localisation;
    }

    public function setLocalisation(?string $Localisation): self
    {
        $this->Localisation = $Localisation;

        return $this;
    }
}
