<?php
namespace App\Entity;
use App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="ligne")
 */
class ligne
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id_tech", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id_tech;
    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $ligne;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $description;

    /**
     * Many Ligne blongs One Site.
     * @ORM\OneToOne(targetEntity="site")
     * @ORM\JoinColumn(name="id_site", referencedColumnName="Id_tech")
     */
    private $site;    
   
    // getters and setters 

    /**
     * Get array copy of object
     *
     * @return array
     */
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    /**
     * Get site Id_tech
     *
     * @ORM\return integer
     */
    public function getId_tech()
    {
        return $this->Id_tech;
    }

    /**
     * set site ligne 
     *
     * @ORM\return string
     */
    public function setLigne($ligne)
    {
        $this->ligne = $ligne;

        return $this;
    }

    /**
     * Get site ligne
     *
     * @ORM\return string
     */
    public function getLigne()
    {
        return $this->ligne;
    }

    /**
     * set site description
     *
     * @ORM\return string
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get site description
     *
     * @ORM\return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * Get ligne site
     *
     * @ORM\return site
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * set ligne site
     *
     * @ORM\return site
     */
    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }
}