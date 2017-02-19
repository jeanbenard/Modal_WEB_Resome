<?php
session_name("Masession"); // ne pas mettre d'espace dans le nom de session !
session_start();

require('../utilities/Utilisateur.php');
require('../utilities/DataBase.php');

$id=$_SESSION['user'];
$studentid=$_POST['studentid'];

Utilisateur::supprimerUtilisateur($studentid);

?>