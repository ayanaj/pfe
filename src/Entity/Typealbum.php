<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typealbum
 *
 * @ORM\Table(name="typealbum", indexes={@ORM\Index(name="fk_TypeAlbum_Utilisateur1_idx", columns={"Utilisateur_idUtilisateur"})})
 * @ORM\Entity
 */
class Typealbum
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_TypeAlbum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypealbum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellÃ©", type="string", length=45, nullable=true)
     */
    private $libellã©;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_page", type="integer", nullable=true)
     */
    private $nombrePage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="taille", type="integer", nullable=true)
     */
    private $taille;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Utilisateur_idUtilisateur", referencedColumnName="idUtilisateur")
     * })
     */
    private $utilisateurutilisateur;


}
