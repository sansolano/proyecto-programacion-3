<?php
if (!empty($_POST["btningresar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
        echo '<div class="alert alert-danger"> Favor valide los campos</div>';
    } else {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $sql = $conn->query("SELECT * FROM login_register_user WHERE usuario='$usuario' AND contrasena='$contrasena'");
        if ($datos = $sql->fetch_object()) {
            session_start();
            $_SESSION['usuario'] = $usuario;

            // Verificar el valor de la columna 'adm'
            if ($datos->adm == 1) {
                // Redirigir a dashboard.php si 'adm' es igual a 1
                echo '<script>
                    setTimeout(function() {
                        window.location.href = "dashboard.php";
                    }, 10); // Redirigir después de 10 milisegundos
                </script>';
            } else {
                // Redirigir a dashboard_client.php si 'adm' no es igual a 1
                echo '<script>
                    setTimeout(function() {
                        window.location.href = "dashboard_client.php";
                    }, 10); // Redirigir después de 10 milisegundos
                </script>';
            }
        } else {
            echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
        }
    }
}
?>