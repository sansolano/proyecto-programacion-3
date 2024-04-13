<?php

include('connection.php');
$con = connection();

$Id = $_GET['id'];

$sql = "SELECT * FROM login_register_user WHERE id = '$Id'";
$query = mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);  //raiz del usuario especifico
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>LA CAZADORA R.L. - Autobuses</title>
        <link rel="stylesheet" href="CSS/crudUsers.css">
        <script src="../css/bootstrap.min.css"></script>
        <script src="../components/header/header.js"></script>
        <script src="../components/footer/footer.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        

        
    </head>
    <body>
    <header>
    
    </header>
        <div class="users-form">
            <form action="editUser.php" method="POST">
                <h1>Editar Usuario</h1>
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="usuario" placeholder="Usuario" value="<?= $row['usuario']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <input type="text" name="apellido1" placeholder="Apellido 1" value="<?= $row['apellido1']?>">
                <input type="text" name="apellido2" placeholder="Apellido 2" value="<?= $row['apellido2']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">
                <input type="text" name="contrasena" placeholder="Contrasena" value="<?= $row['contrasena']?>">
                <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['Telefono']?>">
                <input type="submit" value="Actualizar Informacion del Usuario">
            </form>
        </div>
        
        
        <footer>
         
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>