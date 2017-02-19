<?php

class Utilisateur {

//Informations de compte
    public $id;
    public $email;
    public $password;
    public $inscriptiondate;
//Informations générales (1)
    public $firstname;
    public $name;
    public $tel;
    public $address; //Attention
    public $birthdate;
    public $country;
    public $statut;
//Informations scolaires (2)
    public $studies; //Quelles études avez vous fait?
    public $certificate; //Quels certificats avez vous?
    public $CIEP; //Les avez vous fait connaitre au CEIP
    public $futurestudies; //Quelles études voulez-vous faire
    public $langages; // Quelles langues parlez vous

    public function __toString() {
        return "[" . $this->id . "] " . $this->nom . " " . $this->prenom . " ";
    }

    public static function toArray($user) {
        return ['name' => $user->name, 'firstname' => $user->firstname, 'email' => $user->email, 'birthdate' => $user->birthdate, 'country' => $user->country, 'studies' => $user->studies, 'certificate' => $user->certificate, 'tel' => $user->tel];
    }

    public static function getUtilisateur($email) {
        $dbh = Database::connect();
        $query = "SELECT * FROM refugees WHERE refugees.email=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $sth->execute(array($email));
        $user = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $user;
    }

    public static function getUtilisateurID($id) {
        $dbh = Database::connect();
        $query = "SELECT * FROM refugees WHERE refugees.id=?";
        $sth = $dbh->prepare($query);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
        $sth->execute(array($id));
        $user = $sth->fetch();
        $sth->closeCursor();
        $dbh = null; // Déconnexion de MySQL
        return $user;
    }

    public static function testerMdp($email, $password) { //utilisé dans login.php
        $user = Utilisateur::getUtilisateur($email);
        if ($user != false) {
            return (sha1($password) == $user->password);
        } else {
            return false;
        }
    }

    public static function testerMdpID($id, $password) {
        $user = Utilisateur::getUtilisateurID($id);
        if ($user != false) {
            return (sha1($password) == $user->password);
        } else {
            return false;
        }
    }

    public static function updateUser1($firstname, $name, $tel, $address, $birthdate, $country, $statut, $id) {//Pour mettre à jour les informations générales / nombre de champs adapté au fichier Inf_changeinfo
        $dbh = Database::connect();
        $sth = $dbh->prepare('UPDATE `refugees` SET `firstname`=?,`name`=?,`tel`=?,`address`=?,`birthdate`=?,`country`=?,`statut`=? WHERE id=? ');
        $sth->execute(array($firstname, $name, $tel, $address, $birthdate, $country, $statut, $id));
        $dbh = null; // Déconnexion de MySQL
    }

    public static function updateUser2($studies, $certificate, $CIEP, $futurestudies, $langages, $id) {//Pour mettre à jour les informations scolaires / nombre de champs adapté au fichier Inf_changeinfoscolaires
        $dbh = Database::connect();
        $sth = $dbh->prepare('UPDATE `refugees` SET `studies`=?,`certificate`=?,`CIEP`=?,`futurestudies`=?,`langages`=? WHERE id=? ');
        $sth->execute(array($studies, $certificate, $CIEP, $futurestudies, $langages, $id));
        $dbh = null; // Déconnexion de MySQL
    }
    
    public static function setMdp($oldpassword, $id, $password) {//Pour changer le mdp lorsque l'utilisateur est connecté (pas encore utilisé)
        if (Utilisateur::testerMdpID($id, $oldpassword)) {
            Utilisateur::changeMdpID($id, $password);
            return true;
        } else {
            return false;
        }
    }

    public static function changeMdp($email, $password) { //Pour changer le Mdp, lorsque celui ci a été oublié: utilisé dans mdpoublie.php
        $dbh = Database::connect();
        $sth = $dbh->prepare('UPDATE refugees SET password=SHA1(?) WHERE email=?');
        $sth->execute(array($password, $email));
        $dbh = null; // Déconnexion de MySQL
    }

    public static function changeMdpID($id, $password) { //Pour changer le Mdp, lorsque celui ci a été oublié: utilisé dans mdpoublie.php
        $dbh = Database::connect();
        $sth = $dbh->prepare('UPDATE refugees SET password=SHA1(?) WHERE id=?');
        $sth->execute(array($password, $id));
        $dbh = null; // Déconnexion de MySQL
    }

    public static function changeMailID($id, $email) { //Pour changer le Mdp, lorsque celui ci a été oublié: utilisé dans mdpoublie.php
        $dbh = Database::connect();
        $sth = $dbh->prepare('UPDATE refugees SET email=? WHERE id=?');
        $sth->execute(array($email, $id));
        $dbh = null; // Déconnexion de MySQL
    }

    public static function already_exist($email) { //test si l'utilisateur est dans la base de donnée / sert au moment de l'enregistrement de maniere a ce qu'il n'y ait pas de doublon
        if (Utilisateur::getUtilisateur($email) != false) {
            return true;
        } else {
            return false;
        }
    }

     public static function already_exist_id($id) { //test si l'utilisateur est dans la base de donnée / sert au moment de l'enregistrement de maniere a ce qu'il n'y ait pas de doublon
        if (Utilisateur::getUtilisateurID($id) != false) {
            return true;
        } else {
            return false;
        }
    }
    
    public function supprimerUtilisateur($id) {
        $dbh = Database::connect();
        $query = "DELETE FROM `refugees` WHERE `refugees`.`id` = ?";
        $sth = $dbh->prepare($query);
        $sth->execute(array($id));
        $dbh = null; // Déconnexion de MySQL
    }

    function validerNumero($telATester) {
        //Retourne le numéro s'il est valide, sinon false.
        return preg_match('`^0[1-9]([-. ]?[0-9]{2}){4}$`', $telATester) ? $telATester : false;
    }

    function afficherNumero($tel) {
        $num = "0" . strval($tel);
        $new_tel=substr($num,0,2).' ';
        for ($i = 2; $i < strlen($num); $i += 2) {
            $new_tel=$new_tel.' ' . substr($num, $i,2);
        }
        return $new_tel;
    }
    
    function CIEPboolTochar($bool){
        if ($bool==0){return "oui";}
        else{return "non";}
    }
}

?>
