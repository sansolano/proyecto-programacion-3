<?php

include('connection.php');
$con = connection();

$Id = $_POST['id'];
$Usuario = $_POST['usuario'];    
$Nombre = $_POST['nombre'];
$Apellido1 = $_POST['apellido1'];
$Apellido2 = $_POST['apellido2'];    
$Email = $_POST['email'];
$Contrasena = $_POST['contrasena'];
$Telefono = $_POST['telefono'];

$sql = "UPDATE login_register_user SET id='$Id', usuario='$Usuario', nombre='$Nombre', apellido1='$Apellido1', apellido2='$Apellido2', email='$Email', contrasena='$Contrasena', telefono='$Telefono' WHERE id='$Id'";
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