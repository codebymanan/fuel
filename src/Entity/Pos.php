<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PosRepository")
 */
class Pos
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
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Tel;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PosManager", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Manager;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Partner;

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

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->Tel;
    }

    public function setTel(string $Tel): self
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getManager(): ?PosManager
    {
        return $this->Manager;
    }

    public function setManager(PosManager $Manager): self
    {
        $this->Manager = $Manager;

        return $this;
    }

    public function getPartner(): ?User
    {
        return $this->Partner;
    }

    public function setPartner(?User $Partner): self
    {
        $this->Partner = $Partner;

        return $this;
    }
}
