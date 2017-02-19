$(document).ready(function () {

    if (window.location.hash == "#modal") {
        $('#regconfirmation').modal({show: true});
    } else if (window.location.hash == "#modalerror") {
        $('#regconfirmationerror').modal({show: true});
    }
});