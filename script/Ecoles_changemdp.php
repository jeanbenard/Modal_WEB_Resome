<?php

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !

session_start();


require ('../utilities/DataBase.php');
require ('../utilities/UtilisateurEcole.php');
require ('../utilities/Utils.php');


if (isset($_POST['oldpassword']) && isset($_POST['password1']) && isset($_POST['password2'])) {

    $oldpassword = selPassword($_POST['oldpassword']);
    $password1 = selPassword($_POST['password1']);
    $password2 = selPassword($_POST['password2']);


    $id = $_SESSION['user'];

    if ($password1 == $password2) {
        if (UtilisateurEcole::setMdp($oldpassword, $id, $password1)) {
            $return['result'] = "Success";
        } else {
            $return['result'] = "erreurmdp1";
        }
    } else {
        $return['result'] = "erreurmdp2";
    }
} else {
    $return['result'] = "erreurmdp3";
}

echo json_encode($return);
?>