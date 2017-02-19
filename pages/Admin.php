<div class="brand"> Resome </div>
<div class="address-bar"> La page de l'admin</div>

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
            <a class="navbar-brand">Resome-Admin</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a id="ecolesenattente">Ecoles en attente</a>
                </li>
                <li>
                    <a id="ecoles">Ecoles</a>
                </li>
                <li>
                    <a id="eleves">Eleves</a>
                </li>
                <li>
                    <a id="deconnexion" href="index.php?page=page_source&todo=disconnect&usertype=admin">Deconnexion</a>
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
                <div id="ecolesenattenteblock">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Ecoles en attente</strong></h2>
                    <hr>


                    <div id="demandeEcoles">    
                        <?php require('content/pageAdmin/demandeEcoles.php'); ?>
                    </div>
                </div>
                <!-- %%%%%%%%%%%%%%%%%%%%%%% Fin Les élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

                <!-- %%%%%%%%%%%%%%%%%%%%%%%%% Mes élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <div id="ecolesblock">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Ecoles</strong></h2>
                    <hr>

                    <div id="gestionEcoles">    
                        <?php require('content/pageAdmin/gestionEcoles.php'); ?>
                    </div>
                </div>
                <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%  Fin Mes élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <!-- %%%%%%%%%%%%%%%%%%%%%%%%% Mes élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
                <div id="elevesblock">
                    <hr>
                    <h2 class="intro-text text-center"><strong>Eleves</strong></h2>
                    <hr>

                    <div id="gestionEleves">    
                        <?php require('content/pageAdmin/gestionEleves.php'); ?>
                    </div>
                </div>
                <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%  Fin Mes élèves %%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->




            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ModalEleve" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1"> Confirmation de la suppression</h4>
            </div>
            <div class="modal-body">
                <p>La suppression du compte entrainera la suppression de toutes les données de cet utilisateur. Ceci est irréversible.</p>
                <br>
                <h5>Est-tu sûr de supprimer ce compte?</h5>
                <br>
                <div class="row text-center">
                    <div class="col-xs-6">
                        <a id="confirmSuppression1" class="btn btn-block btn-danger" href='index.php?page=admin#2'> Confirmer la suppression</a>                                      
                    </div>
                    <div class="col-xs-6">
                        <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" aria-hidden="true">Annuler</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>

<div class="modal fade" id="ModalEcole" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel2"> Confirmation de la suppression</h4>
            </div>
            <div class="modal-body">
                <p>La suppression du compte entrainera la suppression de toutes les données de cet école. Tous les utilisateurs affiliés à cette école ne pourront plus l'être. Ceci est irréversible.</p>
                <br>
                <h5>Est-tu sûr de supprimer ce compte?</h5>
                <br>
                <div class="row text-center">
                    <div class="col-xs-6">
                        <a id="confirmSuppression2" class="btn btn-block btn-danger" href='index.php?page=admin#1'> Confirmer la suppression</a>                                      
                    </div>
                    <div class="col-xs-6">
                        <button type="button" class="btn btn-block btn-primary" data-dismiss="modal" aria-hidden="true">Annuler</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>