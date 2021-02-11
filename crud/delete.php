<?php
use  App\Connection;
require '../views/header.html';
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