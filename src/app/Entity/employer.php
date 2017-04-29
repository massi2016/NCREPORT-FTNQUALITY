<?php
namespace App\Entity;
use App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="employer")
 */
class employer
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
    protected $full_name;
    /**
     * @ORM\Column(type="string", length=150)
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $date_entrance;



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
     * set emplye fullName 
     *
     * @ORM\return string
     */
    public function setFullName($fullName)
    {
        $this->full_name = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * set emplye name 
     *
     * @ORM\return string
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * get emplye name 
     *
     * @ORM\return string
     */
    public function getName()
    {
        return $this->name;
    }

   /**
     * set employe firstName 
     *
     * @ORM\return string
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * set employe fistName 
     *
     * @ORM\return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * set employe dateEntrance 
     *
     * @ORM\return string
     */
    public function setDateEntrance($dateEntrance)
    {
        $this->date_entrance = $dateEntrance;

        return $this;
    }

    /**
     * get employe dateEntrance 
     *
     * @ORM\return string
     */
    public function getDateEntrance()
    {
        return $this->date_entrance;
    }
    
}