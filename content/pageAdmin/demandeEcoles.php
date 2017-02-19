<table id="demandeEcole" class="table table-striped table-bordered nowrap">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Mail</th>
            <th>Action</th>
    </thead>
    <tbody>
        <?php
        $dbh = Database::connect();
        $query = "SELECT * FROM `school_en_attente`";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_CLASS, "Utilisateur_en_Attente");
        $dbh = null;

        foreach ($result as $user) {

            echo<<< CHAINE_DE_FIN
        <tr>
            <td class='lien' >$user->name</td>
            <td class='lien' >$user->email</td>

           <td> <a  class='btn btn-success btn-block valider' href='index.php?page=admin&todo=confirminscriptionEcole&clef=$user->clef'> Confirmer</a> 
               <a  class='btn btn-danger btn-block refuser' href='index.php?page=admin&todo=refuseinscriptionEcole&clef=$user->clef'> Refuser</a></td>
           
       
        </tr>
CHAINE_DE_FIN;
        }
        ?>
    </tbody>
</table>