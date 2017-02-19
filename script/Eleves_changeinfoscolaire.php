<?php
session_name("Masession"); // ne pas mettre d'espace dans le nom de session !
session_start();

require ('../utilities/Utils.php');
require ('../utilities/DataBase.php');
require ('../utilities/Utilisateur.php');

$return['result'] = 'Success';
$chainechar = ['studies', 'certificate', 'CIEP', 'futurestudies', 'langages'];
$test=true;

for ($i = 0; $i <= 4; $i++){
    if (!isset($_POST[$chainechar[$i]])){
        $test=false;
    }
}


if ($test) {

    for ($i = 0; $i <= 4; $i++) {
        $var[$chainechar[$i]] = trim($_POST[$chainechar[$i]]);
        $var[$chainechar[$i]] = strip_tags($var[$chainechar[$i]]);
        $var[$chainechar[$i]] = htmlspecialchars($var[$chainechar[$i]]);
    }

    $var['id'] = $_SESSION['user'];

    // ----------------- test sur les différentes erreurs possibles ----------------------------

 
    // ----------------- Fin test sur les différentes erreurs possibles ----------------------------
    //Mise a jour des données si absence d'erreurs
    if ($return['result'] == 'Success') {
        Utilisateur::updateUser2($var['studies'], $var['certificate'], $var['CIEP'], $var['futurestudies'], $var['langages'],$var['id']);
    }
} else {

    $return['result'] = 'Failed'; //échec de la mise a jour
}

echo json_encode($return);
?>