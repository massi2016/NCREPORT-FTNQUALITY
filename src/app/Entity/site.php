<?php
namespace App\Entity;
use App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="site")
 */
class site
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
    protected $site;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $description;

    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $adresse;

    
   
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
     * set site site 
     *
     * @ORM\return string
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site site
     *
     * @ORM\return string
     */
    public function getSite()
    {
        return $this->site;
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
     * set site adresse
     *
     * @ORM\return string
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get site adresse
     *
     * @ORM\return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }          
    
}