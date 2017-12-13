<?php

namespace AppBundle\Entity;

/**
 * Projet
 */
class Projet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $projetName;

    /**
     * @var \DateTime
     */
    private $dateBegin;

    /**
     * @var \DateTime
     */
    private $dateEnd;


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
     * Set projetName
     *
     * @param string $projetName
     *
     * @return Projet
     */
    public function setProjetName($projetName)
    {
        $this->projetName = $projetName;

        return $this;
    }

    /**
     * Get projetName
     *
     * @return string
     */
    public function getProjetName()
    {
        return $this->projetName;
    }

    public function __toString()
    {
        return $this->projetName . ' ';
    }

    /**
     * Set dateBegin
     *
     * @param \DateTime $dateBegin
     *
     * @return Projet
     */
    public function setDateBegin($dateBegin)
    {
        $this->dateBegin = $dateBegin;

        return $this;
    }

    /**
     * Get dateBegin
     *
     * @return \DateTime
     */
    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return Projet
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $fiches;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fiches = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fich
     *
     * @param \AppBundle\Entity\Fiche $fich
     *
     * @return Projet
     */
    public function addFich(\AppBundle\Entity\Fiche $fich)
    {
        $this->fiches[] = $fich;

        return $this;
    }

    /**
     * Remove fich
     *
     * @param \AppBundle\Entity\Fiche $fich
     */
    public function removeFich(\AppBundle\Entity\Fiche $fich)
    {
        $this->fiches->removeElement($fich);
    }

    /**
     * Get fiches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiches()
    {
        return $this->fiches;
    }
}
