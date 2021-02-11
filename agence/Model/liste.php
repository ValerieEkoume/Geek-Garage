<?php

use App\Connection;
$pdo = (new Connection())->getPdo();
$id = '';
$nom_centre = '';
$adresse = '';
$latitude = '';
$longitude = '';
$created = '';
$ouverture = '';
$fermeture = '';

$sql = 'SELECT * FROM centres';

//Préparation de la requête
$query = $pdo->prepare($sql);

// On exécute la requête
$query->execute();

while (($row = $query->fetch(PDO::FETCH_ASSOC) )) {
    extract($row);

    $cent = [
        "id" => $id,
        "nom_centre" => $nom_centre,
        "adresse" => $adresse,
        "latitude" => $latitude,
        "longitude" => $longitude,
        "ouverture" => $ouverture,
        "fermeture" => $fermeture,
        "created" => $created,

    ];

    $tableauCentres['centres'][] = $cent;
}

//On encode en json et on envoie

echo json_encode($tableauCentres);
