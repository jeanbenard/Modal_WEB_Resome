<?php

// chargement du fichier de traduction en fonction de la langue
if ($_SESSION['lang'] == 'francais') {
    require('francais.php');
} else if ($_SESSION['lang'] == 'anglais') {
    require('anglais.php');
}

// fonction qui permet d'afficher la traduction si elle existe,
// sinon un texte par défaut $txt
function l($txt) {
    global $TRANSLATIONS;
    $key = md5($txt);
    if (array_key_exists($key, $TRANSLATIONS)) {
        return $TRANSLATIONS[$key];
    } else {
        return "prout";
    }
}

?>