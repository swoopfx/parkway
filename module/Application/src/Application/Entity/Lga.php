<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Lga
 *
 * @ORM\Table(name="lga")
 * @ORM\Entity
 */
class Lga
{

    /**
     *
     * @var int @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *
     * @var int @ORM\Column(name="lga_id", type="integer", nullable=false)
     */
    private $lgaId;

    /**
     *
     * @var string @ORM\Column(name="lga_name", type="string", length=50, nullable=false)
     */
    private $lgaName;

    /**
     *
     *  @ORM\ManyToOne(targetEntity="States")
     *  
     *  @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     *  
     *  @var States
     *     
     */
    private $stateId;

    /**
     *
     * @var string|null @ORM\Column(name="lga_description", type="text", length=65535, nullable=true)
     */
    private $lgaDescription;

    /**
     *
     * @var string @ORM\Column(name="entered_by_user", type="string", length=50, nullable=false)
     */
    private $enteredByUser;

    /**
     *
     * @var \DateTime @ORM\Column(name="date_entered", type="datetime", nullable=false)
     */
    private $dateEntered;

    /**
     *
     * @var string @ORM\Column(name="user_ip_address", type="string", length=50, nullable=false)
     */
    private $userIpAddress;
    
    /**
     * @ORM\OneToMany(targetEntity="PollingUnit", mappedBy="lgaId")
     * @var Collection
     */
    private $pollingUnits;
    
    
    
    public function __construct(){
        $this->pollingUnits = new ArrayCollection();
    }
    /**
     * @return the $uniqueid
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * @return the $lgaId
     */
    public function getLgaId()
    {
        return $this->lgaId;
    }

    /**
     * @return the $lgaName
     */
    public function getLgaName()
    {
        return $this->lgaName;
    }

    /**
     * @return the $stateId
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @return the $lgaDescription
     */
    public function getLgaDescription()
    {
        return $this->lgaDescription;
    }

    /**
     * @return the $enteredByUser
     */
    public function getEnteredByUser()
    {
        return $this->enteredByUser;
    }

    /**
     * @return the $dateEntered
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * @return the $userIpAddress
     */
    public function getUserIpAddress()
    {
        return $this->userIpAddress;
    }

    /**
     * @param number $uniqueid
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;
        return $this;
    }

    /**
     * @param number $lgaId
     */
    public function setLgaId($lgaId)
    {
        $this->lgaId = $lgaId;
        return $this;
    }

    /**
     * @param string $lgaName
     */
    public function setLgaName($lgaName)
    {
        $this->lgaName = $lgaName;
        return $this;
    }

    /**
     * @param States $stateId
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $lgaDescription
     */
    public function setLgaDescription($lgaDescription)
    {
        $this->lgaDescription = $lgaDescription;
        return $this;
    }

    /**
     * @param string $enteredByUser
     */
    public function setEnteredByUser($enteredByUser)
    {
        $this->enteredByUser = $enteredByUser;
        return $this;
    }

    /**
     * @param DateTime $dateEntered
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;
        return $this;
    }

    /**
     * @param string $userIpAddress
     */
    public function setUserIpAddress($userIpAddress)
    {
        $this->userIpAddress = $userIpAddress;
        return $this;
    }
    /**
     * @return the $pollingUnits
     */
    public function getPollingUnits()
    {
        return $this->pollingUnits;
    }


}
