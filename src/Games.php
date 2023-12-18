<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'Games')]
class Games
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    #[ORM\Column(type: 'string')]
    private string $nom;

    #[ORM\Column(type: 'string')]
    private string $genre;

    #[ORM\Column(type: 'string')]
    private string $statut;

    #[ORM\Column(type: 'string')]
    private string $date_debut;

    #[ORM\Column(type: 'string')]
    private string $date_fin;

    #[ORM\Column(type: 'string')]
    private string $chef_projet;

    // Getters et Setters pour 'nom'
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    // Getters et Setters pour 'genre'
    public function getGenre(): string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    // Getters et Setters pour 'statut'
    public function getStatut(): string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): void
    {
        $this->statut = $statut;
    }

    // Getters et Setters pour 'date_debut'
    public function getDateDebut(): string
    {
        return $this->date_debut;
    }

    public function setDateDebut(string $date_debut): void
    {
        $this->date_debut = $date_debut;
    }

    // Getters et Setters pour 'date_fin'
    public function getDateFin(): string
    {
        return $this->date_fin;
    }

    public function setDateFin(string $date_fin): void
    {
        $this->date_fin = $date_fin;
    }

    // Getters et Setters pour 'chef_projet'
    public function getChefProjet(): string
    {
        return $this->chef_projet;
    }

    public function setChefProjet(string $chef_projet): void
    {
        $this->chef_projet = $chef_projet;
    }
}
