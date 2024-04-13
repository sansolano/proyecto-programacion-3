<?php
   include('connection.php');
   $con = connection();
   
   $NombreBus = $_POST['NombreBus'];    
   $Capacidad = $_POST['Capacidad'];
   $Costo_km = $_POST['CostoXkm'];
   
   $sql = "UPDATE crud_buses SET nombre_bus='$NombreBus', capacidad='$Capacidad', costo_km='$Costo_km' WHERE nombre_bus='$NombreBus'";
   $query = mysqli_query($con, $sql);
   if($query){
       echo '<script>
       setTimeout(function() {
           window.location.href = "../crud_bus.php";
       }, 10); // Redirigir después de 10 milisegundos
    </script>';
   exit();
    
       exit();
   }
       else{
       echo "Error: " . mysqli_error($con);
   }
   ?>