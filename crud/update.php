<?php

use App\Connection;
require '../views/header.html';
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
        $ouverture = isset($_POST['ouverture']) ? $_POST['ouverture'] : '';
        $fermeture = isset($_POST['fermeture']) ? $_POST['fermeture'] : '';
        $created=isset($_POST['created']) ? $_POST['created'] : date('d-m-Y H:i:s');

        //MAJ du centre
        $sth=$pdo->prepare('UPDATE centres SET id = ?, mon_centre = ?, tel = ?, latitude = ?, longitude = ?, ouverture = ?, fermeture = ?, created = ?, WHERE id = ?');
        $sth->execute([$id, $mon_centre, $adresse, $tel, $latitude, $longitude, $ouverture, $fermeture, $created, $_GET['id']]);
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



<body>

<div class="content update">
    <h2>Update Centre #<?= $centres['id']?></h2>
    <form action="/update?id=<?=$centres['id']?>" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" placeholder="1" value="<?= $centres['id']?>" id="id">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="John Doe" value="<?= $centres['nom_centre'] ?>" id="mon_centre">

        <label for="email">Email</label>
        <input type="text" name="adresse" placeholder="johndoe@example.com" value="<?=  $centres['adresse']?>" id="adresse">
        <label for="phone">Phone</label>
        <input type="text" name="tel" placeholder="2025550143" value="<?= $centres['tel']?>" id="tel">

        <label for="title">Latitude</label>
        <input type="text" name="latitude" placeholder="Employee" value="<?= $centres['latitude']?>" id="title">
        <label for="created">Longitude</label>
        <input type="text" name="Longitude" placeholder="Employee" value="<?= $centres['longitude']?>" id="title">

        <label for="title">Ouverture</label>
        <input type="text" name="ouverture" placeholder="Employee" value="<?= $centres['ouverture']?>" id="title">
        <label for="created">Fermeture</label>
        <input type="text" name="fermeture" placeholder="Employee" value="<?= $centres['fermeture']?>" id="title">


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