<?php

namespace noirdelautre\imageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listeimages
 *
 * @ORM\Table(name="listeimages")
 * @ORM\Entity
 */
class Listeimages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="image_id", type="integer", nullable=false)
     */
    private $imageId;

    /**
     * @var integer
     *
     * @ORM\Column(name="artiste_id", type="integer", nullable=false)
     */
    private $artisteId;

    /**
     * @var integer
     *
     * @ORM\Column(name="dossier_id", type="integer", nullable=false)
     */
    private $dossierId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

