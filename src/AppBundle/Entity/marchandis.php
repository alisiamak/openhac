<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * marchandis
 *
 * @ORM\Table(name="marchandis")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\marchandisRepository")
 */
class marchandis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\article", cascade={"persist"})
     *
     *
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=255, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="origine", type="string", length=255, nullable=true)
     */
    private $origine;

    /**
     * @var float
     *
     * @ORM\Column(name="hauter", type="float", nullable=true)
     */
    private $hauter;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur", type="float", nullable=true)
     */
    private $largeur;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="dateachat", type="string", length=255, nullable=true)
     */
    private $dateachat;

    /**
     * @var string
     *
     * @ORM\Column(name="datevendre", type="string", length=255, nullable=true)
     */
    private $datevendre;

    /**
     * @var string
     *
     * @ORM\Column(name="dateprete", type="string", length=255, nullable=true)
     */
    private $dateprete;

    /**
     * @var string
     *
     * @ORM\Column(name="daterendu", type="string", length=255, nullable=true)
     */
    private $daterendu;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\preteur", cascade={"persist"})
     *
     *
     */
    private $preteur;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\vendeur", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $vendeur;

    /**
     *
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\acheteur", cascade={"persist"})
     *
     */
    private $acheteur;

    /**
     * @var string
     *
     * @ORM\Column(name="datesoumetrereparation", type="string", length=255, nullable=true)
     */
    private $datesoumetrereparation;

    /**
     * @var string
     *
     * @ORM\Column(name="daterendureparation", type="string", length=255, nullable=true)
     */
    private $daterendureparation;

    /**
     * @var string
     *
     * @ORM\Column(name="prixreparation", type="string", length=255, nullable=true)
     */
    private $prixreparation;

    /**
     * @var float
     *
     * @ORM\Column(name="prixachat", type="float", nullable=true)
     */
    private $prixachat;

    /**
     * @var float
     *
     * @ORM\Column(name="prixvendre", type="float", nullable=true)
     */
    private $prixvendre;

    /**
     *
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\reparateur", cascade={"persist"})
     *
     */

    private $reparateur;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return marchandis
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return marchandis
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set origine
     *
     * @param string $origine
     *
     * @return marchandis
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return string
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set hauter
     *
     * @param float $hauter
     *
     * @return marchandis
     */
    public function setHauter($hauter)
    {
        $this->hauter = $hauter;

        return $this;
    }

    /**
     * Get hauter
     *
     * @return float
     */
    public function getHauter()
    {
        return $this->hauter;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     *
     * @return marchandis
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return float
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return marchandis
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set dateachat
     *
     * @param string $dateachat
     *
     * @return marchandis
     */
    public function setDateachat($dateachat)
    {
        $this->dateachat = $dateachat;

        return $this;
    }

    /**
     * Get dateachat
     *
     * @return string
     */
    public function getDateachat()
    {
        return $this->dateachat;
    }

    /**
     * Set datevendre
     *
     * @param string $datevendre
     *
     * @return marchandis
     */
    public function setDatevendre($datevendre)
    {
        $this->datevendre = $datevendre;

        return $this;
    }

    /**
     * Get datevendre
     *
     * @return string
     */
    public function getDatevendre()
    {
        return $this->datevendre;
    }

    /**
     * Set dateprete
     *
     * @param string $dateprete
     *
     * @return marchandis
     */
    public function setDateprete($dateprete)
    {
        $this->dateprete = $dateprete;

        return $this;
    }

    /**
     * Get dateprete
     *
     * @return string
     */
    public function getDateprete()
    {
        return $this->dateprete;
    }

    /**
     * Set daterendu
     *
     * @param string $daterendu
     *
     * @return marchandis
     */
    public function setDaterendu($daterendu)
    {
        $this->daterendu = $daterendu;

        return $this;
    }

    /**
     * Get daterendu
     *
     * @return string
     */
    public function getDaterendu()
    {
        return $this->daterendu;
    }

    /**
     * Set preteur
     *
     * @param string $preteur
     *
     * @return marchandis
     */
    public function setPreteur($preteur)
    {
        $this->preteur = $preteur;

        return $this;
    }

    /**
     * Get preteur
     *
     * @return string
     */
    public function getPreteur()
    {
        return $this->preteur;
    }

    /**
     * Set vendeur
     *
     * @param string $vendeur
     *
     * @return marchandis
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return string
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set acheteur
     *
     * @param string $acheteur
     *
     * @return marchandis
     */
    public function setAcheteur($acheteur)
    {
        $this->acheteur = $acheteur;

        return $this;
    }

    /**
     * Get acheteur
     *
     * @return string
     */
    public function getAcheteur()
    {
        return $this->acheteur;
    }

    /**
     * Set datesoumetrereparation
     *
     * @param string $datesoumetrereparation
     *
     * @return marchandis
     */
    public function setDatesoumetrereparation($datesoumetrereparation)
    {
        $this->datesoumetrereparation = $datesoumetrereparation;

        return $this;
    }

    /**
     * Get datesoumetrereparation
     *
     * @return string
     */
    public function getDatesoumetrereparation()
    {
        return $this->datesoumetrereparation;
    }

    /**
     * Set daterendureparation
     *
     * @param string $daterendureparation
     *
     * @return marchandis
     */
    public function setDaterendureparation($daterendureparation)
    {
        $this->daterendureparation = $daterendureparation;

        return $this;
    }

    /**
     * Get daterendureparation
     *
     * @return string
     */
    public function getDaterendureparation()
    {
        return $this->daterendureparation;
    }

    /**
     * Set prixreparation
     *
     * @param string $prixreparation
     *
     * @return marchandis
     */
    public function setPrixreparation($prixreparation)
    {
        $this->prixreparation = $prixreparation;

        return $this;
    }

    /**
     * Get prixreparation
     *
     * @return string
     */
    public function getPrixreparation()
    {
        return $this->prixreparation;
    }

    /**
     * Set prixachat
     *
     * @param float $prixachat
     *
     * @return marchandis
     */
    public function setPrixachat($prixachat)
    {
        $this->prixachat = $prixachat;

        return $this;
    }

    /**
     * Get prixachat
     *
     * @return float
     */
    public function getPrixachat()
    {
        return $this->prixachat;
    }

    /**
     * Set prixvendre
     *
     * @param float $prixvendre
     *
     * @return marchandis
     */
    public function setPrixvendre($prixvendre)
    {
        $this->prixvendre = $prixvendre;

        return $this;
    }

    /**
     * Get prixvendre
     *
     * @return float
     */
    public function getPrixvendre()
    {
        return $this->prixvendre;
    }

    /**
     * Set reparateur
     *
     * @param string $reparateur
     *
     * @return marchandis
     */
    public function setReparateur($reparateur)
    {
        $this->reparateur = $reparateur;

        return $this;
    }

    /**
     * Get reparateur
     *
     * @return string
     */
    public function getReparateur()
    {
        return $this->reparateur;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return marchandis
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return marchandis
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}
