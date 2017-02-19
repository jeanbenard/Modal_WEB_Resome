$(document).ready(function () {

//Photos qui défilent
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });


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
             url: "script/Eleves_changemail.php", // Type de transformation de données HTTP. On va passer ces données transformées
                        
                        // comme argument dans notre fonction de traitement de "success" plus bas
            dataType: "json", // ce qu'on envoie: la valeur qui est dans l'input de l'element avec l'id "nom"
                        
            data: {// Nous récupérons la valeur de nos inputs que l'on fait passer au script php
                password: $("#password").val(),
                email: $("#email").val()
                        },
            success: function (data) {

                if (data.result == 'Success') {// Le mail a été changé
                    window.location.reload();
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
             url: "script/Eleves_changemdp.php", // Type de transformation de données HTTP. On va passer ces données transformées
                        
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

//pour le bloc Informations générales

    $("#changeinfo").click(function () {
        $("#forminfo").show();
        $("#info").hide();
        $("#erreurinfo1").hide();
        $("#erreurinfo2").hide();
    });

    $("#annulerinfo").click(function () {
        $("#forminfo").hide();
        $("#info").show();
    });

    $("#submitinfo").click(function () {

        $.ajax({
             type: "POST", //envoie les données en POST vers post.php et on récupère le tout au format json
             url: "script/Eleves_changeinfo.php", // Type de transformation de données HTTP. On va passer ces données transformées
                        
                        // comme argument dans notre fonction de traitement de "success" plus bas
            dataType: "json", // ce qu'on envoie: la valeur qui est dans l'input de l'element avec l'id "nom"
                        
            data: {// Nous récupérons la valeur de nos inputs que l'on fait passer au script php
                firstname: $("#firstname").val(),
                name: $("#name").val(),
                tel: $("#tel").val(),
                address: $("#address").val(),
                birthdate: $("#birthdate").val(),
                country: $("#country").val(),
                statut: $("#statut").val()
                        },

            success: function (data) {

                if (data.result == 'Success') {// le mot de passe à été changé avec succès. Ajoutons lui un message dans la page HTML.
                    window.location.reload();
                } else if (data.result == 'Failed' && data.errortel == true) {// Le mot de passe n'a pas été changé (data vaut ici "failed") ancien mot de passe incorrect
                    $("#erreurinfo2").show();
                } else {
                    $("#erreurinfo1").show();
                }
            },
             error: function (XMLHttpRequest, textStatus, errorThrown) {// une erreur côté serveur web                               
                alert('Error Message: ' + textStatus);
                alert('HTTP Error: ' + errorThrown);
                }

        });
        return false;
    });


//pour le bloc Informations scolaire
    $("#changeinfoscolaire").click(function () {
        $("#forminfoscolaire").show();
        $("#infoscolaire").hide();
        $(':checkbox').checkboxpicker();
    });

    $("#annulerinfoscolaire").click(function () {
        $("#forminfoscolaire").hide();
        $("#infoscolaire").show();
    });

    $(':checkbox').checkboxpicker().on('change', function () {
        if ($('input#CIEPbox').is(':checked')) {
            document.getElementById('CIEP').value = 0;
        } else {
            document.getElementById('CIEP').value = 1;
        }
    });

    $("#submitinfoscolaire").click(function () {

        $.ajax({
             type: "POST", //envoie les données en POST vers post.php et on récupère le tout au format json
             url: "script/Eleves_changeinfoscolaire.php", // Type de transformation de données HTTP. On va passer ces données transformées
                        
                        // comme argument dans notre fonction de traitement de "success" plus bas
            dataType: "json", // ce qu'on envoie: la valeur qui est dans l'input de l'element avec l'id "nom"
                        
            data: {// Nous récupérons la valeur de nos inputs que l'on fait passer au script php
                studies: $("#studies").val(),
                certificate: $("#certificate").val(),
                CIEP: $("#CIEP").val(),
                futurestudies: $("#futurestudies").val(),
                langages: $("#langages").val(),
                },

            success: function (data) {

                if (data.result == 'Success') {// le mot de passe à été changé avec succès. Ajoutons lui un message dans la page HTML.
                    window.location.reload();
                }
            },
             error: function (XMLHttpRequest, textStatus, errorThrown) {// une erreur côté serveur web                               
                alert('Error Message: ' + textStatus);
                alert('HTTP Error: ' + errorThrown);
                }

        });
        return false;
    });
});