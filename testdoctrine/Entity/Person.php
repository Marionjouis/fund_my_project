<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table(name="person")
 * @ORM\Entity
 */
class Person
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     */
    private $birthdate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entity\Club", inversedBy="person")
     * @ORM\JoinTable(name="person_has_club",
     *   joinColumns={
     *     @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="club_id", referencedColumnName="id")
     *   }
     * )
     */
    private $club;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->club = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return strtoupper($this->lastname);
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthdate(): ?\DateTime
    {
        return $this->birthdate;
    }

    /**
     * @param \DateTime|null $birthdate
     */
    public function setBirthdate(?\DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClub(): \Doctrine\Common\Collections\Collection
    {
        return $this->club;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $club
     */
    public function setClub(\Doctrine\Common\Collections\Collection $club): void
    {
        $this->club = $club;
    }


    public function GetFullname(): string{

        return $this->getFirstname()." ".$this->getLastname();
    }

    public function getFormatedBirthdate(string $format = "d/m/Y",string $invalid ="Date inconnue"):string
    {
        if ($this->GetBirthdate() !=null){
            return $this->getBirthdate()->format($format);
        } else {
            return $invalid;
        }
    }

}
