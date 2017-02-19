<?php

require('../utilities/UtilisateurEcole.php');
require('../utilities/DataBase.php');

$schoolid=$_POST['schoolid'];

UtilisateurEcole::supprimerUtilisateur($schoolid);

?>