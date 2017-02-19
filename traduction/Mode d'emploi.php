
NE SURTOUT PAS MODIFIER LE TEXTE A L'INTERIEUR DES PAGES (Accueil / loginForm / registerForm / mdpOublié / Eleves ) Ok pour Admin et Ecole


Pour modifier une traduction:

        1. Modifier le fichier langue.php


Pour ajouter une nouvelle langue:


        1. Creer un nouveau fichier "manouvellelangue.php" dans le dossier traduction

        2. Copier integralement le contenu du fichier "anglais.php" dans votre fichier "manouvellelangue.php"

        3.Modifier les traductions dans le fichier "manouvellelangue.php"

        4.Dans le fichier "traduction.php" inserer un:

                        else if ($_SESSION['lang'] == 'manouvellelangue') {
                            require('manouvellelangue.php');
                        }

        5. Dans le fichier "page/Accueil.php", dansle bloc compris entre les lignes 12 et 20 ajouter a l'endroit approprié:

                        <li><a id="manouvellelang" class="btnlangue">Manouvellelangue</a></li>


        C'est bon, la nouvelle langue a été ajouté!