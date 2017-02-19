<?php

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !
session_start();

require ('../utilities/Utils.php');
require ('../utilities/DataBase.php');
require ('../utilities/Utilisateur.php');
require ('../utilities/Utilisateur_en_Attente.php');

$return['result'] = 'Success';
$return['errortel'] = false;

if (isset($_POST['firstname']) && isset($_POST['name']) && isset($_POST['tel']) && isset($_POST['address']) && isset($_POST['birthdate']) && isset($_POST['country']) && isset($_POST['statut'])) {
    // empecher les injections SQL

    $chainechar = ['firstname', 'name', 'tel', 'address', 'birthdate', 'country', 'statut'];

    for ($i = 0; $i <= 6; $i++) {
        $var[$chainechar[$i]] = trim($_POST[$chainechar[$i]]);
        $var[$chainechar[$i]] = strip_tags($var[$chainechar[$i]]);
        $var[$chainechar[$i]] = htmlspecialchars($var[$chainechar[$i]]);
    }

    $var['id'] = $_SESSION['user'];

    // ----------------- test sur les différentes erreurs possibles ----------------------------


    if (filter_var($var['tel'], FILTER_CALLBACK, array('options' => 'Utilisateur::validerNumero')) == false) {
        $return['errortel'] = true;
        $return['result'] = 'Failed';
    }
    // ----------------- Fin test sur les différentes erreurs possibles ----------------------------
    //Mise a jour des données si absence d'erreurs
    if ($return['result'] == 'Success') {
        Utilisateur::updateUser1($var['firstname'], $var['name'], $var['tel'], $var['address'], $var['birthdate'], $var['country'], $var['statut'], $var['id']);
    }
} else {

    $return['result'] = 'Failed'; //échec de la mise a jour
}

echo json_encode($return);
?>