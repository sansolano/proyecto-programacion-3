<?php
$servername="localhost";
$database ="proyecto_progra_lll";
$username = "root";
$password = "";

//crear el string d conexion
$conn = mysqli_connect($servername, $username, $password, $database);
// revisar si se conecta
if(!$conn)
{
	die("Conexion fallo:". mysqli_connect_error());
};

//mysqli_close($conn);

// creacion de base para el login  

/*
$sql = "CREATE DATABASE proyecto_progra_lll";
if($conn->query($sql) === true){
	echo "Base de datos creada correctamente...";
}else{
	die("Error al crear base de datos: " . $conexion->error);
}
*/

// creacion de la tabla del login
/*
$sql = "CREATE TABLE login_register_user_2(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	usuario VARCHAR(100) NOT NULL,
	nombre VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	contrasena VARCHAR(100) NOT NULL,
	admin BOOLEAN NOT NULL,
	timestamp TIMESTAMP
)";

if($conn->query($sql) === true){
	echo "La tabla se creó correctamente...";
}else{
	die("Error al crear tabla: " . $conn->error);
}
*/

// creacion de la tabla del buses

/*
$sql = "CREATE TABLE crud_reservas(
	idReserva INT(11) AUTO_INCREMENT PRIMARY KEY,
	ruta VARCHAR(100) NOT NULL,
	estadoViaje VARCHAR(100) NOT NULL,
	kilometros INT(11) NOT NULL,
	asientos INT(11) NOT NULL,
	costo INT(11) NOT NULL,
	timestamp TIMESTAMP
)";

if($conn->query($sql) === true){
	echo "La tabla se creó correctamente...";
}else{
	die("Error al crear tabla: " . $conn->error);
}
*/

?>