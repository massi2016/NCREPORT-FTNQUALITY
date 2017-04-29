<?php
namespace App\Entity;
use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="job")
 */
class job
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
    protected $name;
    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $description;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $management_information;

   
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
     * Get employer Id_tech
     *
     * @ORM\return integer
     */
    public function getId_tech()
    {
        return $this->Id_tech;
    }

    /**
     * set job name 
     *
     * @ORM\return string
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get job name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set job description 
     *
     * @ORM\return string
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * get job description 
     *
     * @ORM\return string
     */
    public function getDescription()
    {
        return $this->description;
    }

   /**
     * set job management_information 
     *
     * @ORM\return string
     */
    public function setManagement_information($management_information)
    {
        $this->management_information = $management_information;

        return $this;
    }

    /**
     * set job management_information 
     *
     * @ORM\return string
     */
    public function getManagement_information()
    {
        return $this->management_information;
    }  
    
}