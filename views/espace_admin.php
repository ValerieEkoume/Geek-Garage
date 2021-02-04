<?php

//Connection à la BDD
use App\Connection;
$pdo = (new Connection())->getPdo();

//Get the page via GET request (URL param: page), if non exist default the page to 1
// $page = the page the user is currently on
//$record_per_page will be used to limit the number of records dicplay on on each page
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$records_per_page = 5;
//Préparer la requête SQL and get records from our contacts table, LIMIT determine the page
$sth = $pdo->prepare('SELECT * FROM centres ORDER BY id LIMIT :current_page, :records_per_page');
$sth->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$sth->bindValue(':records_per_page', $records_per_page, PDO::PARAM_INT);
$sth->execute();

//fetch the records so we can display them in our template
$centres = $sth->fetchAll(PDO::FETCH_ASSOC);
////Get the total number of contacts, this is so we can determine whether there should be a next and previous buttom
$num_centres = $pdo->query('SELECT COUNT(*) FROM centres')->fetchColumn();
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

<body >

<div class="contente read">
    <h2>Les Centres</h2>
    <div class="create-centres">
    <a  class="creat" href="/ajouter" >Ajouter un centre</a>
    </div>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nom du centre</td>
                <td>Adresse</td>
                <td>Téléphone</td>
                <td>Latitude</td>
                <td>Longitude</td>
            </tr>
        </thead>
        <tbody>
            <?php  foreach ($centres as $centre) :?>
            <tr>
                <td><?=$centre['id']?></td>
                <td><?=$centre['nom_centre']?></td>
                <td><?=$centre['adresse']?></td>
                <td><?=$centre['tel']?></td>
                <td><?=$centre['latitude']?></td>
                <td><?=$centre['longitude']?></td>
                <td class="actions">
                    <a href="/update?id=<?=$centre['id']?>" class="edit"><i class="fas fa-user-edit"></i></a>
                    <a href="/delete?id=<?=$centre['id']?>" class="delete"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <div class="pagination">
        <?php if ($page>1): ?>
        <a href="espace_admin.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left"></i></a>
        <?php endif; ?>
        <?php if ($page*$records_per_page < $num_centres): ?>
        <a href="/geek?page=<?=$page+1?>"><i class="fas fa-angle-double-right"></i></a>
        <?php endif; ?>
    </div>
</div>

</body>

</html>



