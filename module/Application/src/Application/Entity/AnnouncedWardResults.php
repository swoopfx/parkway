<?php
namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * AnnouncedWardResults
 *
 * @ORM\Table(name="announced_ward_results")
 * @ORM\Entity
 */
class AnnouncedWardResults
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
     * @ORM\Column(name="ward_name", type="string", length=50, nullable=false)
     */
    private $wardName;

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


}
