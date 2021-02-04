<?php
use  App\Connection;

$pdo = (new Connection())->getPdo();
$msg = '';
$centres = '';

if (isset($_GET['id'])){
    //Selection du centre qui doit être effecé
    $sth = $pdo->prepare('SELECT * FROM centres WHERE id = ?');
    $sth->execute([$_GET['id']]);
    $centres = $sth->fetch(PDO::FETCH_ASSOC);
//    if(!$centres){
//        exit('Ce centre n\existe pas');
//    }

}

// S'assurer que l'admin confirme avant d'effacer le centre

if (isset($_GET['confirm'])){
    if ($_GET['confirm'] == 'yes') {
        //L'utilisateur doit confirmer son choix en appuyant sur oui
        $sth = $pdo->prepare('DELETE FROM centres WHERE id = ?');
        $sth->execute([$_GET['id']]);
        $msg = 'Le centre a bien été effacé';
    } else {
        //Utiliser le bouton non pour annuler l'opération et pr une redirection vers l'espace admin
        header('Location: /geek');
        exit;
    }

//    }else{
//    exit('Aucun ID n\'a été renseigné');

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

<div class="content delete">
    <h2>Effacer un Centre #<?=$centres['id']?></h2>
    <?php if ($msg): ?>
        <p><?=$msg?></p>
    <?php else: ?>
        <p>Are you sure you want to delete contact #<?=$centres['id']?>?</p>
        <div class="yesno">
            <a href="delete?id=<?=$centres['id']?>&confirm=yes">Yes</a>
            <a href="delete?id=<?=$centres['id']?>&confirm=no">No</a>
        </div>
    <?php endif; ?>
</div>

<a href="/geek"><button type="submit" class="retour">retour</button></a>

</body>

</html>