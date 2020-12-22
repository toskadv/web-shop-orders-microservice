<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangeVersions
 *
 * @ORM\Table(name="t_change_versions")
 * @ORM\Entity
 */
class ChangeVersions
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
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;


}