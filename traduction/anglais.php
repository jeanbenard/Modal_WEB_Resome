<?php

// déclaration d'un tableau global
//global $TRANSLATIONS;
$TRANSLATIONS = array();

// on utilise le tableau en associatif avec
// comme clé le MD5 du texte par défaut

$TRANSLATIONS[md5(NULL)]=NULL;
$TRANSLATIONS[md5(false)]=false;

// ------------------------------ Page Accueil ---------------------------------

$TRANSLATIONS[md5("Choix de la langue")] = "Choose your langage";
$TRANSLATIONS[md5("Bienvenue sur l'espace élève")] = "Welcome on the student page";
$TRANSLATIONS[md5("Bienvenue sur l'espace école")] = "Welcome on the school page";
$TRANSLATIONS[md5("Retour")] = "Back";
$TRANSLATIONS[md5("Me connecter")] = "Login";
$TRANSLATIONS[md5("Créer un compte")] = "Create an account";

// ------------------------------ Page LoginForm -------------------------------

$TRANSLATIONS[md5("Connexion")] = "Login";
$TRANSLATIONS[md5("Envoyer")] = "Send"; 
$TRANSLATIONS[md5("Mot de passe oublié?")] = "You forgot your password?";
//"Retour" dejà defini au dessus

//%%%%%%%% placeholder %%%%%%%%%
$TRANSLATIONS[md5("Votre adresse mail")] = "Your email"; 
$TRANSLATIONS[md5("Votre mot de passe")] = "Your password";

//%%%%%%%%% messages d'erreurs %%%%%%%%%
$TRANSLATIONS[md5("Veuillez entrer votre adresse mail.")] = "Please enter your email."; // $loginErrors['emailError']
$TRANSLATIONS[md5("Veuillez entrer une adresse mail valide.")] = "Please enter a valid email."; // $loginErrors['emailError']
$TRANSLATIONS[md5("Veuillez entrer votre mot de passe.")] = "Please enter your password."; // $loginErrors['passError']
$TRANSLATIONS[md5(" Adresse Mail ou mot de passe incorrect ...")] = " Wrong email or password..."; // $loginErrors['errMSG']


// ------------------------------ Modal Confirmation inscription ---------------

$TRANSLATIONS[md5("Confirmation")] = "Confirmation";
$TRANSLATIONS[md5("Votre compte Resome a...")]="Your Resome account has just been created. Now, you have to complete the form";
$TRANSLATIONS[md5("Pour cela vous...")]= "To do that you have to login";
//"Me connecter" dejà defini en "Page Accueil

// ------------------------------ Modal Erreur ---------------------------------

$TRANSLATIONS[md5("Erreur")]="Error";
$TRANSLATIONS[md5("Votre compte a déjà été activé...")]="Your Resome account has already been activated, or the link do not corresponds to the initial link";
$TRANSLATIONS[md5("Retour à l'accueil")]="Back to main page";

// ------------------------------ Page d'inscription ---------------------------

$TRANSLATIONS[md5("Créer un compte")]="Create an account";
$TRANSLATIONS[md5("Un email vient de vous être envoyé...")]="An email has just been sent to you. To be fully registered you have now to click on the link in the email";
$TRANSLATIONS[md5("Vous devez attendre le retour de l'admin...")]="Vous devez attendre le retour de l'admin. Il vous enverra un mail! S'il est lent, relancez le au 06 00 00 00 00";
$TRANSLATIONS[md5("Créer le compte")]="Create the account";

// %%%%%%%%% placeholders %%%%%%%%%
$TRANSLATIONS[md5("Le nom de votre école")]="The name of your school";
//"Votre adresse mail" ----> cf LoginForm
//"Votre mot de passe" ----> cf LoginForm
$TRANSLATIONS[md5("Le même mot de passe")]="The same password";


// %%%%%%%%% Les messages d'erreurs possibles %%%%%%%%%
$TRANSLATIONS[md5("Veuillez entrer un nom valide")]="Please enter a valid name";
//"Veuillez entrer une adresse mail valide." --------> cf LoginForm
$TRANSLATIONS[md5("Cette adresse email est déjà associée à un compte...")]="This email is already associated to an account";
//"Veuillez entrer un mot de passe" -----------------> cf LoginForm
$TRANSLATIONS[md5("Merci d'entrer le même mot de passe")]="Please, enter the same password";

// ------------------------------ Page Mot de passe oublié ---------------------

$TRANSLATIONS[md5("Un email vient de vous être envoyé, avec un nouveau mot de passe...")]="An email has just been sent to you with your new password. If you have not received it, please ckeck your spam or try again";
$TRANSLATIONS[md5("Récuperez votre mot de passe")]="Password forgotten";
//"Envoyer" ----> cf LoginForm
//"Retour" ----> cf Page d'Accueil

// %%%%%%%%% placeholders %%%%%%%%%
// "Votre adresse mail" ----> cf LoginForm

// %%%%%%%%% Les messages d'erreurs possibles %%%%%%%%%
//"Veuillez entrer votre adresse mail." ----> cf LoginForm
//"Veuillez entrer une adresse mail valide." ----> cf LoginForm
$TRANSLATIONS[md5("Votre adresse ne correspond à aucun compte existant")]="Your email does not correspond to any Resome account";

// ------------------------------ Page Eleves ----------------------------------

$TRANSLATIONS[md5("La page des élèves")]="The Students' Page";
$TRANSLATIONS[md5("Bienvenue")]="Welcome";
$TRANSLATIONS[md5("Les informations que tu renseigneras...")]="The personnal details you will provide to us will help us to find you a course. The more these details are precise, the easier for us";


$TRANSLATIONS[md5("Mon Compte")]="My Account";
$TRANSLATIONS[md5("Adresse Mail")]="Email";
$TRANSLATIONS[md5("Votre adresse mail a été changé avec succès")]="Your email has been changed with success";
$TRANSLATIONS[md5("Modifier")]="Modify";
$TRANSLATIONS[md5("Modification de l'adresse mail")]="Modification of the email";
//"Votre mot de passe" ----> cf LoginForm
$TRANSLATIONS[md5("Mot de passe incorrect")]="Unvalid password";
$TRANSLATIONS[md5("Nouvelle adresse mail")]="New email";
//"Veuillez entrer une adresse mail valide."----> cf LoginForm
//"Cette adresse email est déjà associée à un compte..." ----> cf LoginRegister
$TRANSLATIONS[md5("Enregistrer")]="Register";
$TRANSLATIONS[md5("Annuler")]="Cancel";
$TRANSLATIONS[md5("Mot de passe")]="Password";
$TRANSLATIONS[md5("Votre mot de passe a été changé avec succès")]="Your password has been changed with success";
$TRANSLATIONS[md5("Changer le mot de passe")]="Change your password";
$TRANSLATIONS[md5("Modification du mot de passe")]="Password modification";
$TRANSLATIONS[md5("Ancien mot de passe")]="Old password";
$TRANSLATIONS[md5("Votre ancien mot de passe")]="Your old password";
//"Mot de passe incorrect" ---->ci-dessus
$TRANSLATIONS[md5("Nouveau mot de passe")]="New password";
$TRANSLATIONS[md5("Votre nouveau mot de passe")]="Your new password";
$TRANSLATIONS[md5("Même nouveau mot de passe")]="Same new password";
//"Merci d'entrer le même mot de passe" -----> cf RegisterForm


$TRANSLATIONS[md5("Informations générales")]="general Information";
$TRANSLATIONS[md5("Prénom")]="Firstname";
$TRANSLATIONS[md5("Nom")]="Name";
$TRANSLATIONS[md5("Numéro de téléphone")]="Phone number";
$TRANSLATIONS[md5("Adresse")]="Address";
$TRANSLATIONS[md5("Date de naissance")]="Birthdate";
$TRANSLATIONS[md5("Pays d'origine")]="Homeland";
$TRANSLATIONS[md5("Statut administratif")]="Statut administratif";
$TRANSLATIONS[md5("Modifier mes informations")]="Modify my information";

$TRANSLATIONS[md5("Modification des Informations")]="Information modification";
$TRANSLATIONS[md5("Erreur Formulaire")]="Form Error";


$TRANSLATIONS[md5("Informations scolaires")]="Informations scolaires";
$TRANSLATIONS[md5("Bac,études supérieures suivies dans le pays d'origine?")]="Bac,études supérieures suivies dans le pays d'origine?";
$TRANSLATIONS[md5("Avez-vous des certificats de scolarités, relevé de notes, diplômes ?")]="Avez-vous des certificats de scolarités, relevé de notes, diplômes ?";
$TRANSLATIONS[md5("Avez-vous-fait connaitre vos certificats au CIEP?")]="Avez-vous-fait connaitre vos certificats au CIEP?";
$TRANSLATIONS[md5("Quelles études voulez-vous faire l'an prochain? A quel niveau?")]="Quelles études voulez-vous faire l'an prochain? A quel niveau?";
$TRANSLATIONS[md5("Maitrise du français")]="Maitrise du français";


$TRANSLATIONS[md5("Me deconnecter")]="Disconnect";
$TRANSLATIONS[md5("Supprimer mon compte")]="Delete my account";


$TRANSLATIONS[md5("Confirmation de la suppression")]="Confirmation de la suppression";
$TRANSLATIONS[md5("La suppression du compte entrainera la suppression de toute tes données enregistrées sur le site et mettra fin à tes démarches engagées auprès de Resome")]="La suppression du compte entrainera la suppression de toute tes données enregistrées sur le site et mettra fin à tes démarches engagées auprès de Resome";
$TRANSLATIONS[md5("Est-tu sûr de supprimer ton compte?")]="Est-tu sûr de supprimer ton compte?";
$TRANSLATIONS[md5("Confirmer la suppression")]="Confirmer la suppression";


?>