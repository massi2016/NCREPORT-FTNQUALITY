<?php
namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="niveau")
 */
class niveau
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id_tech", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id_tech;
    /**
     * @ORM\Column(type="integer")
     */
    protected $niveau;

    /**
     * @ORM\Column(type="string")
     */
    protected $description;

    
   
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
     * Get niveau Id_tech
     *
     * @ORM\return integer
     */
    public function getId_tech()
    {
        return $this->Id_tech;
    }

    /**
     * set niveau niveau 
     *
     * @ORM\return string
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }


    /**
     * set niveau description 
     *
     * @ORM\return string
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get niveau description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
          
    
}