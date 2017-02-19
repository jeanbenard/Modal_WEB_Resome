<?php

// déclaration d'un tableau global
//global $TRANSLATIONS;
$TRANSLATIONS = array();

// on utilise le tableau en associatif avec
// comme clé le MD5 du texte par défaut

$TRANSLATIONS[md5(NULL)]=NULL;
$TRANSLATIONS[md5(false)]=false;

// ------------------------------ Page Accueil ---------------------------------

$TRANSLATIONS[md5("Choix de la langue")] = "Choix de la langue";
$TRANSLATIONS[md5("Bienvenue sur l'espace élève")] = "Bienvenue sur l'espace élève";
$TRANSLATIONS[md5("Bienvenue sur l'espace école")] = "Bienvenue sur l'espace école";
$TRANSLATIONS[md5("Retour")] = "Retour";
$TRANSLATIONS[md5("Me connecter")] = "Me connecter";
$TRANSLATIONS[md5("Créer un compte")] = "Créer un compte";

// ------------------------------ Page LoginForm -------------------------------

$TRANSLATIONS[md5("Connexion")] = "Connexion";
$TRANSLATIONS[md5("Envoyer")] = "Envoyer"; 
$TRANSLATIONS[md5("Mot de passe oublié?")] = "Mot de passe oublié?";
//"Retour" dejà defini au dessus

//%%%%%%%% placeholder %%%%%%%%%
$TRANSLATIONS[md5("Votre adresse mail")] = "Votre adresse mail"; 
$TRANSLATIONS[md5("Votre mot de passe")] = "Votre mot de passe";

//%%%%%%%%% messages d'erreurs %%%%%%%%%
$TRANSLATIONS[md5("Veuillez entrer votre adresse mail.")] = "Veuillez entrer votre adresse mail."; // $loginErrors['emailError']
$TRANSLATIONS[md5("Veuillez entrer une adresse mail valide.")] = "Veuillez entrer une adresse mail valide."; // $loginErrors['emailError']
$TRANSLATIONS[md5("Veuillez entrer votre mot de passe.")] = "Veuillez entrer votre mot de passe."; // $loginErrors['passError']
$TRANSLATIONS[md5(" Adresse Mail ou mot de passe incorrect ...")] = " Adresse Mail ou mot de passe incorrect ..."; // $loginErrors['errMSG']


// ------------------------------ Modal Confirmation inscription ---------------

$TRANSLATIONS[md5("Confirmation")] = "Confirmation";
$TRANSLATIONS[md5("Votre compte Resome a...")]="Votre compte Resome a bien été créé. Il ne vous plus qu'a completer vos informations";
$TRANSLATIONS[md5("Pour cela vous...")]= "Pour cela vous devez vous connecter";
//"Me connecter" dejà defini en "Page Accueil

// ------------------------------ Modal Erreur ---------------------------------

$TRANSLATIONS[md5("Erreur")]="Erreur";
$TRANSLATIONS[md5("Votre compte a déjà été activé...")]="Votre compte a déjà été activé, ou votre lien ne correspond pas au lien initial";
$TRANSLATIONS[md5("Retour à l'accueil")]="Retour à l'accueil";

// ------------------------------ Page d'inscription ---------------------------

$TRANSLATIONS[md5("Créer un compte")]="Créer un compte";
$TRANSLATIONS[md5("Un email vient de vous être envoyé...")]="Un email vient de vous être envoyé. Il vous suffit maintenant de cliquer sur le lien contenu dans votre email pour finaliser votre inscription";
$TRANSLATIONS[md5("Vous devez attendre le retour de l'admin...")]="Vous devez attendre le retour de l'admin. Il vous enverra un mail! S'il est lent, relancez le au 06 00 00 00 00";
$TRANSLATIONS[md5("Créer le compte")]="Créer le compte";

// %%%%%%%%% placeholders %%%%%%%%%
$TRANSLATIONS[md5("Le nom de votre école")]="Le nom de votre école";
//"Votre adresse mail" ----> cf LoginForm
//"Votre mot de passe" ----> cf LoginForm
$TRANSLATIONS[md5("Le même mot de passe")]="Le même mot de passe";


// %%%%%%%%% Les messages d'erreurs possibles %%%%%%%%%
$TRANSLATIONS[md5("Veuillez entrer un nom valide")]="Veuillez entrer un nom valide";
//"Veuillez entrer une adresse mail valide." --------> cf LoginForm
$TRANSLATIONS[md5("Cette adresse email est déjà associée à un compte...")]="Cette adresse email est déjà associée à un compte, ou une demande a déjà été faite";
//"Veuillez entrer un mot de passe" -----------------> cf LoginForm
$TRANSLATIONS[md5("Merci d'entrer le même mot de passe")]="Merci d'entrer le même mot de passe";

// ------------------------------ Page Mot de passe oublié ---------------------

$TRANSLATIONS[md5("Un email vient de vous être envoyé, avec un nouveau mot de passe...")]="Un email vient de vous être envoyé, avec un nouveau mot de passe. Si vous ne l'avez pas reçu, verifiez que vous avez rentré le bon mail et recommencez";
$TRANSLATIONS[md5("Récuperez votre mot de passe")]="Récuperez votre mot de passe";
//"Envoyer" ----> cf LoginForm
//"Retour" ----> cf Page d'Accueil

// %%%%%%%%% placeholders %%%%%%%%%
// "Votre adresse mail" ----> cf LoginForm

// %%%%%%%%% Les messages d'erreurs possibles %%%%%%%%%
//"Veuillez entrer votre adresse mail." ----> cf LoginForm
//"Veuillez entrer une adresse mail valide." ----> cf LoginForm
$TRANSLATIONS[md5("Votre adresse ne correspond à aucun compte existant")]="Votre adresse ne correspond à aucun compte existant";

// ------------------------------ Page Eleves ----------------------------------

$TRANSLATIONS[md5("La page des élèves")]="La page des élèves";
$TRANSLATIONS[md5("Bienvenue")]="Bienvenue";
$TRANSLATIONS[md5("Les informations que tu renseigneras...")]="Les informations que tu renseigneras sur cette page nous permettrons de t'aider à trouver une formation. Plus ces informations  seront complètes, plus il sera plus facile pour nous t'aider";


$TRANSLATIONS[md5("Mon Compte")]="Mon Compte";
$TRANSLATIONS[md5("Adresse Mail")]="Adresse Mail";
$TRANSLATIONS[md5("Votre adresse mail a été changé avec succès")]="Votre adresse mail a été changé avec succès";
$TRANSLATIONS[md5("Modifier")]="Modifier";
$TRANSLATIONS[md5("Modification de l'adresse mail")]="Modification de l'adresse mail";
//"Votre mot de passe" ----> cf LoginForm
$TRANSLATIONS[md5("Mot de passe incorrect")]="Mot de passe incorrect";
$TRANSLATIONS[md5("Nouvelle adresse mail")]="Nouvelle adresse mail";
//"Veuillez entrer une adresse mail valide."----> cf LoginForm
//"Cette adresse email est déjà associée à un compte..." ----> cf LoginRegister
$TRANSLATIONS[md5("Enregistrer")]="Enregistrer";
$TRANSLATIONS[md5("Annuler")]="Annuler";
$TRANSLATIONS[md5("Mot de passe")]="Mot de passe";
$TRANSLATIONS[md5("Votre mot de passe a été changé avec succès")]="Votre mot de passe a été changé avec succès";
$TRANSLATIONS[md5("Changer le mot de passe")]="Changer le mot de passe";
$TRANSLATIONS[md5("Modification du mot de passe")]="Modification du mot de passe";
$TRANSLATIONS[md5("Ancien mot de passe")]="Ancien mot de passe";
$TRANSLATIONS[md5("Votre ancien mot de passe")]="Votre ancien mot de passe";
//"Mot de passe incorrect" ---->ci-dessus
$TRANSLATIONS[md5("Nouveau mot de passe")]="Nouveau mot de passe";
$TRANSLATIONS[md5("Votre nouveau mot de passe")]="Votre nouveau mot de passe";
$TRANSLATIONS[md5("Même nouveau mot de passe")]="Même nouveau mot de passe";
//"Merci d'entrer le même mot de passe" -----> cf RegisterForm


$TRANSLATIONS[md5("Informations générales")]="Informations générales";
$TRANSLATIONS[md5("Prénom")]="Prénom";
$TRANSLATIONS[md5("Nom")]="Nom";
$TRANSLATIONS[md5("Numéro de téléphone")]="Numéro de téléphone";
$TRANSLATIONS[md5("Adresse")]="Adresse";
$TRANSLATIONS[md5("Date de naissance")]="Date de naissance";
$TRANSLATIONS[md5("Pays d'origine")]="Pays d'origine";
$TRANSLATIONS[md5("Statut administratif")]="Statut administratif";
$TRANSLATIONS[md5("Modifier mes informations")]="Modifier mes informations";

$TRANSLATIONS[md5("Modification des Informations")]="Modification des Informations";
$TRANSLATIONS[md5("Erreur Formulaire")]="Erreur Formulaire";


$TRANSLATIONS[md5("Informations scolaires")]="Informations scolaires";
$TRANSLATIONS[md5("Bac,études supérieures suivies dans le pays d'origine?")]="Bac,études supérieures suivies dans le pays d'origine?";
$TRANSLATIONS[md5("Avez-vous des certificats de scolarités, relevé de notes, diplômes ?")]="Avez-vous des certificats de scolarités, relevé de notes, diplômes ?";
$TRANSLATIONS[md5("Avez-vous-fait connaitre vos certificats au CIEP?")]="Avez-vous-fait connaitre vos certificats au CIEP?";
$TRANSLATIONS[md5("Quelles études voulez-vous faire l'an prochain? A quel niveau?")]="Quelles études voulez-vous faire l'an prochain? A quel niveau?";
$TRANSLATIONS[md5("Maitrise du français")]="Maitrise du français";


$TRANSLATIONS[md5("Me deconnecter")]="Me deconnecter";
$TRANSLATIONS[md5("Supprimer mon compte")]="Supprimer mon compte";


$TRANSLATIONS[md5("Confirmation de la suppression")]="Confirmation de la suppression";
$TRANSLATIONS[md5("La suppression du compte entrainera la suppression de toute tes données enregistrées sur le site et mettra fin à tes démarches engagées auprès de Resome")]="La suppression du compte entrainera la suppression de toute tes données enregistrées sur le site et mettra fin à tes démarches engagées auprès de Resome";
$TRANSLATIONS[md5("Est-tu sûr de supprimer ton compte?")]="Est-tu sûr de supprimer ton compte?";
$TRANSLATIONS[md5("Confirmer la suppression")]="Confirmer la suppression";
$TRANSLATIONS[md5("Annuler")]="Annuler";

?>
