<?php

require_once "bootstrap.php";
require_once "Games.php";

$newGame = new Games();
$newGame->setNom('Legs of legends');
$newGame->setGenre('MOOBA');
$newGame->setStatut('ruiné');
$newGame->setDateDebut('trop longtemps');
$newGame->setDateFin('trop longtemps');
$newGame->setChefProjet('Un gros con');

$entityManager->persist($newGame);
$entityManager->flush();
