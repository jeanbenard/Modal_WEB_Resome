<table id="example" class="table table-striped table-bordered nowrap">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date d'inscription</th>
            <th>Mail</th>
            <th>Pays</th>
            <th>Diplômes</th>
            <th>Etudes</th>
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
                <td class='lien' >$user->firstname</td>
                <td class='lien' >$user->inscriptiondate</td>
                <td class='lien' >$user->email</td>
                <td class='lien' >$user->country</td>
                <td class='lien' >$user->certificate</td>
                <td class='lien' >$user->studies</td>
CHAINE_DE_FIN;

            if ($user->school == NULL) {
                echo '<td> <button type="button" class="btn btn-primary btn-block voir_plus" data-toggle="modal" data-target="#myModal" id=' . $user->id . '> Action </button> </td>';
            } else {
                echo '<td class="lien" ></td>';
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>