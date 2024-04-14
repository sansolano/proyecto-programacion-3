<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica si se envió el formulario
if (!empty($_POST["btningresar"])) {
    // Verifica que se hayan ingresado el usuario y la contraseña
    if (empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
        echo '<div class="alert alert-danger"> Favor valide los campos</div>';
    } else {
        // Obtiene los valores del formulario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        
        // Realiza la consulta para verificar las credenciales
        $sql = $conn->query("SELECT * FROM login_register_user WHERE usuario='$usuario' AND contrasena='$contrasena'");
        if ($datos = $sql->fetch_object()) {
            // Almacenar el valor de usuario en una sesión
            $_SESSION['usuario'] = $usuario;

            // Verificar el valor de la columna 'adm' y redirigir según sea necesario
            if ($datos->adm == 1) {
                // Redirigir a dashboard.php si 'adm' es igual a 1
                header("Location: dashboard.php");
                exit(); // Asegúrate de detener la ejecución después de redirigir
            } else {
                // Redirigir a dashboard_client.php si 'adm' no es igual a 1
                header("Location: dashboard_client.php");
                exit(); // Asegúrate de detener la ejecución después de redirigir
            }
        } else {
            echo '<div class="alert alert-danger">Usuario o contraseña incorrectos</div>';
        }
    }
}
?>