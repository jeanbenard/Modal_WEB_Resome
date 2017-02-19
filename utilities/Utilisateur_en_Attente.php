<?php

class Utilisateur_en_Attente {

    public $id;
    public $email;
    public $password;
    public $inscriptiondate;
    public $clef;

    public function __toString() {
        return "[" . $this->email . "] ";
    }

    public static function getUtilisateur_en_Attente($email) {
        $dbh = Database::connect();
        $query = "SELECT * FROM utilisateur_en_attente WHERE utilisateur_en_attente.email=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur_en_Attente');
        $sth->execute(array($email));
        $userAttente = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $userAttente;
    }

    public static function getUtilisateurClef($clef) {
        $dbh = Database::connect();
        $query = "SELECT * FROM utilisateur_en_attente WHERE utilisateur_en_attente.clef=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur_en_Attente');
        $sth->execute(array($clef));
        $user = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $user;
    }

    public function already_exist_Attente($email) {
        if (Utilisateur_en_Attente::getUtilisateur_en_Attente($email) != false) {
            return true;
        } else {
            return false;
        }
    }
    
      public function already_exist_Attente_clef($clef) {
        if (Utilisateur_en_Attente::getUtilisateurClef($clef) != false) {
            return true;
        } else {
            return false;
        }
    }

    public function insererUtilisateur_en_Attente($email, $password, $clef) {
        $inscriptiondate=date("Y-m-d");
        $dbh = Database::connect();
        $query = "INSERT INTO `utilisateur_en_attente` (`email`, `password`,`inscriptiondate`,`clef`) VALUES (?,SHA1(?),?,?)";
        $sth = $dbh->prepare($query);
        $sth->execute(array($email, $password,$inscriptiondate, $clef));
        $dbh = null; // Déconnexion de MySQL
    }

    public function supprimerUtilisateur_en_Attente($clef) {
        $dbh = Database::connect();
        $query = "DELETE FROM `utilisateur_en_attente` WHERE `utilisateur_en_attente`.`clef` = ?";
        $sth = $dbh->prepare($query);
        $sth->execute(array($clef));
        $dbh = null; // Déconnexion de MySQL
    }

    public function addToRefugeeTable($clef) {
            $user = Utilisateur_en_Attente::getUtilisateurClef($clef);
            $dbh = Database::connect();
            $query = "INSERT INTO `refugees` (`email`, `password`,`inscriptiondate`) VALUES (?,?,?)";
            $sth = $dbh->prepare($query);
            $sth->execute(array($user->email, $user->password,$user->inscriptiondate));
            $dbh = null; // Déconnexion de MySQL
    }

}

?>