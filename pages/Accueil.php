<header id="first">

    <?php
    if ($_SESSION['usertype'] == 'refugee') {
        
        $refconnecter = 'index.php?page=eleves';
        $bienvenue = l("Bienvenue sur l'espace élève");
        echo <<<FIN
        <div class="btn-group langue">
            <button type="button" class= "btn btn-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
FIN;
        echo  l("Choix de la langue");
        echo <<<FIN2
        <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a id="francais" class="btnlangue">Français</a></li> <!-- Les boutons sont traitées par le js 4_Accueil.js, qui fait appel via Ajax au script "Accueil_choixLangue. Celui-ci modifie le paramètre 'lang' de la variable session. -->
                <li><a id="anglais" class="btnlangue">English</a></li>
            </ul>
        </div>  
FIN2;
        
    }
    if ($_SESSION['usertype'] == 'ecole') {
        $refconnecter = 'index.php?page=ecoles';
        $bienvenue = l("Bienvenue sur l'espace école");
    }
    ?>



    <div class="header-content">
        <div class="inner">
            <h1 class="cursive"><?php echo $bienvenue ?></h1>
            <h4><?php l("A partir de cette page, vous pourrez créer ou completer votre compte Resome.") ?></h4>
            <hr>
            <div class='row'>
                <div class=col-lg-4>
                    <a href="index.php?page=page_source&lang=francais" class="btn btn-block btn-primary btn-md"><?php echo l("Retour") ?></a>
                </div>
                <div class=col-lg-4>
                    <?php echo '<a href="' . $refconnecter . '"  class="btn btn-block btn-primary btn-md">' . l("Me connecter") . '</a>' ?>
                </div>
                <div class=col-lg-4>
                    <?php echo '<a href="index.php?page=registerForm"  class="btn btn-block btn-primary btn-md">' . l("Créer un compte") . '</a>' ?>
                </div>
            </div> 
        </div>
    </div>
</header>