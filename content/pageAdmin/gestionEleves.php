<table id="gestionEleve" class="table table-striped table-bordered nowrap">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Mail</th>
            <th>Action</th>
    </thead>
    <tbody>
        <?php
        $dbh = Database::connect();
        $query = "SELECT * FROM `refugees`";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_CLASS, "Utilisateur");
        $dbh = null;

        foreach ($result as $user) {

            echo<<< CHAINE_DE_FIN
        <tr>
            <td class='lien' >$user->name</td>
            <td class='lien' >$user->email</td>

          <td> <button class='btn btn-danger btn-block supprimer SupprimerEleve' name="$user->id" data-toggle="modal" data-target="#ModalEleve"> Supprimer</button> </td>
           
       
        </tr>
CHAINE_DE_FIN;
        }
        ?>
    </tbody>
</table>