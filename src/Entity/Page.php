<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table(name="page", indexes={@ORM\Index(name="fk_Page_TypePage1_idx", columns={"TypePage_id_TypePage"})})
 * @ORM\Entity
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Page", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="format", type="string", length=45, nullable=true)
     */
    private $format;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \Typepage
     *
     * @ORM\ManyToOne(targetEntity="Typepage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TypePage_id_TypePage", referencedColumnName="id_TypePage")
     * })
     */
    private $typepageTypepage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PhotoFavoris", mappedBy="pagePage")
     */
    private $photoFavorisPhotoFavoris;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photoFavorisPhotoFavoris = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
