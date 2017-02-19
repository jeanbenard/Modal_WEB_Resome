<?php

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !

session_start();


require ('../utilities/DataBase.php');
require ('../utilities/UtilisateurEcole.php');



if (isset($_POST['password']) && isset($_POST['email'])) {
    
    
    $password = $_POST['password'];
    $email=$_POST['email'];
    $id = $_SESSION['user'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $return['result'] = "erreurmail2";
        }
    else if(UtilisateurEcole::getUtilisateur($email)!=false){
            $return['result'] = "erreurmail3";
    }
    
    else if(UtilisateurEcole::testerMdpID($id, $password)){
        UtilisateurEcole::changeMailID($id, $email);
        $return['result'] = "Success";
    }
    else{
        $return['result'] = "erreurmail1";
    }
}
else{
    $return['result'] = "erreurmail2";
}

echo json_encode($return);
?>