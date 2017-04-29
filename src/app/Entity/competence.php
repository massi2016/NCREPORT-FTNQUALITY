<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\categorie;


/**
 * competence
 * @ORM\Entity
 * @ORM\Table(name="competence")
 */
class competence
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
    protected $nom_sous_cat;

     /**
     * Many competence blongs One Categorie.
     * @ORM\ManyToOne(targetEntity="categorie")
     * @ORM\JoinColumn(name="id_cat", referencedColumnName="Id_tech")
     */
    private $categorie;
    
   
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
     * Get competence Id_tech
     *
     * @ORM\return integer
     */
    public function getId_tech()
    {
        return $this->Id_tech;
    }

    /**
     * set competence nom_sous_cat 
     *
     * @ORM\return string
     */
    public function setNom_cat($nom_sous_cat)
    {
        $this->nom_sous_cat = $nom_sous_cat;
        return $this;
    }

    /**
     * Get competence nom_sous_cat
     *
     * @ORM\return competence
     */
    public function getNom_sous_cat()
    {
        return $this->nom_sous_cat;
    }   

    /**
     * Get competence categorie
     *
     * @ORM\return categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * set competence categorie
     *
     * @ORM\return categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    
}