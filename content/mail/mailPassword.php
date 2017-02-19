<?php

//=====Définition du sujet.
$sujet = "Changement de mot de passe";

//=========
//=====Déclaration des messages au format texte et au format HTML.


function msgTxt($user, $password) {
    if ($_SESSION['usertype'] != 'ecole') {
        $name = $user->name;
    } else {
        $name = NULL;
    }
    return $message_txt = "Bonjour " . $name . ", Une demande de changement de mot de passe vient d'etre effectuée sur ton compte Resome. Ton mot de passe provisoire est: " . $password;
}

function msgHTML($user, $password) {
    if ($_SESSION['usertype'] != 'ecole') {
        $name = $user->name;
    } else {
        $name = NULL;
    }
    return $message_html = "<html><head></head><body><b>Bonjour</b>, Bonjour " . $name . ", Une demande de changement de mot de passe vient d'etre effectuée sur ton compte Resome. Ton mot de passe provisoire est: " . $password . "</body></html>";
}

//==========
?>