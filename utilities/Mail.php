<?php

function send_mail($type,$user,$option) { //user contient l'email du destinatairesous la forme d'un attribut de nom email, et d'autre parametre selon le type
    
    //====Appel du contenu du message et du sujet selon le type
    
    if ($type=='register'){
        require('content/mail/mailRegister.php');
    }
    
    if ($type=='registerEcole'){
        require('content/mail/mailRegisterEcole.php');
    }
    
    else if ($type=='password'){
        require('content/mail/mailPassword.php');
        if ($_SESSION['usertype'] != 'ecole') {
        $email = $user->email;
    } else {
        $email = $user;
    }
    }
    
   // ==========
    if ($type=='register'){
        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $user->email)) { // On filtre les serveurs qui rencontrent des bogues.
            $passage_ligne = "\r\n";
        } else {
            $passage_ligne = "\n";
        }
    }
    
    $passage_ligne = "\n";
    


//=====Création de la boundary
    $boundary = "-----=" . md5(rand());
//==========

//=====Création du header de l'e-mail.
    $header = "From: \"francois.bdr\"<francois.benoit-du-rey@polytechnique.edu>" . $passage_ligne;
    $header .= "Reply-to: \"francois.bdr\" <francois.benoit-du-rey@polytechnique.edu>" . $passage_ligne;
    $header .= "MIME-Version: 1.0" . $passage_ligne;
    $header .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
//==========
//=====Création du message.
    $message = $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format texte.
    $message .= "Content-Type: text/plain; charset=\"UTF-8\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . msgTxt($user,$option) . $passage_ligne;
//==========
    $message .= $passage_ligne . "--" . $boundary . $passage_ligne;
//=====Ajout du message au format HTML
    $message .= "Content-Type: text/html; charset=\"UTF-8\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . msgHTML($user,$option) . $passage_ligne;
//==========
    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary . "--" . $passage_ligne;
//==========
//=====Envoi de l'e-mail.
    if ($type=='register'){
        mail($user->email, $sujet, $message, $header);
    }
    if ($type=='registerEcole'){
        mail($user, $sujet, $message, $header);
    }
    
    if ($type=='password'){
        mail($email, $sujet, $message, $header);
    }
//==========
}

?>
