<?php
namespace App\Entity;
use App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="categorie")
 */
class categorie
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
    protected $Nom_cat;
    
   
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
     * Get categorie Id_tech
     *
     * @ORM\return integer
     */
    public function getId_tech()
    {
        return $this->Id_tech;
    }

    /**
     * set categorie Nom_cat 
     *
     * @ORM\return string
     */
    public function setNom_cat($Nom_cat)
    {
        $this->Nom_cat = $Nom_cat;

        return $this;
    }

    /**
     * Get categorie Nom_cat
     *
     * @return string
     */
    public function getNom_cat()
    {
        return $this->Nom_cat;
    }

          
    
}