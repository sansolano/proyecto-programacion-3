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
                  <a href="../view/dashboard.php" class="sidebar-link">
                  <i class="lni lni-layout"></i>
                  <span>Inicio</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a href="../view/crudUsers.php" class="sidebar-link">
                  <i class="lni lni-user"></i>
                  <span>Usuario</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a href="../view/reserva_crud_Admin.php" class="sidebar-link">
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
                        <a href="crud_bus.php" class="sidebar-link">Autobuses</a>
                     </li>
                     <li class="sidebar-item">
                        <a href="crudUsers.php" class="sidebar-link">Usuarios</a>
                     </li>
                  </ul>
               </li>
            </ul>
            <div class="sidebar-footer">
               <a href="homepage.php" class="sidebar-link">
               <i class="lni lni-exit"></i>
               <span>Salir</span>
               </a>
            </div>
         </aside>
         <div class="main p-3">
            <div class="text-center">
               <h1>Creación de Usuarios</h1>
               <br>
               <br>
               <br>
               <form action="php/insertUser.php" method="POST">
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
                  <div class="row g-3">
                     <div class="col-md-4">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <label for="adm" class="form-label">Tipo de usuario:</label>
                     </div>
                     <div class="col-md-8">
                        <!-- Usa col-md-* para dispositivos medianos -->
                        <input type="text" name="adm" class="form-control">
                     </div>
                  </div>
                    <br>
                  <input class= "btn btn-primary" type="submit" value="Agregar">
               </form>
               <div class="users-table">
                  <br>
                  <br>      
                  <h2>Buses Registrados</h2>
                  <br>
                  <br>
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                        <th>id</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Telefono</th>
                    <th>Tipo de usuario</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                        </tr>
                     </thead>
                     <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                <tr>

                    <th> <?= $row['id'] ?> </th>
                    <th> <?= $row['usuario'] ?> </th>
                    <th> <?= $row['nombre'] ?> </th>
                    <th> <?= $row['apellido1'] ?> </th>
                    <th> <?= $row['apellido2'] ?> </th>
                    <th> <?= $row['email'] ?> </th>
                    <th> <?= $row['contrasena'] ?> </th>
                    <th> <?= $row['Telefono'] ?> </th>
                    <th> <?= $row['adm'] ?> </th>
                
                    <th><a href="php/update_User.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="php/deleteUser.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>
                </tr>
                <?php endwhile; ?>
                     </tbody>
                  </table>
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