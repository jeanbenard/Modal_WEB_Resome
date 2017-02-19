<?php

require ('../utilities/Utilisateur.php');
require ('../utilities/DataBase.php');

$user = Utilisateur::getUtilisateurID($_POST['id']);
$pageinf = $_POST['pageinf'];

if ($user->firstname != NULL or $user->name != NULL) {
    $name = $user->firstname . " " . $user->name;
} else {
    $name = "Nom inconnu";
}

echo <<<FIN

    <div class="modal-header text-center">
        <h4 class="modal-title" id="myModalLabel">$name</h4>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-lg-6">
        
            <h2 class="intro-text text-center"> 
                <strong> Informations générales</strong>
            </h2>
        
            <br>
        
        <table class="table table-hover">

                    <tbody>
                        <tr>                          
                            <td><h5>Numéro de téléphone</h5></td>
                            <td>
FIN;
echo Utilisateur::afficherNumero($user->tel);

echo <<<FIN2
                            </td>
                        </tr>
                        <tr>                           
                            <td><h5>Adresse Mail</h5></td>
                            <td id="email">$user->email</td>
                        </tr>
                        <tr>                           
                            <td><h5>Adresse</h5></td>
                            <td>$user->address</td>
                        </tr>
                        <tr>
                            <td><h5>Date de naissance</h5></td>
                            <td>$user->birthdate</td>
                        </tr>
                        <tr>                           
                            <td><h5>Pays d'origine</h5></td>
                            <td>$user->country</td>
                        </tr>
                        <tr>                           
                            <td><h5>Statut administratif</h5></td>
                            <td>$user->statut</td>
                        </tr>
                    </tbody>
                </table>
        </div>
            <br>
        <div class="col-lg-6">
            <h2 class="intro-text text-center"> 
                <strong> Informations scolaires</strong>
            </h2>
        
        <br>
        
        <table class="table table-hover">

                    <tbody>
                        <tr>
                            <td><h5>Bac,études supérieures</h5></td>
                            <td>$user->studies</td>
                        </tr>
                        <tr>                          
                            <td><h5>Certificats de scolarités,diplômes ?</h5></td>
                            <td>$user->certificate</td>
                        </tr>
                        <tr>                          
                            <td><h5>CIEP informé?</h5></td>
                            <td>
FIN2;

echo Utilisateur::CIEPboolTochar($user->CIEP);

echo <<<FIN3
                            </td>
                        </tr>

                        <tr>                           
                            <td><h5>Etudes souhaitées?</h5></td>
                            <td>$user->futurestudies</td>
                        </tr>
                        <tr>
                            <td><h5>Langues parlées et lues</h5></td>
                            <td>$user->langages</td>
                        </tr>
                    </tbody>
        </table>
        
        </div>
        </div>
        <div class="row text-center">
FIN3;

if ($pageinf == 1) {
    echo <<<FIN4
            <div class="col-xs-6">
                <button id="recruit" name=$user->id class="btn btn-block btn-success" >Proposer un cours</input>
            </div>
            <div class="col-xs-6">
                <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" aria-hidden="true">Annuler</button>
            </div>
FIN4;
} else if ($pageinf == 2) {
    echo <<<FIN5
            
             <div class="col-xs-4">
                <button type="button" id="delete"  name=$user->id class="btn btn-block btn-danger">Supprimer</button>
            </div>
            <div class="col-xs-4">
                <button type="button" id="dismiss" name=$user->id class="btn btn-block btn-warning" >Retirer de mes élèves</input>
            </div>
            <div class="col-xs-4">
                <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" aria-hidden="true">Annuler</button>
            </div>
FIN5;
}

echo '</div>';
echo '</div>';

?>

