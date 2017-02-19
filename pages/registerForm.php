<?php
if ($_SESSION['usertype'] == 'refugee') {
    $type = 'refugee';
}
if ($_SESSION['usertype'] == 'ecole') {
    $type = 'ecole';
}

$defaultRegErr = array(
    'error' => false,
    'nameError' => false,
    'emailError1' => false,
    'emailError2' => false,
    'pass1Error' => false,
    'pass2Error' => false,
    'errMSG' => NULL,
    'successMSG' => NULL);

$msg = false;

if (isset($_POST['btn-register'])) {//valeur=true si un formulaire vient d'etre envoyé
    $registerErrors = register($_POST, $defaultRegErr);
} else {
    $registerErrors = $defaultRegErr;
}
?>
<header id="first">
    <div class="header-content">
        <div class="inner">
            <div class="container">              
                <div id="register-form">

                    <form method='post' action='index.php?page=registerForm' autocomplete='on'>


                        <div class="form-group">
                            <h2 class="blanc"><?php echo l("Créer un compte") ?></h2>
                        </div>

                        <div class="form-group">
                            <hr />
                        </div>

                        <?php
                        if ($registerErrors['successMSG']) {

                            echo <<<FIN
                            <br>
                            <div class="form-group">
                                <div class="alert alert-success">
                                    <span class="glyphicon glyphicon-info-sign"></span>
FIN;
                            if ($type=='refugee'){ 
                            echo l("Un email vient de vous être envoyé...");
                            }
                            else if ($type=='ecole'){ 
                            echo l("Vous devez attendre le retour de l'admin...");
                            
                            }
                        echo '</div>';  
                        echo '</div>'; 
                        echo '<br>'; 
                              
                        }

                        if ($type == 'ecole') {
                            echo <<<CHAINE_DE_FIN
                                <div class = "form-group">
                                    <div class = "input-group">
                                        <span class = "input-group-addon"><span class = "glyphicon glyphicon-user"></span></span>
CHAINE_DE_FIN;
                                        echo '<input type = "name" name = "name" class = "form-control" placeholder = "'.l("Le nom de votre école").'" maxlength = "40" />';
                                    echo    '</div>';
                                echo '</div>';

                        }
                        
                        if ($registerErrors['nameError']) {

                            echo <<<FIN
                            <br>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-info-sign"></span>
FIN;
                            echo '<h5>'.l("Veuillez entrer un nom valide").'</h5>';
                            echo    '</div>';
                            echo '</div>';
                            

                        }
                        
                        
                        ?>              


                        <div class = "form-group">
                            <div class = "input-group">
                                <span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></span>
                                <input type = "email" name = "email" class = "form-control" placeholder = "<?php echo l("Votre adresse mail")?>" maxlength = "40" />
                            </div>
                            <?php
                            if ($registerErrors['emailError1']) {

                            echo <<<FIN
                            <br>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-info-sign"></span>
FIN;
                            echo l("Veuillez entrer une adresse mail valide.");
                            echo    '</div>';
                            echo '</div>';
                            

                            }
                            if ($registerErrors['emailError2']) {

                            echo <<<FIN
                            <br>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-info-sign"></span>
FIN;
                            echo l("Cette adresse email est déjà associée à un compte...");
                            echo    '</div>';
                            echo '</div>';
                            

                        } ?>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="password1" class="form-control" placeholder="<?php echo l("Votre mot de passe")?>" maxlength="15" />
                            </div>
                            <?php
                            if ($registerErrors['pass1Error']) {

                            echo <<<FIN
                            <br>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-info-sign"></span>
FIN;
                            echo l("Veuillez entrer un mot de passe");
                            echo    '</div>';
                            echo '</div>';
                            

                        } ?>
                            
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="password2" class="form-control" placeholder="<?php echo l("Le même mot de passe")?>" maxlength="15" />
                            </div>
                            <?php
                            if ($registerErrors['pass2Error']) {

                            echo <<<FIN
                            <br>
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <span class="glyphicon glyphicon-info-sign"></span>
FIN;
                            echo l("Merci d'entrer le même mot de passe");
                            echo    '</div>';
                            echo '</div>';
                            

                        } ?>
                        </div>

                        <div class="form-group">
                            <hr />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="btn-register"><?php echo l("Créer le compte") ?></button>
                        </div>

                    </form>
                    <a class="btn btn-primary btn-lg" href="index.php?page=accueil" role="button"> <?php echo l("Retour") ?> </a>
                </div>       
            </div>
        </div>
    </div>
</header>