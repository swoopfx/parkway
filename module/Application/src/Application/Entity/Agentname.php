<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agentname
 *
 * @ORM\Table(name="agentname")
 * @ORM\Entity
 */
class Agentname
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
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=13, nullable=false, options={"fixed"=true})
     */
    private $phone;

    /**
     * @var  PollingUnit
     *
     * @ORM\ManyToOne(targetEntity="PollingUnit")
     * @ORM\JoinColumn(name="pollingunit_uniqueid", referencedColumnName="id")
     * 
     * 
     */
    private $pollingunitUniqueid;
    /**
     * @return the $nameId
     */
    public function getNameId()
    {
        return $this->nameId;
    }

    /**
     * @return the $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return the $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return the $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return the $pollingunitUniqueid
     */
    public function getPollingunitUniqueid()
    {
        return $this->pollingunitUniqueid;
    }

    /**
     * @param number $nameId
     */
    public function setNameId($nameId)
    {
        $this->nameId = $nameId;
        return $this;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @param Ambigous <string, NULL> $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param number $pollingunitUniqueid
     */
    public function setPollingunitUniqueid($pollingunitUniqueid)
    {
        $this->pollingunitUniqueid = $pollingunitUniqueid;
        return $this;
    }



}
