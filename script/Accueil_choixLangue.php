<?php

session_name("Masession"); // ne pas mettre d'espace dans le nom de session !
session_start();

require('../utilities/UtilisateurEcole.php');
require('../utilities/DataBase.php');

$id=$_POST['id'];

$_SESSION['lang']=$id;

?>
