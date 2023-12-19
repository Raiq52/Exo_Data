<?php

require "bootstrap.php";
require "src/Games.php";
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$id=1;
try {
        // $sql = "SELECT id FROM games";
        // $sth = $pdo->prepare($sql);
        // $sth->execute();
        // $allIds = $sth->fetchAll();
        // echo($allIds);

        $qb = $entityManager->createQueryBuilder();
        #$qb->select('count(id)');
        $qb->select($qb->expr()->count('games.id'))
        ->from('games','games');
        $count = $qb->getQuery()->getSingleScalarResult();
    //     $id++;
    //     for($i=1;$i<=$count;++$i){
    //     $game = $entityManager->find(Games::class, $i);
    //         echo sprintf(
    //             "Game %s :: Nom: %s, Genre: %s, Statut: %s, Date début: %s, Date de fin: %s, Chef de projet: %s \n",
    //             $i,$game->getNom(), $game->getGenre(), $game->getStatut(), $game->getDateDebut(), $game->getDateFin(), $game->getChefProjet()
    //         );
    // }
        
} catch (Exception $e) {
    echo($e);
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Liste des jeux</title>
    </head>
    <body>
        <h1>Liste des jeux</h1>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Genre</th>
                    <th>Statut</th>
                    <th>Date début</th>
                    <th>Date fin</th>
                    <th>Chef de projet</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 1; $i <= $count; ++$i) {
                    $game = $entityManager->find(Games::class, $i); ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $game->getNom(); ?></td>
                        <td><?php echo $game->getGenre(); ?></td>
                        <td><?php echo $game->getStatut(); ?></td>
                        <td><?php echo $game->getDateDebut(); ?></td>
                        <td><?php echo $game->getDateFin(); ?></td>
                        <td><?php echo $game->getChefProjet(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
    </html>
