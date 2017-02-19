<header id="first">
    <div class="header-content">
        <div class="inner">
            <div class="container">
                <div id="login-form">
                    <form method="post" action="<?php echo "index.php?page=" . $dir->name . "&todo=login#1" ?>" autocomplete="on"> <!-- #1 permet d'arriver le bon onglet pour les pages admin et ecole -->

                        <div class="form-group">
                            <h2 class="blanc"><?php echo l("Connexion") ?></h2>
                        </div>

                        <div class="form-group">
                            <hr />
                        </div>
                        <?php
                        if (isset($loginErrors['errMSG'])) {

                            echo ' <div class="form-group">';
                            echo '<div class="alert alert-danger">';
                            echo '<span class="glyphicon glyphicon-info-sign"></span>';
                            echo l($loginErrors['errMSG']);
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>

                        <div class = "form-group">
                            <div class = "input-group">
                                <span class = "input-group-addon"><span class = "glyphicon glyphicon-envelope"></span></span>
                                <input type = "email" name = "email" class = "form-control" placeholder = "<?php l("Votre email") ?>" maxlength = "40" />
                            </div>
                            <span class = "text-danger">

                                <?php echo l($loginErrors['emailError']); ?>

                            </span>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" name="password" class="form-control" placeholder="Votre mot de passe" maxlength="15" />
                            </div>
                            <span class="text-danger">

                                <?php echo l($loginErrors['passError']); ?>

                            </span>
                        </div>

                        <div class="form-group">
                            <hr />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="btn-login"> <?php echo l("Envoyer") ?></button>
                            <br>
                            <?php
                            if ($_SESSION['usertype'] != 'admin') {
                                echo '<a href="index.php?page=mdpoublie">'.l("Mot de passe oublié?").'</a>';
                            }
                            ?>
                        </div>

                    </form>

                    <?php
                    if ($_SESSION['usertype'] == 'admin') {
                        echo '<a class="btn btn-primary btn-lg" href="index.php?page=page_source" role="button">'.l("Retour").'</a>';
                    } else {
                        echo '<a class="btn btn-primary btn-lg" href="index.php?page=accueil" role="button">'.l("Retour").'</a>';
                    }
                    ?>
                </div> 


            </div>
        </div>
    </div>
</header>

<!-- Modal de confirmation -->
<div id="regconfirmation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> <?php echo l("Confirmation") ?></h4>
            </div>
            <div class="modal-body text-center">
                <p> <?php echo l("Votre compte Resome a...") ?></p>
                <br>
                <h5> <?php l("Pour cela vous...") ?></h5>
                <br>
                <div class="row text-center">
                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php l("Me connecter") ?></button> 
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Fin Modal -->


<!-- Modal d'erreur -->
<div id="regconfirmationerror" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"> <?php l("Erreur") ?></h4>
            </div>
            <div class="modal-body text-center">

                <br>
                <p> <?php l("Votre compte a déjà été activé...") ?></p>
                <div class="row text-center">
                    <a href="index.php?page=accueil" class="btn btn-success"> <?php l("Retour à l'accueil") ?></a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Fin Modal -->