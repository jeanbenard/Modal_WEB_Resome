<?php

//=====Définition du sujet.
$sujet = "Validation de l'inscription";
//=========
//=====Déclaration des messages au format texte et au format HTML.

function msgTxt($userAttente,$option){
 $message_txt = "Bonjour administrateur, il y a une école qui veut être validée";
 return $message_txt;

}

function msgHTML($userAttente,$option){
return $message_html = "<html><head></head><body><b>Bonjour</b>, il y a une école qui veut être validée. Assure toi que c'est bien l'adrese de l'école, il ne faudrait pas que n'importe qui puisse accéder à la liste des étudiants! : <a href='http://localhost/Modal_WEB_Resome/index.php?page=admin' /a> voir /body>/html>";

}
//==========
?>

