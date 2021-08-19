<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * States
 *
 * @ORM\Table(name="states")
 * @ORM\Entity
 */
class States
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
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
     * @return the $stateId
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     * @return the $stateName
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * @param number $stateId
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
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



}
