<?php
session_name("Masession"); // ne pas mettre d'espace dans le nom de session !
session_start();

require('../utilities/UtilisateurEcole.php');
require('../utilities/DataBase.php');

$id=$_SESSION['user'];
$ecole= UtilisateurEcole::getUtilisateurID($id);
$school=$ecole->name;
$studentid=$_POST['studentid'];

UtilisateurEcole::recrutement($school, $studentid);

?>