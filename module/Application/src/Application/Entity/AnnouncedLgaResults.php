<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * AnnouncedLgaResults
 *
 * @ORM\Table(name="announced_lga_results")
 * @ORM\Entity
 */
class AnnouncedLgaResults
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
     * @var Lga
     * @ORM\ManyToOne(targetEntity="Lga")
     * @ORM\JoinColumn(name="lga_name", referencedColumnName="id")
     *
     */
    private $lgaName;

    /**
     * @var string
     *
     * @ORM\Column(name="party_abbreviation", type="string", length=4, nullable=false, options={"fixed"=true})
     */
    private $partyAbbreviation;

    /**
     * @var int
     *
     * @ORM\Column(name="party_score", type="integer", nullable=false)
     */
    private $partyScore;

    /**
     * @var string
     *
     * @ORM\Column(name="entered_by_user", type="string", length=50, nullable=false)
     */
    private $enteredByUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=false)
     */
    private $dateEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ip_address", type="string", length=50, nullable=false)
     */
    private $userIpAddress;
    /**
     * @return the $resultId
     */
    public function getResultId()
    {
        return $this->resultId;
    }

    /**
     * @return the $lgaName
     */
    public function getLgaName()
    {
        return $this->lgaName;
    }

    /**
     * @return the $partyAbbreviation
     */
    public function getPartyAbbreviation()
    {
        return $this->partyAbbreviation;
    }

    /**
     * @return the $partyScore
     */
    public function getPartyScore()
    {
        return $this->partyScore;
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
     * @param number $resultId
     */
    public function setResultId($resultId)
    {
        $this->resultId = $resultId;
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
     * @param string $partyAbbreviation
     */
    public function setPartyAbbreviation($partyAbbreviation)
    {
        $this->partyAbbreviation = $partyAbbreviation;
        return $this;
    }

    /**
     * @param number $partyScore
     */
    public function setPartyScore($partyScore)
    {
        $this->partyScore = $partyScore;
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



}
