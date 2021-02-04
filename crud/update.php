<?php

use App\Connection;

$pdo = (new Connection())->getPdo();
$centres = '';
$msg = '';

// Vérifier si L'ID du centre existe, ex update.php?=1 va récupérer le contact avec l'ID 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        //Cette partie est similaire à la création sauf qu'on UPDATE à la place d'INSERT
        $id =isset($_POST['id']) ? $_POST['id'] : NULL;
        $mon_centre = isset($_POST['mon_centre']) ? $_POST['mon_centre'] : '';
        $adresse=isset($_POST['adresse']) ? $_POST['adresse'] : '';
        $tel=isset($_POST['tel']) ? $_POST['tel'] : '';
        $latitude=isset($_POST['latitude']) ? $_POST['latitude'] : '';
        $longitude=isset($_POST['longitude']) ? $_POST['longitude'] : '';
        $created=isset($_POST['created']) ? $_POST['created'] : date('d-m-Y H:i:s');

        //MAJ du centre
        $sth=$pdo->prepare('UPDATE centres SET id = ?, mon_centre = ?, tel = ?, latitude = ?, longitude = ?, created = ?, WHERE id = ?');
        $sth->execute([$id, $mon_centre, $adresse, $tel, $latitude, $longitude, $created, $_GET['id']]);
        $msg='Votre modification a bien été prise en compte';

    }

        //Récupérer le centre de la table centres
        $sth = $pdo->prepare('SELECT * FROM centres WHERE id = ?');
        $sth->execute([$_GET['id']]);
        $centres = $sth->fetch(PDO::FETCH_ASSOC);

//        if(!$centres) {
//            exit('ID inconnu');
//
//        } else {
//            exit('Le centre avec cette ID n\'existe pas');
//        }

    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initiale-scale=1">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="icon" href="../assets/icon/img/pexels-miguel-á-padriñán-3930094%20(1).jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=IBM+Plex+Sans:wght@700&family=Pacifico&family=Space+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/31cfd28a45.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">

    <link rel="stylesheet" href="../assets/icon/styles/style.css">

    <title>REPARE ONLINE GARAGE</title>
</head>

<body>

<div class="content update">
    <h2>Update Centre #<?= $centres['id']?></h2>
    <form action="/update?id=<?=$centres['id']?>" method="post">
        <label for="id">ID</label>
        <label for="name">Name</label>
        <input type="text" name="id" placeholder="1" value="<?= $centres['id']?>" id="id">
        <input type="text" name="name" placeholder="John Doe" value="<?= $centres['nom_centre'] ?>" id="mon_centre">
        <label for="email">Email</label>
        <label for="phone">Phone</label>
        <input type="text" name="adresse" placeholder="johndoe@example.com" value="<?=  $centres['adresse']?>" id="adresse">
        <input type="text" name="tel" placeholder="2025550143" value="<?= $centres['tel']?>" id="tel">
        <label for="title">Latitude</label>
        <label for="created">Longitude</label>
        <input type="text" name="latitude" placeholder="Employee" value="<?= $centres['latitude']?>" id="title">
        <input type="text" name="Longitude" placeholder="Employee" value="<?= $centres['latitude']?>" id="title">
        <label for="created">Mise à jour</label>
        <input type="datetime-local" name="created" value="<? echo date('Y-m-d\TH:i', strtotime($centres['created']))?>" id="created">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php endif; ?>
</div>


</body>

</html>