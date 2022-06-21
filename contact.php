<?php

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $text = $_POST['mytextarea'];

    $destinataire = 'tiffany.flore.codeur@gmail.com';
    $expediteur = $email;
    $sujet = "Formulaire de contact";
    $headers = 'MIME-Version: 1.0' . "\n";
    $headers .= 'Reply-To: ' . $expediteur . "\n";
    $headers .= 'Content-type: text/html; charset=ISO-8859-1' . "\n";
    $headers .= 'Delivered-to: ' . $destinataire . "\n";
    $headers .= 'Reply-To: ' . $expediteur . "\n";
    $headers .= 'From: ' . $expediteur . '>' . "\n";
    $headers .= 'Delivered-to: ' . $destinataire . "\n";
    $message = $text;


    if (mail($destinataire, $sujet, $message, $headers)) {
        echo 'Bonjour ' .$firstname. '. <br><br> Votre message à bien été envoyer, nous vous répondrons dans les plus brefs délais';
        
        
    } else {
        echo 'Votre message n\'as pas pu être réceptionner';
    }
}