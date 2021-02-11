<?php
use App\Connection;
$pdo = (new Connection())->getPdo();
$result = "";


if (isset($_POST['submit'])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo 'Tous les champs sont requis';

    }
    // Si tous les champs sont complétés
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username=$_POST["username"];
        $password=$_POST["password"];

        $sth=$pdo->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
        $sth->bindParam(':username', $username);
        $sth->execute(['username'=>$username, 'password'=>$password]);
        $result=$sth->fetch();
//        session_start();
//        // Permet de vérifier que la session est bien ouverte et que nous avons bien un utilisateur
//        $_SESSION['connecte'] = 1;
//        //Récupération du $username pour notre session en lien avec DataLogin
//        $_SESSION['username'] = "$username";


        if ($result == false) {
            echo "Vos identifiants ne sont pas correctes, veuillez les saisir à nouveau";
        } else {
            header('Location: /admin');
        }
    }
}

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/assets/icon/styles/style.css">

</head>
<body>
<h2>CONNECTEZ-VOUS</h2>

<div class="form">

    <form action="#" method="POST">
        <div class="form-group col-md-6">
            <label for="username"></label>
            <input type="text" name="username" placeholder="Nom">
        </div>

        <div class="form-group col-md-6">
            <label for="password"></label>
            <input type="password" name="password" placeholder="Mot de passe">
        </div>

        <div>
            <button class="btn-info btn-margin" type="submit" value="Add" name="submit">Envoyer</button>
        </div>

    </form>

</div>

</body>
</html>

