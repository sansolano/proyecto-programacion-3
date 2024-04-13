<?php

include('connection.php');
$con = connection();

$Id = $_GET['id'];
$sql = "DELETE FROM login_register_user WHERE id='$Id'";
$query = mysqli_query($con, $sql);


if($query){
    echo '<script>
    setTimeout(function() {
        window.location.href = "../crudUsers.php";
    }, 10); // Redirigir después de 10 milisegundos
 </script>';
    exit();
}
    else{
    echo "Error: " . mysqli_error($con);
}
?>