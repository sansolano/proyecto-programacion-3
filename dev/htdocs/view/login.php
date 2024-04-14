<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>LA CAZADORA R.L.</title>
      <link rel="stylesheet" href="../css/login.css">
      <link rel="stylesheet" href="../css/reset.css">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
         .nav-button {display: none;}
      </style>
   </head>
   <body>
      <header>
         
      </header>
      <section class="vh-100" style="background-color: #ffffff;">
         <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                     <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                           <img src="https://images.unsplash.com/photo-1597920467799-ec8bee99f6eb?q=80&w=1840&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                           <div class="card-body p-4 p-lg-5 text-black">
                              <form method ="POST" action="">
                                 <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fa fa-bus fa-2x me-3" style="color: #ff5000;"></i>
                                    <span class="h1 fw-bold mb-0">LA CAZADORA R.L.</span>
                                 </div>
                                 <?php 
                                    include('php/conexion.php');
                                    include('php/controlador.php'); 
                                 ?>
                                 <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Bienvenido</h5>
                                 <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder =" Digite su usuario" name= "usuario"/>
                                    <label class="form-label" for="form2Example17">Usuario</label>
                                 </div>
                                 <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" class="form-control form-control-lg" placeholder =" Digite su contraseña" name= "contrasena"/>
                                    <label class="form-label" >Contraseña</label>
                                 </div>
                                 <div class="pt-1 mb-4">
                                 <input name="btningresar" class= "btn btn-dark btn-lg btn-block" type="submit" value = "INICIAR SESION" style="background: #ff5000; border: none;">
                                 </div>
                                 <a class="small text-muted" href="#!">Olvide mi contraseña?</a>
                                 <p class="mb-5 pb-lg-2" style="color: #393f81;">No tienes cuenta? <a href="crud_register.php"
                                    style="color: #393f81;">Registrar aquí</a></p>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer>
      
      </footer

      <script 
         src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
   </body>
</html>