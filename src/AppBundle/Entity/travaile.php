<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * travaile
 *
 * @ORM\Table(name="travaile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\travaileRepository")
 */
class travaile
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterentre", type="string")
     */
    private $daterentre;

    /**
     * @var float
     *
     * @ORM\Column(name="dure", type="float", nullable=true)
     */
    private $dure;


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
     * @return travaile
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
     * Set daterentre
     *
     * @param \DateTime $daterentre
     *
     * @return travaile
     */
    public function setDaterentre($daterentre)
    {
        $this->daterentre = $daterentre;

        return $this;
    }

    /**
     * Get daterentre
     *
     * @return \DateTime
     */
    public function getDaterentre()
    {
        return $this->daterentre;
    }

    /**
     * Set dure
     *
     * @param float $dure
     *
     * @return travaile
     */
    public function setDure($dure)
    {
        $this->dure = $dure;

        return $this;
    }

    /**
     * Get dure
     *
     * @return float
     */
    public function getDure()
    {
        return $this->dure;
    }
}
