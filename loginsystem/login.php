<?php

$defaultLogErr = array(
    'error' => false,
    'emailError' => false,
    'passError' => false,
    'errMSG' => NULL);

function logIn($arrayPOST, $defaultErr,$arraySESSION) {

    $errors = $defaultErr;

    if (isset($arrayPOST['btn-login'])) {

// prevent sql injections/ clear user invalid inputs
        $email = trim($arrayPOST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);

        $password = selPassword($arrayPOST['password']);


// prevent sql injections / clear user invalid inputs

        if (empty($email)) {
            $errors['error'] = true;
            $errors['emailError'] = "Veuillez entrer votre adresse mail.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['error'] = true;
            $errors['emailError'] = "Veuillez entrer une adresse mail valide.";
        }

        if (empty($password)) {
            $errors['error'] = true;
            $errors['passError'] = "Veuillez entrer votre mot de passe.";
        }

// if there's no error, continue to login
        if (!$errors['error']) {

            if ($arraySESSION['usertype'] == 'refugee') {
                if (Utilisateur::testerMdp($email, $password)) {
                    $_SESSION['user'] = Utilisateur::getUtilisateur($email)->id;
                    $_SESSION['loggedInrefugee'] = true;
                } else {
                    $errors['errMSG'] = " Adresse Mail ou mot de passe incorrect ...";
                }
            }
            if($arraySESSION['usertype']=='ecole'){
                if (UtilisateurEcole::testerMdp($email, $password)) {
                    $_SESSION['user'] = UtilisateurEcole::getUtilisateur($email)->id;
                    $_SESSION['loggedInecole'] = true;
                } else {
                    $errors['errMSG'] = " Adresse Mail ou mot de passe incorrect ...";
                }
            } 
            if($arraySESSION['usertype']=='admin'){
                if (UtilisateurAdmin::testerMdp($email, $password)) {
                    $_SESSION['user'] = UtilisateurAdmin::getUtilisateur($email)->id;
                    $_SESSION['loggedInadmin'] = true;
                } else {
                    $errors['errMSG'] = " Adresse Mail ou mot de passe incorrect ...";
                }
            }
        }
    }
    return $errors;
}
?>
