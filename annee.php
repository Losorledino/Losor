<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Année</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
</head>
<body>
<?php

$annee = $_GET['annee'] ;

$bdd = new PDO(
    'mysql:host=localhost;dbname=films',
    'root',
    ''
);

$requete = 'SELECT titre, nom, prenom, annee, genre, resume, ROUND(avg(note), 2) as note_moyenne
            FROM film
            JOIN artiste
            ON film.id_realisateur = id_artiste
            JOIN notation
            ON notation.id_film = film.id_film
            WHERE annee = :annee
            GROUP BY titre';

$films = $bdd -> prepare($requete);
$films -> execute([
    'annee' => $annee,
]);

$filtre = 'l\'annee';
$filtre2 = $annee;

include('vues/hautpage.php');

include('vues/opengrille.php');

foreach($films as $film){
   include('vues/film.php');
}

include('vues/closegrille.php');

?>
</body>
</html>