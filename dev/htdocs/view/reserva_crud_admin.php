<?php
   session_start();
   
   include('php/connection.php');
   $con = connection();
   
   if (isset($_SESSION['usuario'])) {
       $usuario = $_SESSION['usuario'];
   } else {
   
       header("Location: homepage.php");
       exit();
   }
   
   $sql = "SELECT * FROM crud_reservas";
   $query = mysqli_query($con, $sql);
   
   if (!$query) {
       echo "Error: " . mysqli_error($con);
       exit();
   }
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
                  <a href="../view/reserva_crud_admin.php" class="sidebar-link">
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
               <a href="login.php" class="sidebar-link">
               <i class="lni lni-exit"></i>
               <span>Salir</span>
               </a>
            </div>
         </aside>
         <div class="main p-3">
            <div class="text-center">
               <h1>Gestión de reservas</h1>
               <br>
               <br>
               <br>
               <form action="php/insertReserva.php" method="POST">
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="opciones" class="form-label">Rutas:</label>
                     </div>
                     <div class="col-md-8">
                        <select name="opciones" id="opciones" class="form-select" onchange="actualizarCampos()">
                           <option value="0">Selecciona una opción</option>
                           <option value="Alajeula - San José">Alajuela - San José</option>
                           <option value="Alajeula - Aurora">Alajuela - Aurora</option>
                           <option value="Alajeula - San Juan">Alajuela - San Juan</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="kilometros" class="form-label">Kilometros:</label>
                     </div>
                     <br>
                     <div class="col-md-8">
                        <input type="text" name="kilometros" id="kilometros" class="form-control" readonly>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="tiempo" class="form-label">Asientos:</label>
                     </div>
                     <br>
                     <div class="col-md-8">
                        <input type="text" name="tiempo" id="tiempo" class="form-control" readonly>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="peajes" class="form-label">Costo por asiento (colones):</label>
                     </div>
                     <div class="col-md-8">
                        <input type="text" name="peajes" id="peajes" class="form-control" readonly>
                     </div>
                  </div>
                  <script>
                     function actualizarCampos() {
                         var opciones = document.getElementById("opciones");
                         var kilometros = document.getElementById("kilometros");
                         var tiempo = document.getElementById("tiempo");
                         var peajes = document.getElementById("peajes");
                     
                         if (opciones.value === "Alajeula - San José") {
                             kilometros.value = "60";
                             tiempo.value = "40";
                             peajes.value = "740";
                         } else if (opciones.value === "Alajeula - Aurora") {
                             kilometros.value = "45";
                             tiempo.value = "50";
                             peajes.value = "335";
                         } else if (opciones.value === "Alajeula - San Juan") {
                             kilometros.value = "30";
                             tiempo.value = "60";
                             peajes.value = "240";
                         } else {
                             kilometros.value = "";
                             tiempo.value = "";
                             peajes.value = "";
                         }
                     }
                  </script>
                  <br>
                  <input class= "btn btn-primary" type="submit" value="Agregar">
               </form>
               <div class="users-table">
                  <br>
                  <br>      
                  <h2>Reservas registradas</h2>
                  <br>
                  <br>
                  <table class="table table-striped table-hover">
                     <thead>
                        <tr>
                           <th>Número de reserva</th>
                           <th>Ruta</th>
                           <th>Kilometros</th>
                           <th>Cantidad de asientos</th>
                           <th>Costo por asiento</th>
                           <th>Fecha y hora de registro</th>
                           <th>Estado</th>
                           <th>Editar</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           while ($row = mysqli_fetch_array($query)) :
                           ?>
                        <tr>
                           <td><?= $row['idReserva'] ?></td>
                           <td><?= $row['ruta'] ?></td>
                           <td><?= $row['kilometros'] ?></td>
                           <td><?= $row['asientos'] ?></td>
                           <td><?= $row['costo'] ?></td>
                           <td><?= $row['timestamp'] ?></td>
                           <td><?= $row['estadoViaje'] ?></td>
                           <th><a href="php/update_reserva.php?id=<?= $row['idReserva'] ?>" class="users-table--edit">Editar</a></th>
                        </tr>
                        <?php
                           endwhile;
                           ?>
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