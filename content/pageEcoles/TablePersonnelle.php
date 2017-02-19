<table id="example2" class="table table-striped table-bordered nowrap">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Pays</th>
            <th>Diplômes</th>
            <th>Etudes</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
        $ecole=UtilisateurEcole::getUtilisateurID($_SESSION['user']);
        
        $dbh = Database::connect();
        $query = "SELECT * FROM `refugees` WHERE `school`=?";
        $sth = $dbh->prepare($query);
        $sth->execute(array($ecole->name));
        $result = $sth->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
        $dbh = null;

        foreach ($result as $user) {

            echo<<< CHAINE_DE_FIN
        <tr>
            <td class='lien'>$user->name</td>
            <td class='lien'>$user->firstname</td>
            <td class='lien'>$user->email</td>
            <td class='lien'>$user->country</td>
            <td class='lien'>$user->certificate</td>
            <td class='lien'>$user->studies</td>
            <td> <button type="button" class="btn btn-primary btn-block voir_plus" data-toggle="modal" data-target="#myModal" id='$user->id'> Action </button> </td>
        </tr>
CHAINE_DE_FIN;
        }
        ?>
    </tbody>
</table>

