<?php

namespace App\GP\Domain\Entity;



/**
 * DunningStepRemoveArticles
 */
class DunningStepRemoveArticles
{
    /**
     * @var int
     */
    private $id;

    private $step;

    /**
     * @var \TArticles
     *
               *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;


}
