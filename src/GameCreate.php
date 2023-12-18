<?php

// require_once "vendor/autoload.php"; // Inclure Doctrine (si nécessaire)
require_once "../bootstrap.php";

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

if (isset( $_POST )) {
    var_dump("bite");
    $nom = $_POST['nom'] ;
    $genre = $_POST['genre'] ;
    $statut = $_POST['statut'] ;
    $dateDebut = $_POST['date_debut'] ;
    $dateFin = $_POST['date_fin'] ;
    $chefProjet = $_POST['chef_projet'] ;
    
    require_once "Games.php";

    $newGame = new Games();
    $newGame->setNom($nom);
    $newGame->setGenre($genre);
    $newGame->setStatut($statut);
    $newGame->setDateDebut($dateDebut);
    $newGame->setDateFin($dateFin);
    $newGame->setChefProjet($chefProjet);

    $entityManager->persist($newGame);
    $entityManager->flush();

    ?>
    <script>
        setTimeout(5000);
    </script>
    <?php
    header("Location: ../index.html");
    exit();
}
?>