<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="t_languages")
 * @ORM\Entity
 */
class Languages
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short", type="string", length=10, nullable=true)
     */
    private $short;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_iso", type="string", length=10, nullable=true)
     */
    private $shortIso;


}