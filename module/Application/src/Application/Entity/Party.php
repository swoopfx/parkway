<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Party
 *
 * @ORM\Table(name="party")
 * @ORM\Entity
 */
class Party
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
     * @ORM\Column(name="partyid", type="string", length=11, nullable=false)
     */
    private $partyid;

    /**
     * @var string
     *
     * @ORM\Column(name="partyname", type="string", length=11, nullable=false)
     */
    private $partyname;


}
