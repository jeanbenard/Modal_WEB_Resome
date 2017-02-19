<?php

class Page {

    public $name;
    public $title;
    public $link;
    public $restricted1; //acces restreint comptes refugiés
    public $restricted2; //acces restreint comptes école
    public $restricted3; //acces admin
    public $css;
    public $script;

    public function __construct($name, $title, $link, $restricted1,$restricted2,$restricted3,$css,$script) {
        $this->name = $name;
        $this->title = $title;
        $this->link = $link;
        $this->restricted1 = $restricted1;
        $this->restricted2 = $restricted2;
        $this->restricted3 = $restricted3;
        $this->css=$css;
        $this->script=$script;
    }
    
    public function _toString(){
        return $this->name;
    }

}

$page_list = [

    new Page("page_source", "Page source", "pages/page_source.php", false,false,false,"<link href='css/5_Page_Source.css' rel='stylesheet'>",NULL),
    new Page("accueil", "Accueil", "pages/Accueil.php", false,false,false,"<link href='css/1_Accueil.css' rel='stylesheet'>",'<script type="text/javascript" src="js/4_Accueil.js"></script>'),
    new Page("eleves", "Mes informations", "pages/Eleves.php", true,false,false,"<link href='css/4_Eleves.css' rel='stylesheet'>",'<script type="text/javascript" src="js/1_Eleves.js"></script><script src="js/bootstrap-checkbox.min.js" defer></script>'),
    new Page("ecoles", "Ecoles", "pages/Ecoles.php", false,true,false,'<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.css"/><link href="css/3_Ecoles&Admin.css" rel="stylesheet">','<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script><script type="text/javascript" src="js/2_Ecoles.js"></script><script type="text/javascript" src="js/jquery.sticky.js"></script>'),
    new Page("mdpoublie", "Mot de passe oublié", "pages/mdpoublie.php", false,false,false,"<link href='css/2_Login&RegisterForm.css' rel='stylesheet'>",NULL),
    new Page("loginForm", "Login", "pages/loginForm.php", false,false,false,"<link href='css/2_Login&RegisterForm.css' rel='stylesheet'>",'<script type="text/javascript" src="js/modal.js"></script>'),
    new Page("registerForm", "Register", "pages/registerForm.php", false,false,false,"<link href='css/2_Login&RegisterForm.css' rel='stylesheet'>",NULL),
    new Page("admin","admin","pages/Admin.php",false,false,true,'<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.css"/><link href="css/3_Ecoles&Admin.css" rel="stylesheet">','<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/dt-1.10.13/r-2.1.0/sc-1.4.2/se-1.2.0/datatables.min.js"></script><script type="text/javascript" src="js/3_Admin.js"></script><script type="text/javascript" src="js/jquery.sticky.js"></script>')
        ]
?>