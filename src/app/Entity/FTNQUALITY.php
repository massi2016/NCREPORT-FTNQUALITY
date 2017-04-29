<?php
namespace App\Entity;
use App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="FTNQUALITY")
 */
class FTNQUALITY
{
    /**
     * @ORM\Id
     * @ORM\Column(name="Id_tech", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id_tech;

    /**
     * One FTNQUALITY blongs One employer.
     * @ORM\OneToOne(targetEntity="employer")
     * @ORM\JoinColumn(name="employee_id_tech", referencedColumnName="Id_tech")
     */
    private $employee_id_tech;

    /**
     * One FTNQUALITY blongs One job.
     * @ORM\OneToOne(targetEntity="job")
     * @ORM\JoinColumn(name="job_id_tech", referencedColumnName="Id_tech")
     */
    private $job_id_tech;

      /**
     * One FTNQUALITY blongs One site.
     * @ORM\OneToOne(targetEntity="site")
     * @ORM\JoinColumn(name="site_id_tech", referencedColumnName="Id_tech")
     */
    private $site_id_tech;

    /**
     * Many FTNQUALITY blongs One categorie.
     * @ORM\OneToOne(targetEntity="categorie")
     * @ORM\JoinColumn(name="id_category", referencedColumnName="Id_tech")
     */
    private $category;

    /**
     * One FTNQUALITY blongs One competence.
     * @ORM\OneToOne(targetEntity="competence")
     * @ORM\JoinColumn(name="competence_id_tech", referencedColumnName="Id_tech")
     */
    private $competence_id_tech;


    /**
     * @ORM\Column(type="integer", length=64)
     */
    protected $excpected;

    /**
     * @ORM\Column(type="integer", length=64)
     */
    protected $collected;    
   
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
     * Get FTNQUALITY Id_tech
     *
     * @ORM\return integer
     */
    public function getId_tech()
    {
        return $this->Id_tech;
    }

    /**
     * set FTNQUALITY employer 
     * @ORM\return employer
     */
    public function setEmployee_id_tech($employee_id_tech)
    {
        $this->employee_id_tech = $employee_id_tech;

        return $this;
    }

    /**
     * Get FTNQUALITY employer
     *
     * @ORM\return employer
     */
    public function getEmloyee_id_tech()
    {
        return $this->employee_id_tech;
    }

    /**
     * set FTNQUALITY job 
     *
     * @ORM\return job
     */
    public function setJob_id_tech($job_id_tech)
    {
        $this->job_id_tech = $job_id_tech;

        return $this;
    }

    /**
     * Get FTNQUALITY job
     *
     * @ORM\return job
     */
    public function getJob_id_tech()
    {
        return $this->job_id_tech;
    }


    /**
     * set FTNQUALITY site 
     *
     * @ORM\return site
     */
    public function setSite_id_tech($site_id_tech)
    {
        $this->site_id_tech = $site_id_tech;

        return $this;
    }

    /**
     * Get FTNQUALITY site
     *
     * @ORM\return site
     */
    public function getSite_id_tech()
    {
        return $this->site_id_tech;
    }



    /**
     * set FTNQUALITY category 
     *
     * @ORM\return categorie
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get FTNQUALITY category
     *
     * @ORM\return categorie    
     */
    public function getCategory()
    {
        return $this->category;
    }



    /**
     * set FTNQUALITY excpected 
     *
     * @ORM\return integer
     */
    public function setExcpected($excpected)
    {
        $this->excpected = $excpected;

        return $this;
    }

    /**
     * Get FTNQUALITY excpected
     *
     * @ORM\return integer
     */
    public function getExcpected()
    {
        return $this->excpected;
    }
    
}