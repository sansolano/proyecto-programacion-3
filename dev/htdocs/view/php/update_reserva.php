<?php
   include('connection.php');
   $con = connection();
   
   $Id = $_GET['id'];
   $sql = "SELECT * FROM crud_reservas WHERE idReserva = '$Id'";
   $query = mysqli_query($con, $sql);
   $row = mysqli_fetch_array($query);
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
                  <a href="#" class="sidebar-link">
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
               <h1>Editar reserva</h1>
               <br>
               <br>
               <br>
               <form action="editReserva.php" method="POST">
                  <input type="hidden" name="id" value="<?= $row['idReserva']?>">
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="opciones" class="form-label">Ruta:</label>
                     </div>
                     <div class="col-md-8">
                        <select name="rutas" id="rutas" class="form-select">
                           <option value="Alajuela - San José" <?php if ($row['ruta'] == "Alajuela - San José") echo "selected"; ?>>Alajuela - San José</option>
                           <option value="Alajuela - Aurora" <?php if ($row['ruta'] == "Alajuela - Aurora") echo "selected"; ?>>Alajuela - Aurora</option>
                           <option value="Alajuela - San Juan" <?php if ($row['ruta'] == "Alajuela - San Juan") echo "selected"; ?>>Alajuela - San Juan</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="kilometros" class="form-label">Kilometros:</label>
                     </div>
                     <div class="col-md-8">
                        <select name="kilometros" id="kilometros" class="form-select">
                           <option value="60" <?php if ($row['kilometros'] == "60") echo "selected"; ?>>60</option>
                           <option value="45" <?php if ($row['kilometros'] == "45") echo "selected"; ?>>45</option>
                           <option value="30" <?php if ($row['kilometros'] == "30") echo "selected"; ?>>30</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="asientos" class="form-label">Asientos:</label>
                     </div>
                     <div class="col-md-8">
                        <select name="asientos" id="asientos" class="form-select">
                           <option value="40" <?php if ($row['asientos'] == "40") echo "selected"; ?>>40</option>
                           <option value="50" <?php if ($row['asientos'] == "50") echo "selected"; ?>>50</option>
                           <option value="60" <?php if ($row['asientos'] == "60") echo "selected"; ?>>60</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="costo" class="form-label">Costo por asiento:</label>
                     </div>
                     <div class="col-md-8">
                        <select name="costo" id="costo" class="form-select">
                           <option value="740" <?php if ($row['costo'] == "740") echo "selected"; ?>>740</option>
                           <option value="335" <?php if ($row['costo'] == "335") echo "selected"; ?>>335</option>
                           <option value="240" <?php if ($row['costo'] == "240") echo "selected"; ?>>240</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label for="costo" class="form-label">Estado:</label>
                     </div>
                     <div class="col-md-8">
                        <select name="estadoViaje" id="estadoViaje" class="form-select">
                        <option value="Pendiente" <?php if ($row['estadoViaje'] == "Pendiente") echo "selected"; ?>>Pendiente</option>
                        <option value="Cancelado" <?php if ($row['estadoViaje'] == "Cancelado") echo "selected"; ?>>Cancelado</option>
                        <option value="Realizado" <?php if ($row['estadoViaje'] == "Realizado") echo "selected"; ?>>Realizado</option>
                        </select>
                     </div>
                  </div>
                  <br>
                  <input class= "btn btn-primary" type="submit" value="Actualizar">
               </form>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
         crossorigin="anonymous"></script>
      <script src="./../../js/navbar.js"></script>
   </body>
</html>