<?php
   include('connection.php');
   $con = connection();
   
   $Id_Bus = $_GET['Id_Bus'];
   $sql = "DELETE FROM crud_buses WHERE idBus='$Id_Bus'";
   $query = mysqli_query($con, $sql);
   
   
   if($query){
       Header("Location: ../crud_bus.php");
       exit();
   }
       else{
       echo "Error: " . mysqli_error($con);
   }
   ?>