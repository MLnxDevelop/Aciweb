function onLoadBody() {

    $(document).ready(function () {

    });

}

function login() {

    Materialize.Toast.removeAll();

    var email = document.getElementById("inUser").value;
    var pass = document.getElementById("inPass").value;

    if (email.trim() == "" || pass.trim() == "") {
        showMsg("El usuario o la contraseña son incorrectos.", "#F44336");
        return;

    }

    jQuery.ajax({
        type: 'POST',
        url: 'Admin/Controllers/CLogin.php',
        async: true,
        data: {email: email, pass: pass, idapp: 1},
        success: function (response) {

            if (response === "Ok") {

                location.href = "Admin/Views/index.php";

            } else if (response === "No") {

                showMsg("El usuario o la contraseña son incorrectos.", "#F44336");

            } else {

                showMsg("Error de Instrucción", "#F44336");
                console.log("Error: " + response);

            }

        },

        error: function () {
            showMsg("Error de Conexión o de Ruta", "#F44336");
        }

    });

}

function showMsg(msg, color) {

    Materialize.toast(msg, 3000);
    var toasts = document.getElementById('toast-container').getElementsByTagName("div");

    for (var i = 0; i < toasts.length; i++) {
        toasts[i].style.background = "#f50057";
        toasts[i].style.fontWeight = "400";
    }

}

