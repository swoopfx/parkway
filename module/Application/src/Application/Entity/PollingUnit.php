<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PollingUnit
 *
 * @ORM\Table(name="polling_unit")
 * @ORM\Entity
 */
class PollingUnit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="polling_unit_id", type="integer", nullable=true)
     */
    private $pollingUnitId;

    /**
     * @var Ward
     * @ORM\ManyToOne(targetEntity="Ward")
     * @ORM\JoinColumn(name="ward_id", referencedColumnName="id")
     * 
     */
    private $wardId;

    /**
     * @var Lga
     *
     * @ORM\ManyToOne(targetEntity="Lga", inversedBy="pollingUnits")
     * @ORM\JoinColumn(name="lga_id", referencedColumnName="id")
     * 
     */
    private $lgaId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="uniquewardid", type="integer", nullable=true)
     */
    private $uniquewardid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="polling_unit_number", type="string", length=50, nullable=true)
     */
    private $pollingUnitNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="polling_unit_name", type="string", length=50, nullable=true)
     */
    private $pollingUnitName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="polling_unit_description", type="text", length=65535, nullable=true)
     */
    private $pollingUnitDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="string", length=255, nullable=true)
     */
    private $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long", type="string", length=255, nullable=true)
     */
    private $long;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entered_by_user", type="string", length=50, nullable=true)
     */
    private $enteredByUser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_ip_address", type="string", length=50, nullable=true)
     */
    private $userIpAddress;
    
    /**
     * @ORM\OneToMany(targetEntity="AnnouncedPuResults", mappedBy="pollingUnitUniqueid")
     * @var Collection
     */
    private $puResult;
    
    
    public function __construct(){
        $this->puResult = new ArrayCollection();
        
    }
    
//     private $
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $pollingUnitId
     */
    public function getPollingUnitId()
    {
        return $this->pollingUnitId;
    }

    /**
     * @return the $wardId
     */
    public function getWardId()
    {
        return $this->wardId;
    }

    /**
     * @return the $lgaId
     */
    public function getLgaId()
    {
        return $this->lgaId;
    }

    /**
     * @return the $uniquewardid
     */
    public function getUniquewardid()
    {
        return $this->uniquewardid;
    }

    /**
     * @return the $pollingUnitNumber
     */
    public function getPollingUnitNumber()
    {
        return $this->pollingUnitNumber;
    }

    /**
     * @return the $pollingUnitName
     */
    public function getPollingUnitName()
    {
        return $this->pollingUnitName;
    }

    /**
     * @return the $pollingUnitDescription
     */
    public function getPollingUnitDescription()
    {
        return $this->pollingUnitDescription;
    }

    /**
     * @return the $lat
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return the $long
     */
    public function getLong()
    {
        return $this->long;
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
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param number $pollingUnitId
     */
    public function setPollingUnitId($pollingUnitId)
    {
        $this->pollingUnitId = $pollingUnitId;
        return $this;
    }

    /**
     * @param \Application\Entity\Ward $wardId
     */
    public function setWardId($wardId)
    {
        $this->wardId = $wardId;
        return $this;
    }

    /**
     * @param \Application\Entity\Lga $lgaId
     */
    public function setLgaId($lgaId)
    {
        $this->lgaId = $lgaId;
        return $this;
    }

    /**
     * @param Ambigous <number, NULL> $uniquewardid
     */
    public function setUniquewardid($uniquewardid)
    {
        $this->uniquewardid = $uniquewardid;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $pollingUnitNumber
     */
    public function setPollingUnitNumber($pollingUnitNumber)
    {
        $this->pollingUnitNumber = $pollingUnitNumber;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $pollingUnitName
     */
    public function setPollingUnitName($pollingUnitName)
    {
        $this->pollingUnitName = $pollingUnitName;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $pollingUnitDescription
     */
    public function setPollingUnitDescription($pollingUnitDescription)
    {
        $this->pollingUnitDescription = $pollingUnitDescription;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $long
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $enteredByUser
     */
    public function setEnteredByUser($enteredByUser)
    {
        $this->enteredByUser = $enteredByUser;
        return $this;
    }

    /**
     * @param Ambigous <DateTime, NULL> $dateEntered
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $userIpAddress
     */
    public function setUserIpAddress($userIpAddress)
    {
        $this->userIpAddress = $userIpAddress;
        return $this;
    }
    /**
     * @return the $puResult
     */
    public function getPuResult()
    {
        return $this->puResult;
    }




}
