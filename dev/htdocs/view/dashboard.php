<?php
   // Inicia la sesión si no está iniciada
   session_start();
   
   // Verifica si se ha enviado la solicitud POST para destruir la sesión
   if (isset($_POST['destruir_sesion'])) {
       // Destruye la sesión
       session_destroy();
       
       // Redirige a otra página o muestra un mensaje de confirmación
       header("Location: homepage.php");
       exit(); // Asegúrate de detener la ejecución después de redirigir
   }
   
   include('php/connection.php');
   include('php/controlador.php');
   $con = connection();
   
   $sql = "SELECT adm from login_register_user";
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
               <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <button type="submit" name="destruir_sesion" class="sidebar-link" style="background: none; border: none; color: white; cursor: pointer;">
                  <i class="lni lni-exit"></i>
                  <span style="text-decoration: underline;">Salir</span>
                  </button>
               </form>
            </div>
         </aside>
         <div class="main p-3">
            <div class="text-center">
               <br>
               <?php
                  // Verificar si la variable de sesión 'usuario' está definida
                  if (isset($_SESSION['usuario'])) {
                      $usuario = $_SESSION['usuario'];
                      echo "<h1>Bienvenido $usuario</h1>"; // Mostrar el valor de usuario
                  } else {
                      echo "Usuario no identificado"; // Mensaje de usuario no identificado
                  }
                  ?>
               <br>
               <div id="carouselExampleCaptions" class="carousel slide">
                  <div class="carousel-indicators">
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img src="https://images.unsplash.com/photo-1572675339312-3e8b094a544d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Terminal de buses">
                        <div class="carousel-caption d-none d-md-block">
                           <h5>Terminal de autobuses</h5>
                           <p>Contamos con una amplia terminal para multiples llegadas y salidas.</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1494515843206-f3117d3f51b7?q=80&w=1744&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Asientos de autobus">
                        <div class="carousel-caption d-none d-md-block">
                           <h5>Autobuses 5 estrellas</h5>
                           <p>Nos caracterizamos por brindar un servicio comodo y satisfactorio.</p>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=1738&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Autobus en montañas">
                        <div class="carousel-caption d-none d-md-block">
                           <h5>Servicios a todas horas</h5>
                           <p>Tenemos servicio a todas horas para brindar una atención de primera calidad.</p>
                        </div>
                     </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
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