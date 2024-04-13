<?php

include('connection.php');
$con = connection();

$Id = null;
$Usuario = $_POST['usuario'];
$Nombre = $_POST['nombre'];    
$Apellido1 = $_POST['apellido1'];
$Apellido2 = $_POST['apellido2'];
$Email = $_POST['email'];    
$Contrasena = $_POST['contrasena'];
$Telefono = $_POST['telefono'];
$Adm = $_POST['adm'];

$sql = "INSERT INTO login_register_user (Id, Usuario, Nombre, Apellido1, Apellido2, Email, Contrasena, Telefono, adm) VALUES ('$Id','$Usuario','$Nombre','$Apellido1','$Apellido2','$Email','$Contrasena','$Telefono','$Adm')";

$query = mysqli_query($con, $sql);

if($query){
    echo '<script>
    setTimeout(function() {
        window.location.href = "../crudUsers.php";
    }, 10); // Redirigir después de 10 milisegundos
 </script>';
    exit();
}
    else{
    echo "Error: " . mysqli_error($con);
}

?>