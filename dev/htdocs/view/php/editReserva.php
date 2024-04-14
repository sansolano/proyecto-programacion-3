<?php

include('connection.php');
$con = connection();

$Id = $_POST['idReserva'];
$Ruta = $_POST['ruta'];
$Kilometros = $_POST['kilometros'];
$Asientos = $_POST['asientos'];
$Costo = $_POST['costo'];
$Estado = $_POST['estadoViaje'];

$sql = "UPDATE crud_reservas SET ruta='$Ruta', estadoViaje='$Estado', kilometros='$Kilometros', asientos='$Asientos', costo='$Costo' WHERE idReserva='$Id'";
$query = mysqli_query($con, $sql);

if ($query) {
    echo '<script>
    setTimeout(function() {
        window.location.href = "../reserva_crud_admin.php";
    }, 10); // Redirigir después de 10 milisegundos
 </script>';
    exit();
} else {
    echo "Error: " . mysqli_error($con);
}
?>