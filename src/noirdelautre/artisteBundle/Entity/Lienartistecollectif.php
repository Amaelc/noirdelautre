<?php

namespace noirdelautre\artisteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lienartistecollectif
 *
 * @ORM\Table(name="lienartistecollectif")
 * @ORM\Entity
 */
class Lienartistecollectif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="artiste_id", type="integer", nullable=true)
     */
    private $artisteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="collectif_id", type="integer", nullable=true)
     */
    private $collectifId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

