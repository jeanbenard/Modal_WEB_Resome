$(document).ready(function () {

    $(".btnlangue").click(function () {
        $id = this.id;
        $.post('script/Accueil_choixLangue.php', {id: $id}, function () {
        window.location.reload();
        });
    });
});


