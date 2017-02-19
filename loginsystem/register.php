<?php

function register($arrayPOST, $defaultRegErr) {

    $errors = $defaultRegErr;

    if (isset($arrayPOST['btn-register'])) {


        // prevent sql injections/ clear user invalid inputs
        if ($_SESSION['usertype'] == 'ecole') {
            $name = trim($arrayPOST['name']);
            $name = strip_tags($name);
            $name = htmlspecialchars($name);
        }

        $email = trim($arrayPOST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);

        $password1 = selPassword($arrayPOST['password1']);

        $password2 = selPassword($arrayPOST['password2']);




// ------------------------- Distinction entre refugee et école -------------------------
        if ($_SESSION['usertype'] == 'ecole') {
            if (empty($name)) {
                $errors['error'] = true;
                $errors['nameError'] = true;
            }
            if (UtilisateurEcole::already_exist($email)) {
                $errors['error'] = true;
                $errors['emailError2'] = true;
            }
            if (School_en_Attente::already_exist_Attente($email)) {
                $errors['error'] = true;
                $errors['emailError2'] = true;
            }
        }

        if ($_SESSION['usertype'] == 'refugee') {
            if (Utilisateur::already_exist($email)) {
                $errors['error'] = true;
                $errors['emailError2'] = true;
            }
            if (Utilisateur_en_Attente::already_exist_Attente($email)) {
                $errors['error'] = true;
                $errors['emailError2'] = true;
            }
        }
// --------------------------------------------------------------------------------------

        if (empty($email)) {
            $errors['error'] = true;
            $errors['emailError1'] = true;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['error'] = true;
            $errors['emailError1'] = true;
        }

        if (empty($password1)) {
            $errors['error'] = true;
            $errors['pass1Error'] = true;
        }
        if (empty($password2)) {
            $errors['error'] = true;
            $errors['pass2Error'] = true;
        }

        if ($password1 != $password2) {
            $errors['error'] = true;
            $errors['pass2Error'] = true;
        }
        // if there's no error, continue to login
        if (!$errors['error']) {
            if ($_SESSION['usertype'] == 'refugee') {
                $clef = mt_rand(100000, 10000000);
                Utilisateur_en_Attente::insererUtilisateur_en_Attente($email, $password1, $clef); //definit dans Utilisateur
                send_mail('register', Utilisateur_en_Attente::getUtilisateur_en_Attente($email), NULL);
                $errors['successMSG'] = true;
                return $errors;
            }
            if ($_SESSION['usertype'] == 'ecole') {
                $clef = mt_rand(100000, 10000000);
                School_en_Attente::insererSchool_en_Attente($email, $name, $password1, $clef);
                $errors['successMSG'] = true;
                send_mail('registerEcole', 'jean.benard@polytechnique.edu', NULL); //changer l'adresse mail pour mettre celle de l'admin
                return $errors;
            }
        } else {
            return $errors;
        }
    } else {
        return $errors;
    }
}

?>