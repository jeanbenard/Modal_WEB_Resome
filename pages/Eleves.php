<?php
$user = Utilisateur::getUtilisateurID($_SESSION['user']);
?>


<div class="brand">Resome</div>
<div class="address-bar"> <?php echo l("La page des élèves")?></div>

<div class="container">


    <!-- Premier Block -->
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <!-- /.container -->
                <div id="carousel-example-generic" class="carousel slide"> 
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="pictures/slide-1.jpg" alt="1">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="pictures/slide-2.jpg" alt="2">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="pictures/slide-3.jpg" alt="3">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <strong> <?php echo l("Bienvenue")?> </strong>
                </h2>
                <h1 class="brand-name"><?php echo $user->firstname; ?></h1>
                <hr class="tagline-divider">
                <h3> <?php echo l("Les informations que tu renseigneras...")?>
                </h3>
            </div>
        </div>
    </div>    
    <!-- Fin du Premier Block -->

    <!-- Box Compte -->
    <div class="row">
        <div class="box">

            <hr>
            <h2 class="intro-text text-center"> 
                <strong> <?php echo l("Mon Compte")?></strong>
            </h2>
            <hr>

            <!-- Box mail -->

            <div id="mail" class="row box2">
                <div class="col-sm-4" style='padding-bottom: 3px'>
                    <h5> <?php echo l("Adresse Mail")?> </h5>
                </div>
                <div class="col-sm-4" style='padding-bottom: 10px'>
                    <?php echo $user->email; ?>
                    <span id='successmail' class="text-success"> <?php echo l("Votre adresse mail a été changé avec succès")?> </span>
                </div>
                <div class="col-sm-4" style='padding-bottom: 3px'>
                    <input type="button" class="btn btn-block btn-primary" id="changemail" value="<?php echo l("Modifier")?>" />
                </div>
            </div>

            <!-- Fin Box mail -->

            <!-- Formulaire de changement de mail de passe en Ajax -->

            <div class="row box3" id="formmail">

                <form  method="post">

                    <div class="form-group text-center">
                        <h5> <?php echo l("Modification de l'adresse mail")?> </h5>
                        <hr />
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input id="password" name="password" type="password" class="form-control" placeholder="<?php echo l("Votre mot de passe")?>" maxlength="15" />
                        </div>
                        <span id='erreurmail1' class="text-danger"> <?php echo l("Mot de passe incorrect")?> </span>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input  id="email" name="email" type="email" class="form-control" placeholder="<?php echo l("Nouvelle adresse mail")?>" maxlength="50" />
                        </div>
                        <span id='erreurmail2' class="text-danger"> <?php echo l("Veuillez entrer une adresse mail valide.")?> </span>
                        <span id='erreurmail3' class="text-danger"> <?php echo l("Cette adresse email est déjà associée à un compte...")?> </span>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-6">
                            <input id="submitmail" type="submit" class="btn btn-block btn-primary" value='<?php echo l("Enregistrer")?>'/>
                        </div>
                        <div class="form-group col-xs-6">
                            <input id="annulermail" type="button" class="btn btn-block btn-primary" value='<?php echo l("Annuler")?>'/>
                        </div>
                    </div> 

                </form>
            </div>

            <!-- Fin du Formulaire de changement de mail de passe Ajax -->

            <!-- Box mot de passe -->

            <div class="row box2" id="mdp">
                <div class="col-sm-4" style='padding-bottom: 3px'>
                    <h5><?php echo l("Mot de passe")?>  </h5> 
                </div>
                <div class="col-sm-4" style='padding-bottom: 3px'>
                    <h5> ********** </h5>
                    <span id='successmdp' class="text-success"> <?php echo l("Votre mot de passe a été changé avec succès")?> </span>
                </div>
                <div class="col-sm-4" style='padding-bottom: 3px'>
                    <input type="button" class="btn btn-block btn-primary" id="changemdp" value="<?php echo l("Changer le mot de passe")?>" />
                </div>
            </div>

            <!-- Fin mot de passe -->

            <!-- Formulaire de changement de mot de passe en Ajax -->

            <div class="row box3" id="formmdp">

                <form method="post">

                    <div class="form-group text-center">
                        <h5><?php echo l("Modification du mot de passe")?>  </h5>
                        <hr />
                    </div>

                    <div class="form-group">
                        <p> <?php echo l("Ancien mot de passe")?> </p>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input id="oldpassword" name="oldpassword" type="password" class="form-control" placeholder="<?php echo l("Votre ancien mot de passe")?>" maxlength="15" />
                        </div>
                        <span id='erreur1' class="text-danger"> <?php echo l("Mot de passe incorrect")?> </span>
                    </div>

                    <div class="form-group">
                        <p> <?php echo l("Nouveau mot de passe")?> </p>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input id="password1" name="password1" type="password" class="form-control" placeholder="<?php echo l("Votre nouveau mot de passe")?>" maxlength="15" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input  id="password2" name="password2" type="password" class="form-control" placeholder="<?php echo l("Même nouveau mot de passe")?>" maxlength="15" />
                        </div>
                        <span id='erreur2' class="text-danger"> <?php echo l("Merci d'entrer le même mot de passe")?> </span>
                    </div>

                    <div class="form-group">
                        <hr />
                    </div>

                    <div class="row">
                        <div class="form-group col-xs-6">
                            <input id="submitmdp" type="submit" class="btn btn-block btn-primary" value='<?php echo l("Enregistrer")?>'/>
                        </div>
                        <div class="form-group col-xs-6">
                            <input id="annulermdp" type="button" class="btn btn-block btn-primary" value='<?php echo l("Annuler")?>'/>
                        </div>
                    </div> 

                </form>
            </div>

            <!-- Fin du Formulaire de changement de mot de passe Ajax -->

        </div>
    </div>
    <!-- Fin Box Compte -->

    <!-- Box information générales -->
    <div class="row">
        <div class="box">

            <hr>
            <h2 class="intro-text text-center"> 
                <strong> <?php echo l("Informations générales")?></strong>
            </h2>
            <hr>

            <!-- Box Informations générales -->
            <div id="info" class="box4">

                <table class="table table-hover">

                    <tbody>
                        <tr>
                            <td><h5><?php echo l("Prénom")?></h5></td>
                            <td><?php echo $user->firstname ?></td>
                        </tr>
                        <tr>                          
                            <td><h5><?php echo l("Nom")?></h5></td>
                            <td><?php echo $user->name ?></td>
                        </tr>
                        <tr>                          
                            <td><h5><?php echo l("Numéro de téléphone")?></h5></td>
                            <td><?php echo Utilisateur::afficherNumero($user->tel) ?></td>
                        </tr>

                        <tr>                           
                            <td><h5><?php echo l("Adresse")?></h5></td>
                            <td><?php echo $user->address ?></td>
                        </tr>
                        <tr>
                            <td><h5><?php echo l("Date de naissance")?></h5></td>
                            <td><?php echo $user->birthdate ?></td>
                        </tr>
                        <tr>                           
                            <td><h5><?php echo l("Pays d'origine")?></h5></td>
                            <td><?php echo $user->country ?></td>
                        </tr>
                        <tr>                           
                            <td><h5><?php echo l("Statut administratif")?></h5></td>
                            <td><?php echo $user->statut ?></td>
                        </tr>
                    </tbody>
                </table>

                <br>

                <button id="changeinfo" type="button" class="btn btn-block btn-primary"><?php echo l("Modifier mes informations")?></button>


            </div>
            <!-- Fin du Box Informations générales -->

            <!-- Formulaire modification Informations générales -->
            <div class="row box4" id="forminfo">
                <h5 class=text-center><?php echo l("Modification des Informations")?>  </h5>
                <br>

                <form method="post">
                    <p id='erreurinfo1' class="text-danger"><?php echo l("Erreur Formulaire")?>  </p>
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td><h5><?php echo l("Prénom")?></h5></td>
                                <td><input  id="firstname" name="firstname" type="text" class="form-control" placeholder="<?php echo l("Prénom")?> "  value="<?php echo $user->firstname ?>" maxlength="15" /></td>
                            </tr>
                            <tr>                          
                                <td><h5><?php echo l("Nom")?></h5></td>
                                <td><input  id="name" name="name" type="text" class="form-control" placeholder="<?php echo l("Nom")?> " value="<?php echo $user->name ?>" maxlength="15" /></td>
                            </tr>
                            <tr>                           
                                <td><h5><?php echo l("Numéro de téléphone")?></h5></td>
                                <td><input  id="tel" name="tel" type="tel" class="form-control" placeholder="<?php echo l("Numéro de téléphone")?> " value="<?php echo "0" . $user->tel ?>" maxlength="15" />
                                    <p id='erreurinfo2' class="text-danger">Numéro incorrect </p></td>
                            </tr>
                            <tr>                           
                                <td><h5><?php echo l("Adresse")?></h5></td>
                                <td><input  id="address" name="address" type="text" class="form-control" placeholder="<?php echo l("Adresse")?> " value="<?php echo $user->address ?>" maxlength="15" /></td>
                            </tr>
                            <tr>                           
                                <td><h5><?php echo l("Date de naissance")?></h5></td>
                                <td><input  id="birthdate" name="birthdate" type="date" class="form-control" value="<?php echo $user->birthdate ?>" /></td>
                            </tr>
                            <tr>                           
                                <td><h5><?php echo l("Pays d'origine")?></h5></td>
                                <td><input  id="country" name="country" type="text" class="form-control" placeholder="<?php echo l("Pays d'origine")?> " value="<?php echo $user->country ?>" maxlength="15" /></td>
                            </tr>
                            <tr>                           
                                <td><h5><?php echo l("Statut administratif")?></h5></td>
                                <td><input  id="statut" name="statut" type="text" class="form-control" placeholder="<?php echo l("Statut administratif")?> " value="<?php echo $user->statut ?>" maxlength="15" /></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="form-group col-xs-6">
                        <input id="submitinfo" type="submit" class="btn btn-block btn-primary" value='<?php echo l("Enregistrer")?>'/>
                    </div>
                    <div class="form-group col-xs-6">
                        <input id="annulerinfo" type="button" class="btn btn-block btn-danger" value='<?php echo l("Annuler")?>'/>
                    </div>
                </form>
            </div>
            <!-- Fin du Formulaire modification Informations générales -->          
        </div>
    </div>
    <!-- Fin Box Informations générales -->   

    <!-- Box Informations Scolaire -->
    <div class="row">
        <div class="box">

            <hr>
            <h2 class="intro-text text-center"> 
                <strong> <?php echo l("Informations scolaires")?></strong>
            </h2>
            <hr>

            <!-- Box Informations générales -->
            <div id="infoscolaire" class="box4">

                <table class="table table-hover">

                    <tbody>
                        <tr>
                            <td><h5><?php echo l("Bac,études supérieures suivies dans le pays d'origine?")?></h5></td>
                            <td><?php echo $user->studies ?></td>
                        </tr>
                        <tr>                          
                            <td><h5><?php echo l("Avez-vous des certificats de scolarités, relevé de notes, diplômes ?")?></h5></td>
                            <td><?php echo $user->certificate ?></td>
                        </tr>
                        <tr>                          
                            <td><h5><?php echo l("Avez-vous-fait connaitre vos certificats au CIEP?")?></h5></td>
                            <td><?php echo Utilisateur::CIEPboolTochar($user->CIEP) ?></td>
                        </tr>

                        <tr>                           
                            <td><h5><?php echo l("Quelles études voulez-vous faire l'an prochain? A quel niveau?")?></h5></td>
                            <td><?php echo $user->futurestudies ?></td>
                        </tr>
                        <tr>
                            <td><h5><?php echo l("Maitrise du français")?></h5></td>
                            <td><?php echo $user->langages ?></td>
                        </tr>
                    </tbody>


                </table>

                <br>

                <button id="changeinfoscolaire" type="button" class="btn btn-block btn-primary"><?php echo l("Modifier mes informations")?></button>

            </div>

            <!-- Fin Box Informations Scolaire -->

            <!-- Formulaire Information Scolaire -->

            <div class="row box4" id="forminfoscolaire">

                <form method="post">
                    <h5 class=text-center> <?php echo l("Modification des Informations")?> </h5>
                    <br>
                    <table class="table table-hover infoscol">

                        <tbody>
                            <tr>
                                <td><h5><?php echo l("Bac,études supérieures suivies dans le pays d'origine?")?></h5></td>
                                <td><input  id="studies" name="studies" type="text" class="form-control" placeholder="Etudes" value="<?php echo $user->studies ?>" maxlength="150" /></td>
                            </tr>
                            <tr>                          
                                <td><h5><?php echo l("Avez-vous des certificats de scolarités, relevé de notes, diplômes ?")?></h5></td>
                                <td><input  id="certificate" name="certificate" type="text" class="form-control" placeholder="Certificats" value="<?php echo $user->certificate ?>" maxlength="150" /></td>
                            </tr>
                            <tr>                          
                                <td><h5><?php echo l("Avez-vous-fait connaitre vos certificats au CIEP?")?></h5></td>
                                <td><input  id="CIEPbox" name="CIEPbox" type="checkbox" value="$user->CIEP" <?php
                                    if ($user->CIEP == 0) {
                                        echo 'checked';
                                    }
                                    ?>/>
                                    <input id="CIEP" name='CIEP' type='hidden' value=1></td>
                            </tr>

                            <tr>                           
                                <td><h5><?php echo l("Quelles études voulez-vous faire l'an prochain? A quel niveau?")?></h5></td>
                                <td><input  id="futurestudies" name="futurestudies" type="text" class="form-control" placeholder="Etudes futures?" value="<?php echo $user->futurestudies ?>" maxlength="150" /></td>
                            </tr>
                            <tr>
                                <td><h5><?php echo l("Maitrise du français")?> </h5></td>
                                <td>
                                    <select  id="langages" name="langages" type="text" class="form-control" value="<?php echo $user->langages ?>" maxlength="150" >
                                        <option> Débutant (A1)</option>
                                        <option> Elementaire (A2)</option>
                                        <option> Intermédiaire (B1) </option>
                                        <option> Intermédiaire avancé (B2) </option>
                                        <option> Expérimenté (C1) </option>
                                        <option> Bilingue (C2) </option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="form-group col-xs-6">
                        <input id="submitinfoscolaire" type="submit" class="btn btn-block btn-primary" value='<?php echo l("Enregistrer")?>'/>
                    </div>
                    <div class="form-group col-xs-6">
                        <input id="annulerinfoscolaire" type="button" class="btn btn-block btn-danger" value='<?php echo l("Annuler")?>'/>
                    </div>

                </form>
            </div>
            <!-- Fin Formulaire Information Scolaire -->
        </div>
    </div>

    <div class="row">
        <div class="box text-center">
            <div class="col-sm-4 col-sm-offset-2" style='padding-bottom: 3px'>            
                <a class="btn btn-primary btn-block" href="index.php?page=accueil&todo=disconnect&usertype=refugee&lang=<?php echo $_SESSION['lang']?>"> <?php echo l("Me deconnecter")?> </a>               
            </div>
            <div class="col-sm-4 " style='padding-bottom: 3px'>
                <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal"><?php echo l("Supprimer mon compte")?></button>

                <!-- Modal (boite de dialogue) -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel"><?php echo l("Confirmation de la suppression")?></h4>
                            </div>
                            <div class="modal-body">
                                <p><?php echo l("La suppression du compte entrainera la suppression de toute tes données enregistrées sur le site et mettra fin à tes démarches engagées auprès de Resome")?> </p>
                                <br>
                                <h5><?php echo l("Est-tu sûr de supprimer ton compte?")?> </h5>
                                <br>
                                <div class="row text-center">
                                    <div class="col-xs-6">
                                        <a class="btn btn-block btn-danger" href="index.php?page=accueil&todo=delete&usertype=refugee=lang=<?php echo $_SESSION['lang']?>"> <?php echo l("Confirmer la suppression")?></a>                                      
                                    </div>
                                    <div class="col-xs-6">
                                        <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" aria-hidden="true"><?php echo l("Annuler")?></button>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>
                </div>
                <!-- Fin Modal -->
            </div>


            <br>
        </div>
    </div>
</div>
<!-- /.container -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; BDR </p>
            </div>
        </div>
    </div>
</footer>