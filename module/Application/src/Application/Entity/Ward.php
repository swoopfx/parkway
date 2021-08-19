<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ward
 *
 * @ORM\Table(name="ward")
 * @ORM\Entity
 */
class Ward
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
     * @ORM\Column(name="ward_id", type="integer", nullable=false)
     */
    private $wardId;

    /**
     * @var string
     *
     * @ORM\Column(name="ward_name", type="string", length=50, nullable=false)
     */
    private $wardName;

    /**
      * @var Lga
     *
     * @ORM\ManyToOne(targetEntity="Lga")
     * @ORM\JoinColumn(name="lga_id", referencedColumnName="id")
     * 
     */
    private $lgaId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ward_description", type="text", length=65535, nullable=true)
     */
    private $wardDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="entered_by_user", type="string", length=50, nullable=true)
     */
    private $enteredByUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetime", nullable=true)
     */
    private $dateEntered;

    /**
     * @var string
     *
     * @ORM\Column(name="user_ip_address", type="string", length=50, nullable=false)
     */
    private $userIpAddress;


}
