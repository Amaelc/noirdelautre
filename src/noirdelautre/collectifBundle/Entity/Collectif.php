<?php

namespace noirdelautre\collectifBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collectif
 *
 * @ORM\Table(name="collectif")
 * @ORM\Entity
 */
class Collectif
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=true)
     */
    private $description;

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

