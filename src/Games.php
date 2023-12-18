<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'Games')]
class Games
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private String $nom;
    #[ORM\Column(type: 'string')]
    private String $genre;
    #[ORM\Column(type: 'string')]
    private String $satut;
    #[ORM\Column(type: 'string')]
    private String $date_debut;
    #[ORM\Column(type: 'string')]
    private String $date_fin;
    #[ORM\Column(type: 'string')]
    private String $chef_projet;
}