<?php
   include('connection.php');
   $con = connection();
   
   $Id_Bus=$_GET['Id_Bus'];
   
   $sql = "SELECT * FROM crud_buses WHERE Id = '$Id_Bus'";
   $query = mysqli_query($con, $sql);
   $row=mysqli_fetch_array($query);  //raiz del usuario especifico
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
      <div class="wrapper">
         <aside id="sidebar">
            <div class="d-flex">
               <button class="toggle-btn" type="button">
               <i class="lni lni-grid-alt"></i>
               </button>
               <div class="sidebar-logo">
                  <a href="#">La Cazadora R.L.</a>
               </div>
            </div>
            <ul class="sidebar-nav">
            <li class="sidebar-item">
                  <a href="../dashboard.php" class="sidebar-link">
                  <i class="lni lni-layout"></i>
                  <span>Inicio</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a href="../crudUsers.php" class="sidebar-link">
                  <i class="lni lni-user"></i>
                  <span>Usuario</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a href="#" class="sidebar-link">
                  <i class="lni lni-agenda"></i>
                  <span>Reservas</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                     data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                  <i class="lni lni-cog"></i>
                  <span>Administración</span>
                  </a>
                  <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                     <li class="sidebar-item">
                        <a href="../crud_bus.php" class="sidebar-link">Autobuses</a>
                     </li>
                     <li class="sidebar-item">
                        <a href="../crudUsers.php" class="sidebar-link">Usuarios</a>
                     </li>
                  </ul>
               </li>
            </ul>
            <div class="sidebar-footer">
               <a href="../login.php" class="sidebar-link">
               <i class="lni lni-exit"></i>
               <span>Salir</span>
               </a>
            </div>
         </aside>
         <div class="main p-3">
            <div class="text-center">
               <h1>Editar registro</h1>
               <br>
               <br>
               <br>
               <form action="edit_bus.php" method="POST">
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="NombreBus" class="form-label">Nombre del bus:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="NombreBus" placeholder="Nombre Bus" value="<?= $row['nombre_bus']?>">
                     </div>
                  </div>
                    <br>

                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="Capacidad" class="form-label">Capacidad:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="Capacidad" placeholder="Capacidad" value="<?= $row['capacidad']?>">
                     </div>
                  </div>
                  <br>

                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="CostoXkm" class="form-label">Costo por kilómetro:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="CostoXkm" placeholder="Costo por km" value="<?= $row['costo_km']?>">
                     </div>
                  </div>
                    <br>

                  <input class= "btn btn-primary" type="submit" value="Actualizar">
               </form>
               <div class="users-table">
                  <br>
                  <br>      
        
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous"></script>
      <script src="./../../js/navbar.js"></script>
   </body>
</html>