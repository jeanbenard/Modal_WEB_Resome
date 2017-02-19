$(window).load(function () {
    $("#header").sticky({topSpacing: 0}); //Permet a la barre des menus de coller au haut de la page lorsqu'on scroll
});

$(document).ready(function () {



//------------------ Activation DataTable ---------------------------
    $('#demandeEcole').DataTable();
    $('#gestionEcole').DataTable();
    $('#gestionEleve').DataTable();


//------------------ Etat initial ---------------------------
    $("#ecolesenattenteblock").show();
    $("#ecolesblock").hide();
    $("#elevesblock").hide();

//barre de navigation

    $("#ecolesenattente").click(function () {
        $("#ecolesenattenteblock").show();
        $("#ecolesblock").hide();
        $("#elevesblock").hide();
        history.pushState({}, null, 'index.php?page=admin#0');
        // Marqueur mon savoir quel onglet est actif. permet de garder cet onglet actif au rechargement
    });

    $("#ecoles").click(function () {
        $("#ecolesenattenteblock").hide();
        $("#ecolesblock").show();
        $("#elevesblock").hide();
        history.pushState({}, null, 'index.php?page=admin#1');
    });

    $("#eleves").click(function () {
        $("#ecolesenattenteblock").hide();
        $("#ecolesblock").hide();
        $("#elevesblock").show();
        history.pushState({}, null, 'http://localhost/Modal_WEB_Resome/index.php?page=admin#2');
    });

// ------------------- Pour rester sur le meme onglet actif lors du rechargement
    if (window.location.hash == "#0") {
        $("#ecolesenattenteblock").show();
        $("#ecolesblock").hide();
        $("#elevesblock").hide();

    }

    if (window.location.hash == "#1") {
        $("#ecolesenattenteblock").hide();
        $("#ecolesblock").show();
        $("#elevesblock").hide();

    }

    if (window.location.hash == "#2") {
        $("#ecolesenattenteblock").hide();
        $("#ecolesblock").hide();
        $("#elevesblock").show();

    }

    $(document).on("click", ".SupprimerEleve", function (event) {
        $studentid = this.name;
    });

    $(document).on("click", "#confirmSuppression1", function (event) {
        $.post('script/Admin_supprimerEleve.php', {studentid: $studentid}, function () {
        });
        window.location.reload();
    });

    $(document).on("click", ".SupprimerEcole", function (event) {
        $schoolid = this.name;
    });

    $(document).on("click", "#confirmSuppression2", function (event) {
        $.post('script/Admin_supprimerEcole.php', {schoolid: $schoolid}, function () {
        });
        window.location.reload();
    });
});