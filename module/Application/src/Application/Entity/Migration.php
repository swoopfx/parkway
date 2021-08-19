<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Migration
 *
 * @ORM\Table(name="migration")
 * @ORM\Entity
 */
class Migration
{
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=180, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $version;

    /**
     * @var int|null
     *
     * @ORM\Column(name="apply_time", type="integer", nullable=true)
     */
    private $applyTime;


}
