<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TConnexCounter
 *
 * @ORM\Table(name="t_connex_counter")
 * @ORM\Entity
 */
class TConnexCounter
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="counter", type="integer", nullable=true)
     */
    private $counter = '0';


}
