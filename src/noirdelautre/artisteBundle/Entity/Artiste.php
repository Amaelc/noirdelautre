<?php

namespace noirdelautre\artisteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artiste
 *
 * @ORM\Table(name="artiste")
 * @ORM\Entity
 */
class Artiste
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomArtiste", type="string", length=50, nullable=false)
     */
    private $nomartiste;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="siteWeb", type="string", length=100, nullable=true)
     */
    private $siteweb;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

