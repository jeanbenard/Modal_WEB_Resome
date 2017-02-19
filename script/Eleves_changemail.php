<?php

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !

session_start();


require ('../utilities/DataBase.php');
require ('../utilities/Utilisateur.php');



if (isset($_POST['password']) && isset($_POST['email'])) {
    
    
    $password = $_POST['password'];
    $email=$_POST['email'];
    $id = $_SESSION['user'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $return['result'] = "erreurmail2";
        }
    else if(Utilisateur::getUtilisateur($email)!=false){
            $return['result'] = "erreurmail3";
    }
    
    else if(Utilisateur::testerMdpID($id, $password)){
        Utilisateur::changeMailID($id, $email);
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