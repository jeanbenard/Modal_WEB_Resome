<?php

require('../utilities/Utilisateur.php');
require('../utilities/DataBase.php');

$studentid=$_POST['studentid'];

Utilisateur::supprimerUtilisateur($studentid);

?>