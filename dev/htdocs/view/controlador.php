<?php

    if(!empty($_POST["btningresar"])){
        if (empty($_POST["usuario"]) and empty($_POST["contrasena"])) {
            echo '<div class="alert alert-danger"> Favor valide los campos</div>';
        } else {
            $usuario=$_POST["usuario"];
            $contrasena=$_POST["contrasena"];
            $sql=$conn->query(" SELECT * FROM login_register_user WHERE usuario='$usuario' AND contrasena='$contrasena' ");
            if ($datos=$sql->fetch_object()) {
                echo '<script>
                setTimeout(function() {
                    window.location.href = "dashboard.php";
                }, 10); // Redirigir después de 3 segundos (3000 milisegundos)
             </script>';
            } else {
                echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
            }
        }
    }
?>