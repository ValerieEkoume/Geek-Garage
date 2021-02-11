<?php

// Vérification de tous les champs s'assurer qu'ils soient bien remplis

if (empty($_POST['email']) ||
    empty($_POST['name']) ||
    //empty($_POST['phone'])   ||
    empty($_POST['message']) ||
    !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) //Si tous les champs ne sont pas remplis retourne faux
{
    return false;
}


$name=strip_tags(htmlspecialchars($_POST['name']));
$email_address=strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message=strip_tags(htmlspecialchars($_POST['message']));

// Pour créer l'email et pour voir l'envoyer
$to='valerie.ekoume@gmail.com'; // Ajout de l'adresse mail qui va recevoir les messages
$email_subject="Website Contact Form:  $name";
$email_body="Vous avez reçu un nouveau message depuis le formulaire de contact de votre site Web.\n\n" .
    "Voici les détails:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers="From: valerie.ekoume@gmail.com\n"; // This is the email address the generated message will be from.
// We recommend using something like noreply@yourdomain.com.
$headers.="Reply-To: $email_address";
$send=mail($to, $email_subject, $email_body, $headers);

//Conditions pour checker que le mail a bien été envoyé
if ($send === true) {
    header('Location: form.php?success=true');
} else {
    header('Location: form.php?success=false');
}




