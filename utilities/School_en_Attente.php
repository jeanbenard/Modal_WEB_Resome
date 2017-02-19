<?php

class School_en_Attente {

    public $id;
    public $name;
    public $email;
    public $password;
    public $inscriptiondate;
    public $clef;

    public function __toString() {
        return "[" . $this->email . "] ";
    }

    public static function getSchool_en_Attente($email) {
        $dbh = Database::connect();
        $query = "SELECT * FROM school_en_attente WHERE school_en_attente.email=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'School_en_Attente');
        $sth->execute(array($email));
        $userAttente = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $userAttente;
    }

    public static function getUtilisateurClef($clef) {
        $dbh = Database::connect();
        $query = "SELECT * FROM school_en_attente WHERE school_en_attente.clef=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'School_en_Attente');
        $sth->execute(array($clef));
        $user = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $user;
    }

    public function already_exist_Attente($email) {
        if (School_en_Attente::getSchool_en_Attente($email) != false) {
            return true;
        } else {
            return false;
        }
    }
    
    public function already_exist_Attente_clef($clef) {
        if (School_en_Attente::getUtilisateurClef($clef) != false) {
            return true;
        } else {
            return false;
        }
    }

    public function insererSchool_en_Attente($email,$name,$password,$clef) {
        $inscriptiondate=date("Y-m-d");
        $dbh = Database::connect();
        $query = "INSERT INTO `school_en_attente` (`email`,`name`, `password`,`inscriptiondate`,`clef`) VALUES (?,?,SHA1(?),?,?)";
        $sth = $dbh->prepare($query);
        $sth->execute(array($email,$name,$password,$inscriptiondate,$clef));
        $dbh = null; // Déconnexion de MySQL
    }

    public function supprimerSchool_en_Attente($clef) {
        $dbh = Database::connect();
        $query = "DELETE FROM `school_en_attente` WHERE `school_en_attente`.`clef` = ?";
        $sth = $dbh->prepare($query);
        $sth->execute(array($clef));
        $dbh = null; // Déconnexion de MySQL
    }

    public function addToSchoolTable($clef) {
            $user = School_en_Attente::getUtilisateurClef($clef);
            $dbh = Database::connect();
            $query = "INSERT INTO `school` (`email`, `name`,`password`,`inscriptiondate`) VALUES (?,?,?,?)";
            $sth = $dbh->prepare($query);
            $sth->execute(array($user->email, $user->name,$user->password,$user->inscriptiondate));
            $dbh = null; // Déconnexion de MySQL
    }

}

?>