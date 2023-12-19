<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Kraken</title>
</head>
<body>
    <h1>Ajouter un jeu Kraken</h1>
    <form action="src/GameCreate.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" required><br><br>

        <label for="statut">Statut :</label>
        <input type="text" id="statut" name="statut" required><br><br>

        <label for="date_debut">Date de début :</label>
        <input type="date" id="date_debut" name="date_debut" required><br><br>

        <label for="date_fin">Date de fin :</label>
        <input type="date" id="date_fin" name="date_fin" required><br><br>

        <label for="chef_projet">Chef de projet :</label>
        <input type="text" id="chef_projet" name="chef_projet" required><br><br>

        <input type="submit" value="Créer">
    </form>
</body>
<?php
include("src/GameGet.php");
?>
</html>
