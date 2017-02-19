<?php

function generateHTMLHeader($page) {
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo <<<CHAINE_DE_FIN
    <meta charset="UTF-8">
    <meta name="François" content="Nom de l\'auteur"/>
    <meta name="keywords" content="Mots clefs relatifs à cette page"/>
    <meta name="description" content="Descriptif court"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery.js"></script>
    
CHAINE_DE_FIN;

    if ($page->name != 'informationSchool') {
        echo '<script src="js/bootstrap.js"></script>';
        echo '<link href="css/bootstrap.css" rel="stylesheet">';
    }

    echo $page->script;
    echo $page->css;
    echo '<title>' . $page->title . ' </title>';
    echo '</head>';
    echo '<body>';
}

function generateHTMLFooter() {
    echo<<< CHAINE_DE_FIN
    </body>
    </html>
CHAINE_DE_FIN;
}

function getAskedPageName($arrayGET) {  // Controle que "page" soit bien défini dans POST
    if (array_key_exists('page', $arrayGET)) {
        return $arrayGET['page'];
    } else {
        return 'page_source';
    }
}

function checkPageName($askedPageName, $page_list) { //Controle que le nom de la page soit bien dans la liste des pages autorisée
    $authorized = false;
    foreach ($page_list as $page) {
        if ($page->name == $askedPageName) {
            $authorized = true;
        }
    }
    return $authorized;
}

function getPage($askedPageName, $page_list) { //Récupere l'objet Page dans $page_list
    foreach ($page_list as $page) {
        if ($page->name == $askedPageName) {
            return $page;
        }
    }
}

function getValidPage($askedPageName, $page_list) { //Fait appel a checkPageName et getPage
    if (checkPageName($askedPageName, $page_list)) {
        return getPage($askedPageName, $page_list);
    } else {
        return getPage('page_source', $page_list);
    }
}

function getTodo($arrayGET) {
    if (array_key_exists('todo', $arrayGET)) {
        $todo = trim($arrayGET['todo']);
        $todo = strip_tags($todo);
        $todo = htmlspecialchars($todo);
        return $todo;
    } else {
        return NULL;
    }
}

function getUserType($arrayGET) {
    if (array_key_exists('usertype', $arrayGET)) {
        $usertype = trim($arrayGET['usertype']);
        $usertype = strip_tags($usertype);
        $usertype = htmlspecialchars($usertype);
        return $usertype;
    } else {
        return NULL;
    }
}

function getClef($arrayGET) {
    if (array_key_exists('clef', $arrayGET)) {
        $clef = trim($arrayGET['clef']);
        $clef = strip_tags($clef);
        $clef = htmlspecialchars($clef);
        return $clef;
    } else {
        return NULL;
    }
}

function getID($arrayGET) {
    if (array_key_exists('id', $arrayGET)) {
        $id = trim($arrayGET['id']);
        $id = strip_tags($id);
        $id = htmlspecialchars($id);
        return $id;
    } else {
        return NULL;
    }
}

function selPassword($password){
    return $password.'a&4jsb9lmk00J7B3';
}

function getLang($arrayGET) {
    if (array_key_exists('lang', $arrayGET)) {
        return $arrayGET['lang'];
    } else {
        return NULL;
    }
}

?>
