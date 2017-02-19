<?php

class UtilisateurAdmin {

//Informations de compte
    public $id;
    public $email;
    public $password;
    
    
    public static function getUtilisateur($email) {
        $dbh = Database::connect();
        $query = "SELECT * FROM admin WHERE admin.email=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'UtilisateurAdmin');
        $sth->execute(array($email));
        $user = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $user;
    }
    
     public static function testerMdp($email, $password) { //utilisé dans login.php
        $user = UtilisateurAdmin::getUtilisateur($email);
        if ($user != false) {
            return (sha1($password) == $user->password);
        } else {
            return false;
        }
    }
}

