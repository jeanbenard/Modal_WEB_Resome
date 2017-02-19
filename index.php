<?php

//initialisation de la session ou récupération de la session encours

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !


session_start();

function setSESSION() {
    if (!isset($_SESSION['initiated'])) {
        session_regenerate_id();
        $_SESSION['initiated'] = true;
        $_SESSION['loggedInrefugee'] = false;
        $_SESSION['loggedInecole'] = false;
        $_SESSION['loggedInadmin'] = false;
        $_SESSION['lang'] = 'francais';
    }
}

setSESSION();

require ('utilities/Page.php');
require ('utilities/Utils.php');
require ('utilities/DataBase.php');
require ('utilities/Utilisateur.php');
require ('utilities/UtilisateurEcole.php');
require ('utilities/UtilisateurAdmin.php');
require ('utilities/Utilisateur_en_Attente.php');
require ('utilities/School_en_Attente.php');
require ('utilities/Mail.php');
require ('loginsystem/login.php');
require ('loginsystem/register.php');
require ('traduction/traduction.php');

// ----------------------  Actions liées au paramètre todo ---------------------------

$todo = getTodo($_GET); //dans Utils

if ($todo == 'disconnect') { //detruire la session en cours
    session_unset();
    session_destroy();
    session_start(); // il faut relancer une session sinon le parametre usertype est perdu
    setSESSION();
}

if ($todo == 'delete') {
    if ($_SESSION['loggedIn']) {
        Utilisateur::supprimerUtilisateur($_SESSION['user']);
        session_unset();
        session_destroy();
        session_start();
        setSESSION();
    }
}

if ($todo == 'confirminscription') {
    $clef = getClef($_GET); // Dans Utils
    if ($clef != NULL && Utilisateur_en_Attente::already_exist_Attente_clef($clef)) {
        Utilisateur_en_Attente::addToRefugeeTable($clef);
        Utilisateur_en_Attente::supprimerUtilisateur_en_Attente($clef);
    } else {
        echo "<script type='text/javascript'> window.location.hash='#modalerror' </script>";
    }
}

if ($todo == 'confirminscriptionEcole') {
    $clef = getClef($_GET); // Dans Utils
    if (School_en_Attente::already_exist_Attente_clef($clef)) {
        School_en_Attente::addToSchoolTable($clef);
        School_en_Attente::supprimerSchool_en_Attente($clef);
    } else {
        echo "<script type='text/javascript'> window.location.hash='#modalerror' </script>";
    }
}

if ($todo == 'refuseinscriptionEcole') {
    $clef = getClef($_GET); // Dans Utils
    if (School_en_Attente::already_exist_Attente_clef($clef)) {
        School_en_Attente::supprimerSchool_en_Attente($clef);
    } else {
        echo "<script type='text/javascript'> window.location.hash='#modalerror' </script>";
    }
}

// Gestion de la langue

if (getLang($_GET)!=NULL){
        $_SESSION['lang'] =getLang($_GET);
    }

//-------------------Obtention du usertype--------------------------------
$usertype = getUserType($_GET);

if ($usertype == 'refugee') {
    $_SESSION['usertype'] = 'refugee';
}
if ($usertype == 'ecole') {
    $_SESSION['usertype'] = 'ecole';
}
if ($usertype == 'admin') {
    $_SESSION['usertype'] = 'admin';
}
// ----------------------  Actions liées au paramètre todo ---------------------------

if ($todo == 'login') { // defaultErr est defini dans login.php
    $loginErrors = logIn($_POST, $defaultLogErr, $_SESSION); //On verifie que POST est bien définit dans la fonction logIn
} else {
    $loginErrors = $defaultLogErr;
}
// ------------------------Obtention de la page---------------------------

$askedPageName = getAskedPageName($_GET); //dans Utils - determiner la page demandée
$page = getValidPage($askedPageName, $page_list); //dans Utils - renvoie la page demandée si elle est valide, ie si la page demandée est dans la liste des pages autorisées
// ------------------- Controle de l'accès -------------------------------------

if ($page->restricted1 and ! $_SESSION['loggedInrefugee']) {
    $dir = $page;
    $page = getPage('loginForm', $page_list); //la page prendra en parametre $dir et $loginErrors
}

if ($page->restricted2 and ! $_SESSION['loggedInecole']) {
    $dir = $page;
    $page = getPage('loginForm', $page_list); //la page prendra en parametre $dir et $loginErrors
}

if ($page->restricted3 and ! $_SESSION['loggedInadmin']) {
    $dir = $page;
    $page = getPage('loginForm', $page_list);
}

// ---------------Fin du controle de l'accès -----------------------------------
// -------------------------  Affichage ----------------------------------------

generateHTMLHeader($page); //Ecriture du Footer dans utilsHTML

require($page->link);

generateHTMLFooter(); //Ecriture du Footer dans utilsHTML
//-------------------------Fin de l'affichage-----------------------------------
?>
