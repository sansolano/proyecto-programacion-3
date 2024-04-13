<?php

include('connection.php');
$con = connection();

$Id_Bus = $_POST['Id_Bus'];
$NombreBus = $_POST['NombreBus'];    
$Capacidad = $_POST['Capacidad'];
$CostoXkm = $_POST['CostoXkm'];

$sql = "INSERT INTO crud_buses (nombre_bus, capacidad, costo_km) VALUES ('$NombreBus', '$Capacidad', '$CostoXkm')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location:../crud_bus.php");
    exit();
}
    else{
    echo "Error: " . mysqli_error($con);
}

?>