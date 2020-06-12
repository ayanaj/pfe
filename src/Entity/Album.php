<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table(name="album", indexes={@ORM\Index(name="fk_Album_Utilisateur1_idx", columns={"Utilisateur_idUtilisateur"}), @ORM\Index(name="fk_Album_TypeAlbum1_idx", columns={"TypeAlbum_id_TypeAlbum"})})
 * @ORM\Entity
 */
class Album
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Album", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlbum;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \Typealbum
     *
     * @ORM\ManyToOne(targetEntity="Typealbum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypeAlbum_id_TypeAlbum", referencedColumnName="id_TypeAlbum")
     * })
     */
    private $typealbumTypealbum;

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
