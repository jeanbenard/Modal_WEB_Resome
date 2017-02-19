$(window).load(function () {
    $("#header").sticky({topSpacing: 0}); //Permet a la barre des menus de coller au haut de la page lorsqu'on scroll
});

$(document).ready(function () {

// ---------------------- Activation de DataTable -----------------------
    $(document).ready(function () {
        $('#example').DataTable();
        $('#example2').DataTable();
    });

//------------------ Etat initiale ---------------------------
    $("#leselevesblock").show();
    $("#meselevesblock").hide();
    $("#moncompteblock").hide();


//barre de navigation

    $("#moncompte").click(function () {
        $("#moncompteblock").show();
        $("#leselevesblock").hide();
        $("#meselevesblock").hide();
        history.pushState({}, null, 'index.php?page=ecoles#0');
        // Marqueur mon savoir quel onglet est actif. permet de garder cet onglet actif au rechargement
    });

    $("#leseleves").click(function () {
        $("#moncompteblock").hide();
        $("#leselevesblock").show();
        $("#meselevesblock").hide();
        history.pushState({}, null, 'index.php?page=ecoles#1');
    });

    $("#meseleves").click(function () {
        $("#moncompteblock").hide();
        $("#leselevesblock").hide();
        $("#meselevesblock").show();
        history.pushState({}, null, 'index.php?page=ecoles#2');
    });

// ------------------- Pour rester sur le meme onglet actif lors du rechargement
    if (window.location.hash == "#0") {
        $("#moncompteblock").show();
        $("#leselevesblock").hide();
        $("#meselevesblock").hide();

    }

    if (window.location.hash == "#1") {
        $("#moncompteblock").hide();
        $("#leselevesblock").show();
        $("#meselevesblock").hide();

    }

    if (window.location.hash == "#2") {
        $("#moncompteblock").hide();
        $("#leselevesblock").hide();
        $("#meselevesblock").show();

    }

// ------------------ onglet Mon compte -----------------------------

//Pour la page entiere au premier affichage
    $("#formmdp").hide();
    $("#formmail").hide();
    $("#forminfo").hide();
    $("#forminfoscolaire").hide();
    $("#successmdp").hide();
    $("#successmail").hide();

//Pour le bloc Mail

    $("#changemail").click(function () {
        $("#formmdp").hide();
        $("#mdp").show()
        $("#formmail").show();
        $("#mail").hide();
        $("#forminfo").hide();
        $("#info").show()
        $("#erreurmail1").hide();
        $("#erreurmail2").hide();
        $("#erreurmail3").hide();
    });

    $("#annulermail").click(function () {
        $("#formmail").hide();
        $("#mail").show();
    });

    $("#submitmail").click(function () {

        $.ajax({
             type: "POST", //envoie les données en POST vers post.php et on récupère le tout au format json
             url: "script/Ecoles_changemail.php", // Type de transformation de données HTTP. On va passer ces données transformées
                        
                        // comme argument dans notre fonction de traitement de "success" plus bas
            dataType: "json", // ce qu'on envoie: la valeur qui est dans l'input de l'element avec l'id "nom"
                        
            data: {// Nous récupérons la valeur de nos inputs que l'on fait passer au script php
                password: $("#password").val(),
                email: $("#email").val()
                        },
            success: function (data) {

                if (data.result == 'Success') {// Le mail a été changé
                    window.location.reload();
                    $("#leselevesblock").hide();
                    $("#meselevesblock").hide();
                    $("#moncompteblock").show();
                } else if (data.result == 'erreurmail1') {// Le mot de passe est incorrect
                    $("#erreurmail1").show();
                    $("#erreurmail2").hide();
                    $("#erreurmail3").hide();
                } else if (data.result == 'erreurmail2') {
                    // L'adresse est incorrecte
                    $("#erreurmail1").hide();
                    $("#erreurmail2").show();
                    $("#erreurmail3").hide();
                } else if (data.result == 'erreurmail3') {
                    // L'adresse mail est déjà prise
                    $("#erreurmail1").hide();
                    $("#erreurmail2").hide();
                    $("#erreurmail3").show();
                }
            },
             error: function (XMLHttpRequest, textStatus, errorThrown) {// une erreur côté serveur web
                alert('Error Message: ' + textStatus);
                alert('HTTP Error: ' + errorThrown);
                }

        });
        return false;
    });

//Pour le bloc Mot de passe

    $("#changemdp").click(function () {
        $("#formmdp").show();
        $("#mdp").hide();
        $("#erreur1").hide();
        $("#erreur2").hide();

    });

    $("#annulermdp").click(function () {
        $("#formmdp").hide();
        $("#mdp").show();
    });


    $("#submitmdp").click(function () {

        $.ajax({
             type: "POST", //envoie les données en POST vers post.php et on récupère le tout au format json
             url: "script/Ecoles_changemdp.php", // Type de transformation de données HTTP. On va passer ces données transformées
                        
                        // comme argument dans notre fonction de traitement de "success" plus bas
            dataType: "json", // ce qu'on envoie: la valeur qui est dans l'input de l'element avec l'id "nom"
                        
            data: {// Nous récupérons la valeur de nos inputs que l'on fait passer au script php
                oldpassword: $("#oldpassword").val(),
                password1: $("#password1").val(),
                password2: $("#password2").val()
                        },
            success: function (data) {
                if (data.result == "Success") {// le mot de passe à été changé avec succès. Ajoutons lui un message dans la page HTML.
                    window.location.reload();
                    $("#leselevesblock").hide();
                    $("#meselevesblock").hide();
                    $("#moncompteblock").show();
                } else if (data.result == 'erreurmdp1') {// Le mot de passe n'a pas été changé (data vaut ici "failed") ancien mot de passe incorrect
                    $("#erreur2").hide();
                    $("#erreur1").show();
                    $("#erreur3").hide();
                } else if (data.result == 'erreurmdp2') {
                    // Les deux mots de passes sont différents
                    $("#erreur1").hide();
                    $("#erreur2").show();
                    $("#erreur3").hide();
                }
            },
             error: function (XMLHttpRequest, textStatus, errorThrown) {// une erreur côté serveur web
                alert('Error Message: ' + textStatus);
                alert('HTTP Error: ' + errorThrown);
                }

        });
        return false;
    });

// ------------------------- Fin Js page mon compte -------------------------------------

// -------------------------- Afficher des modals ---------------------------------------

    $(".voir_plus").click(function () {
        $id = this.id;
        $pageinf = window.location.hash.substring(1, 2);
        $.post('script/Ecoles_modalEleve.php', {id: $id, pageinf: $pageinf}, function (data) {
            $('#modalVoirPlus').empty();
            $('#modalVoirPlus').append(data)
        });
    });

    $(document).on("click", "#recruit", function (event) {
        $studentid = this.name;
        $.post('script/Ecoles_ajouterEleve.php', {studentid: $studentid}, function () {
        });
        window.location.reload();
    });



    $(document).on("click", "#dismiss", function (event) {
        $studentid = this.name;
        $.post('script/Ecoles_retirerEleve.php', {studentid: $studentid}, function () {
        });
        window.location.reload();
    });

    $(document).on("click", "#delete", function (event) {
        $studentid = this.name;
        $.post('script/Ecoles_supprimerEleve.php', {studentid: $studentid}, function () {
        });
        window.location.reload();
    });

});
    