<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typepage
 *
 * @ORM\Table(name="typepage", indexes={@ORM\Index(name="fk_TypePage_Utilisateur1_idx", columns={"Utilisateur_idUtilisateur"})})
 * @ORM\Entity
 */
class Typepage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_TypePage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTypepage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libellÃ©", type="string", length=45, nullable=true)
     */
    private $libellã©;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_photo", type="integer", nullable=true)
     */
    private $nombrePhoto;

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
