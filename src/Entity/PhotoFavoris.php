<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PhotoFavoris
 *
 * @ORM\Table(name="photo_favoris")
 * @ORM\Entity
 */
class PhotoFavoris
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Photo_favoris", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPhotoFavoris;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=45, nullable=true)
     */
    private $path;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Page", inversedBy="photoFavorisPhotoFavoris")
     * @ORM\JoinTable(name="photo_favoris_has_page",
     *   joinColumns={
     *     @ORM\JoinColumn(name="Photo_favoris_id_Photo_favoris", referencedColumnName="id_Photo_favoris")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="Page_id_Page", referencedColumnName="id_Page")
     *   }
     * )
     */
    private $pagePage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pagePage = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
