<?php

if (isset($_POST['submit'])) {
    if ((empty($_POST['nom'])) || (empty($_POST['email'])) || (empty($_POST['project'])) || (empty($_POST['message']))) {
        echo "<p class='infos'> veuillez remplir les champs vides </p>";
        
    }else{
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $project = $_POST['project'];
        $message = $_POST['message'];

        $destinataire = 'benitojunior2022@gmail.com';
        $sujet = 'Sujet de l\'email';

        $contenu = "<html><body><p>$nom</p><p>$email</p><p>$project</p><p>$message</p></body></html>";

        $headers = "From:'.$destinataire\n";
        $headers .= "Content-type:text/html; charset= 'UTF-8'";


        mail($destinataire, $sujet, $contenu, $headers);
        echo " <p class='succes'> Votre message a bien &eacute;te &eacute;nvoy&eacute; </p>";

    }

}
      

// if (isset($_POST['submit'])) {

//     $nom = $_POST['nom'];
//     $email = $_POST['email'];
//     $project = $_POST['project'];
//     $message = $_POST['message'];

//     $entete  = 'MIME-Version: 1.0' . "\r\n";
//     $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//     $entete .= 'From: benitojunior2022@gmail.com' . "\r\n";
//     $entete .= 'Reply-to: ' . $email;


//     $msg = '<h1> Message envoye depuis votre Portfolio </h1> <p><b>Nom: </b>'. $nom . 
//            '<br><b>E-mail: </b>' . $email . 
//            '<br><b>Project: </b>' . $project . 
//            '<br><b>message: </b>' . htmlspecialchars($message). '</p>';

//     $retour = mail('benitojunior2022@gmail.com', 'Message envoye depuis votre Portfolio', $msg , $entete);

//     if ($retour)
//         echo "<p class='succes'> Votre message a bien &eacute;te &eacute;nvoy&eacute; </p>";
// }
;?>