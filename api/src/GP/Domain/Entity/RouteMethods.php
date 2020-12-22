<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RouteMethods
 *
 * @ORM\Table(name="t_route_methods")
 * @ORM\Entity
 */
class RouteMethods
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
     * @ORM\Column(name="name", type="string", length=10, nullable=false)
     */
    private $name;


}