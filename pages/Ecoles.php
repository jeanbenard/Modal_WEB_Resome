<div class="brand">Resome</div>
<div class="address-bar">La page des écoles</div>

<!-- Navigation -->


<nav id="header" class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand">Resome-Ecole</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a id="moncompte">Mon Compte</a>
                </li>
                <li>
                    <a id="leseleves">Voir tous les élèves</a>
                </li>
                <li>
                    <a id="meseleves">Voir mes élèves</a>
                </li>
                                <li>
                    <a id="deconnexion" href="index.php?page=accueil&todo=disconnect&usertype=ecole">Deconnexion</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<br>
<br>


<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <!-- %%%%%%%%%%%%%%%%%%%%%%%%% Les élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <div id="leselevesblock">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Les élèves</strong></h2>
                    <hr>


                    <div id="TableGenerale">    
                        <?php require('content/pageEcoles/TableGenerale.php'); ?>
                    </div>
                </div>
                <!-- %%%%%%%%%%%%%%%%%%%%%%% Fin Les élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

                <!-- %%%%%%%%%%%%%%%%%%%%%%%%% Mes élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <div id="meselevesblock">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Mes élèves</strong></h2>
                    <hr>

                    <div id="TablePersonnelle">    
                        <?php require('content/pageEcoles/TablePersonnelle.php'); ?>
                    </div>
                </div>
                <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%  Fin Mes élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%% Mon compte %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <div id="moncompteblock">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Mon compte</strong></h2>
                    <hr>

                    <?php require('content/pageEcoles/moncompte.php'); ?>

                </div>


                <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%% Fin Mon compte %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->
            </div>
        </div>
    </div>
</div>

<!-- Modal (boite de dialogue) -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modalVoirPlus">

            
        </div><!-- /.modal-dialog -->
    </div>
</div>
<!-- Fin Modal -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright</p>
            </div>
        </div>
    </div>
</footer>
