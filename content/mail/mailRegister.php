<?php

//=====Définition du sujet.
$sujet = "Validation de l'inscription";
//=========
//=====Déclaration des messages au format texte et au format HTML.

function msgTxt($userAttente,$option){
 $message_txt = "Bonjour, merci de vous être inscrit sur le site du Resome. Pour valider votre inscription, merci de cliquer sur le lien ci-dessous: http://localhost/Modal_WEB_Resome/index.php?page=informations&todo=confirminscription&clef=".$userAttente->clef.'#modal';
 return $message_txt;

}

function msgHTML($userAttente,$option){
return $message_html = "<html><head></head><body><b>Bonjour</b>, merci de vous être inscrit sur le site du Resome. Pour valider votre inscription, merci de cliquer sur le lien ci-dessous: <a href='http://localhost/Modal_WEB_Resome/index.php?page=informations&todo=confirminscription&clef=".$userAttente->clef."#modal'>http://localhost/Modal_WEB_Resome/index.php?page=informations&todo=confirminscription&clef=".$userAttente->clef."#modal</a></body></html>";

}
//==========
?>

