<?php

namespace noirdelautre\dossierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dossier
 *
 * @ORM\Table(name="dossier")
 * @ORM\Entity
 */
class Dossier
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dadeb", type="datetime", nullable=false)
     */
    private $dadeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dafin", type="datetime", nullable=false)
     */
    private $dafin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="termine", type="boolean", nullable=true)
     */
    private $termine;

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
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="entete", type="string", length=255, nullable=true)
     */
    private $entete;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=4000, nullable=true)
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255, nullable=true)
     */
    private $lieu;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

