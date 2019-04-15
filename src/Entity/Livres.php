<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livres
 *
 * @ORM\Table(name="livres", uniqueConstraints={@ORM\UniqueConstraint(name="ref", columns={"ref"})}, indexes={@ORM\Index(name="ref_fournisseur", columns={"ref_fournisseur"}), @ORM\Index(name="bd_fournisseur", columns={"fournisseur_id"}), @ORM\Index(name="bd_genre", columns={"genre_id"}), @ORM\Index(name="bd_auteur", columns={"auteur_id"}), @ORM\Index(name="ref_editeur", columns={"ref_editeur"}), @ORM\Index(name="bd_hero", columns={"hero_id"}), @ORM\Index(name="bd_editeur", columns={"editeur_id"})})
 * @ORM\Entity
 */
class Livres
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=16, nullable=false)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_editeur", type="string", length=32, nullable=true)
     */
    private $refEditeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_fournisseur", type="string", length=32, nullable=true)
     */
    private $refFournisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=128, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resume", type="string", length=20000, nullable=true)
     */
    private $resume;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_public", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prixPublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix_editeur", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prixEditeur;

    /**
     * @var \Auteurs
     *
     * @ORM\ManyToOne(targetEntity="Auteurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="auteur_id", referencedColumnName="id")
     * })
     */
    private $auteur;

    /**
     * @var \Editeurs
     *
     * @ORM\ManyToOne(targetEntity="Editeurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="editeur_id", referencedColumnName="id")
     * })
     */
    private $editeur;

    /**
     * @var \Fournisseurs
     *
     * @ORM\ManyToOne(targetEntity="Fournisseurs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fournisseur_id", referencedColumnName="id")
     * })
     */
    private $fournisseur;

    /**
     * @var \Genres
     *
     * @ORM\ManyToOne(targetEntity="Genres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="genre_id", referencedColumnName="id")
     * })
     */
    private $genre;

    /**
     * @var \Heros
     *
     * @ORM\ManyToOne(targetEntity="Heros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hero_id", referencedColumnName="id")
     * })
     */
    private $hero;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getRefEditeur(): ?string
    {
        return $this->refEditeur;
    }

    public function setRefEditeur(?string $refEditeur): self
    {
        $this->refEditeur = $refEditeur;

        return $this;
    }

    public function getRefFournisseur(): ?string
    {
        return $this->refFournisseur;
    }

    public function setRefFournisseur(?string $refFournisseur): self
    {
        $this->refFournisseur = $refFournisseur;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getPrixPublic()
    {
        return $this->prixPublic;
    }

    public function setPrixPublic($prixPublic): self
    {
        $this->prixPublic = $prixPublic;

        return $this;
    }

    public function getPrixEditeur()
    {
        return $this->prixEditeur;
    }

    public function setPrixEditeur($prixEditeur): self
    {
        $this->prixEditeur = $prixEditeur;

        return $this;
    }

    public function getAuteur(): ?Auteurs
    {
        return $this->auteur;
    }

    public function setAuteur(?Auteurs $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getEditeur(): ?Editeurs
    {
        return $this->editeur;
    }

    public function setEditeur(?Editeurs $editeur): self
    {
        $this->editeur = $editeur;

        return $this;
    }

    public function getFournisseur(): ?Fournisseurs
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseurs $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getGenre(): ?Genres
    {
        return $this->genre;
    }

    public function setGenre(?Genres $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getHero(): ?Heros
    {
        return $this->hero;
    }

    public function setHero(?Heros $hero): self
    {
        $this->hero = $hero;

        return $this;
    }


}
