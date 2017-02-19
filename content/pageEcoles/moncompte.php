<!-- Box mail -->

<div id="mail" class="row box2">
    <div class="col-sm-4" style='padding-bottom: 3px'>
        <h5> Adresse Mail </h5>
    </div>
    <div class="col-sm-4" style='padding-bottom: 10px'>
        <?php echo UtilisateurEcole::getUtilisateurID($_SESSION['user'])->email; ?>
        <span id='successmail' class="text-success"> Votre adresse mail a été changé avec succès </span>
    </div>
    <div class="col-sm-4" style='padding-bottom: 3px'>
        <input type="button" class="btn btn-block btn-primary" id="changemail" value="Modifier" />
    </div>
</div>

<!-- Fin Box mail -->

<!-- Formulaire de changement de mail de passe en Ajax -->

<div class="row box3" id="formmail">

    <form method="post">

        <div class="form-group text-center">
            <h5> Modification de l'adresse mail </h5>
            <hr />
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input id="password" name="password" type="password" class="form-control" placeholder="Votre mot de passe" maxlength="15" />
            </div>
            <span id='erreurmail1' class="text-danger"> Mot de passe incorrect </span>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input  id="email" name="email" type="email" class="form-control" placeholder="Nouvelle adresse mail" maxlength="50" />
            </div>
            <span id='erreurmail2' class="text-danger"> Veuillez entrer une adresse correcte </span>
            <span id='erreurmail3' class="text-danger"> Un compte est déjà associé à cette adresse </span>
        </div>

        <div class="form-group">
            <hr />
        </div>

        <div class="row">
            <div class="form-group col-xs-6">
                <input id="submitmail" type="submit" class="btn btn-block btn-primary" value='Enregistrer'/>
            </div>
            <div class="form-group col-xs-6">
                <input id="annulermail" type="button" class="btn btn-block btn-primary" value='Annuler'/>
            </div>
        </div> 

    </form>
</div>

<!-- Fin du Formulaire de changement de mail de passe Ajax -->

<!-- Box mot de passe -->

<div class="row box2" id="mdp">
    <div class="col-sm-4" style='padding-bottom: 3px'>
        <h5> Mot de passe </h5> 
    </div>
    <div class="col-sm-4" style='padding-bottom: 3px'>
        <h5> ********** </h5>
        <span id='successmdp' class="text-success"> Votre mot de passe a été changé avec succès </span>
    </div>
    <div class="col-sm-4" style='padding-bottom: 3px'>
        <input type="button" class="btn btn-block btn-primary" id="changemdp" value="Changer le mot de passe" />
    </div>
</div>

<!-- Fin mot de passe -->

<!-- Formulaire de changement de mot de passe en Ajax -->

<div class="row box3" id="formmdp">

    <form method="post">

        <div class="form-group text-center">
            <h5> Modification du mot de passe </h5>
            <hr />
        </div>

        <div class="form-group">
            <p> Ancien mot de passe </p>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input id="oldpassword" name="oldpassword" type="password" class="form-control" placeholder="Votre ancien mot de passe" maxlength="15" />
            </div>
            <span id='erreur1' class="text-danger"> Mot de passe incorrect </span>
        </div>

        <div class="form-group">
            <p> Nouveau mot de passe </p>
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input id="password1" name="password1" type="password" class="form-control" placeholder="Votre nouveau mot de passe" maxlength="15" />
            </div>
        </div>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input  id="password2" name="password2" type="password" class="form-control" placeholder="Même nouveau mot de passe" maxlength="15" />
            </div>
            <span id='erreur2' class="text-danger"> Veuillez entrer deux mots de passe identiques </span>
        </div>

        <div class="form-group">
            <hr />
        </div>

        <div class="row">
            <div class="form-group col-xs-6">
                <input id="submitmdp" type="submit" class="btn btn-block btn-primary" value='Enregistrer'/>
            </div>
            <div class="form-group col-xs-6">
                <input id="annulermdp" type="button" class="btn btn-block btn-primary" value='Annuler'/>
            </div>
        </div> 

    </form>
</div>

<!-- Fin du Formulaire de changement de mot de passe Ajax -->