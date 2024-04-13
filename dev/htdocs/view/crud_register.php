<?php

include('php/connection.php');
$con = connection();

$sql = "SELECT * from login_register_user";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>LA CAZADORA R.L.</title>
      <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <link rel="stylesheet" href="../../css/slicebard.css">
   </head>
   <body>
      <header>
        <?php include ('header.php'); ?>
      </header>
         <div class="main p-3">
            <div class="text-center">
               <h1>Creación de Usuarios</h1>
               <br>
               <br>
               <br>
               <form action="php/create_user.php" method="POST">
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="usuario" class="form-label">Usuario</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="usuario" class="form-control">
                     </div>
                  </div>
                    <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="nombre" class="form-label">Nombre:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="nombre" class="form-control">
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="apellido1" class="form-label">Apellido 1:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="apellido1" class="form-control">
                     </div>
                  </div>
                    <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="apellido2" class="form-label">Apellido 2:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="apellido2" class="form-control">
                     </div>
                  </div>
                    <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="email" class="form-label">Email:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="email" class="form-control">
                     </div>
                  </div>
                    <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="contrasena" class="form-label">Contraseña:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="contrasena" class="form-control">
                     </div>
                  </div>
                    <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="telefono" class="form-label">Telefono:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="telefono" class="form-control">
                     </div>
                  </div>
                    <br>
                  <input class= "btn btn-primary" type="submit" value="Crear Usuario">
               </form>
            </div>
         </div>
      </div>
      <footer>
      <?php include ('footer.php'); ?>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous"></script>
      <script src="./../../js/navbar.js"></script>
   </body>
</html>