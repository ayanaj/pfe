<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clipart
 *
 * @ORM\Table(name="clipart", indexes={@ORM\Index(name="fk_Clipart_Utilisateur1_idx", columns={"Utilisateur_idUtilisateur"})})
 * @ORM\Entity
 */
class Clipart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_clipart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClipart;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=45, nullable=true)
     */
    private $path;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="abcisse", type="string", length=45, nullable=true)
     */
    private $abcisse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ordonnÃ©", type="string", length=45, nullable=true)
     */
    private $ordonnã©;

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
