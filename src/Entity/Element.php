<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element", indexes={@ORM\Index(name="fk_Element_Clipart1_idx", columns={"Clipart_id_clipart"}), @ORM\Index(name="fk_Element_Page1_idx", columns={"Page_id_Page"}), @ORM\Index(name="fk_Element_Photo_favoris1_idx", columns={"Photo_favoris_id_Photo_favoris"})})
 * @ORM\Entity
 */
class Element
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Element", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idElement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=45, nullable=true)
     */
    private $text;

    /**
     * @var float|null
     *
     * @ORM\Column(name="abcisse", type="float", precision=10, scale=0, nullable=true)
     */
    private $abcisse;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ordonnÃ©", type="float", precision=10, scale=0, nullable=true)
     */
    private $ordonnã©;

    /**
     * @var float|null
     *
     * @ORM\Column(name="rotation", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotation;

    /**
     * @var float|null
     *
     * @ORM\Column(name="height", type="float", precision=10, scale=0, nullable=true)
     */
    private $height;

    /**
     * @var float|null
     *
     * @ORM\Column(name="width", type="float", precision=10, scale=0, nullable=true)
     */
    private $width;

    /**
     * @var \Clipart
     *
     * @ORM\ManyToOne(targetEntity="Clipart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Clipart_id_clipart", referencedColumnName="id_clipart")
     * })
     */
    private $clipartClipart;

    /**
     * @var \Page
     *
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Page_id_Page", referencedColumnName="id_Page")
     * })
     */
    private $pagePage;

    /**
     * @var \PhotoFavoris
     *
     * @ORM\ManyToOne(targetEntity="PhotoFavoris")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Photo_favoris_id_Photo_favoris", referencedColumnName="id_Photo_favoris")
     * })
     */
    private $photoFavorisPhotoFavoris;


}
