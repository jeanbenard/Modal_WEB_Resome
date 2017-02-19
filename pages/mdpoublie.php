<?php
//------------------------------------
//Premier Block, on test le resultat si un formulaire a deja été envoyé
//------------------------------------

$error = false;
$msg = false;

if (isset($_POST['btn-send'])) {//valeur=true si un formulaire vient d'etre envoyé
// prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    if ($_SESSION['usertype'] == 'refugee') {

        if (empty($email)) {
            $error = true;
            $msg = l("Veuillez entrer votre adresse mail.");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $msg = l("Veuillez entrer une adresse mail valide.");
        } else if (Utilisateur::getUtilisateur($email) == false) {
            $error = true;
            $msg = l("Votre adresse ne correspond à aucun compte existant");
        } else {
            $msg = l("Un email vient de vous être envoyé, avec un nouveau mot de passe...");
        }
    }

    if ($_SESSION['usertype'] == 'ecole') {

        if (empty($email)) {
            $error = true;
            $msg = l("Veuillez entrer votre adresse mail.");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $msg = l("Veuillez entrer une adresse mail valide.");
        } else if (UtilisateurEcole::getUtilisateur($email) == false) {
            $error = true;
            $msg = l("Votre adresse ne correspond à aucun compte existant");
        } else {
            $msg = l("Un email vient de vous être envoyé, avec un nouveau mot de passe. Si vous ne l'avez pas reçu, verifiez que vous avez rentré le bon mail et recommencez");
        }
    }

    if (!$error and $msg != false) {
        $password = mt_rand(100000, 1000000).mt_rand(100000, 1000000);

        if ($_SESSION['usertype'] == 'refugee') {
            $user = Utilisateur::getUtilisateur($email);
            send_mail('password', $user, $password);
            Utilisateur::changeMdp($email, selPassword($password));
        }
        else if ($_SESSION['usertype'] == 'ecole') {
            $user = UtilisateurEcole::getUtilisateur($email);
            send_mail('password', $user->email, $password);
            UtilisateurEcole::changeMdp($email, selPassword($password));
        }
    }
}
?>

<!--Début du formulaire-->
<header id="first">
    <div class="header-content">
        <div class="inner">
            <div class="container">
                <div id="login-form">
                    <form method="post" action="index.php?page=mdpoublie" autocomplete="on">


                        <div class="col-md-12">

                            <div class="form-group">
                                <h2 class="blanc"><?php echo l("Récuperez votre mot de passe") ?></h2>
                            </div>

                            <div class="form-group">
                                <hr />
                            </div>


                            <!--Affichage des messages d'erreur ou de confirmation-->

<?php
if ($error) {

    echo ' <div class="form-group">';
    echo '<div class="alert alert-danger">';
    echo '<span class="glyphicon glyphicon-info-sign"></span>';
    echo $msg;
    echo '</div>';
    echo '</div>';
} else if ($msg != FALSE) {
    echo ' <div class="form-group">';
    echo '<div class="alert alert-success">';
    echo '<span class="glyphicon glyphicon-info-sign"></span>';
    echo $msg;
    echo '</div>';
    echo '</div>';
}
?>

                            <!--Fin du formulaire-->


                            <div class = "form-group">
                                <div class = "input-group">
                                    <span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></span>
                                    <input type = "email" name = "email" class = "form-control" placeholder = "<?php echo l("Votre adresse mail") ?>"  maxlength = "40" />
                                </div>
                                <span class = "text-danger">
                                </span>
                            </div>
                            <div class="form-group">
                                <hr />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary" name="btn-send"><?php echo l("Envoyer") ?></button>
                            </div>
                            
                            <?php
                            
                            if ($_SESSION['usertype']=='refugee'){  
                            echo '<a class="btn btn-primary btn-lg" href="index.php?page=eleves" role="button">'.l("Retour").' </a>';
                            }
                            else if ($_SESSION['usertype']=='ecole'){
                                echo '<a class="btn btn-primary btn-lg" href="index.php?page=ecoles" role="button">'.l("Retour").'</a>';
                            }
                            ?>
                            
                        </div>
                    </form>   
                </div>                
            </div>
        </div>
    </div>
</header>


