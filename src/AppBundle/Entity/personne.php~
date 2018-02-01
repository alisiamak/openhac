<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\personneRepository")
 */
class personne
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
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="prenome", type="string", length=255, nullable=true)
     */
    private $prenome;

    /**
   *
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\travaile", cascade={"persist"})
   *
   */
  private $travaile;


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
     * Set nome
     *
     * @param string $nome
     *
     * @return personne
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set prenome
     *
     * @param string $prenome
     *
     * @return personne
     */
    public function setPrenome($prenome)
    {
        $this->prenome = $prenome;

        return $this;
    }

    /**
     * Get prenome
     *
     * @return string
     */
    public function getPrenome()
    {
        return $this->prenome;
    }

    /**
     * Set travaile
     *
     * @param \AppBundle\Entity\travaile $travaile
     *
     * @return personne
     */
    public function setTravaile(\AppBundle\Entity\travaile $travaile = null)
    {
        $this->travaile = $travaile;

        return $this;
    }

    /**
     * Get travaile
     *
     * @return \AppBundle\Entity\travaile
     */
    public function getTravaile()
    {
        return $this->travaile;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->travaile = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add travaile
     *
     * @param \AppBundle\Entity\travaile $travaile
     *
     * @return personne
     */
    public function addTravaile(\AppBundle\Entity\travaile $travaile)
    {
        $this->travaile[] = $travaile;

        return $this;
    }

    /**
     * Remove travaile
     *
     * @param \AppBundle\Entity\travaile $travaile
     */
    public function removeTravaile(\AppBundle\Entity\travaile $travaile)
    {
        $this->travaile->removeElement($travaile);
    }
}
