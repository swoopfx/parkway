<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * AnnouncedStateResults
 *
 * @ORM\Table(name="announced_state_results")
 * @ORM\Entity
 */
class AnnouncedStateResults
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
     * @var string
     *
     * @ORM\Column(name="state_name", type="string", length=50, nullable=false)
     */
    private $stateName;

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
     * @return the $stateName
     */
    public function getStateName()
    {
        return $this->stateName;
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
     * @param string $stateName
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
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
