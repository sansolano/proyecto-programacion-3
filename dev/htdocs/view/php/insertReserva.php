<?php
   session_start();
   
   include('connection.php');
   include('php/controlador.php');
   $con = connection();
   
   if (isset($_SESSION['usuario'])) {
       $usuario = $_SESSION['usuario'];
   } else {
       header("Location: login.php");
       exit();
   }
   
   $Id = null;
   $Ruta = $_POST['opciones'];
   $Kilometros = $_POST['kilometros'];    
   $Asientos = $_POST['tiempo'];
   $Costo = $_POST['peajes'];
   $Estado = 'Pendiente';
   $Usuario = $usuario;
   
   $sql = "INSERT INTO crud_reservas (idReserva, ruta, estadoViaje, kilometros, asientos, costo, usuario) VALUES ('$Id','$Ruta','$Estado','$Kilometros','$Asientos','$Costo', '$Usuario')";
   
   $query = mysqli_query($con, $sql);
   
   if ($query) {
       echo '<script>
       setTimeout(function() {
           window.location.href = "../reserva_crud.php";
       }, 10); // Redirigir después de 10 milisegundos
    </script>';
       exit();
   } else {
       echo "Error: " . mysqli_error($con);
   }
   ?>