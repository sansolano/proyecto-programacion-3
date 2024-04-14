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
$sql = "CREATE TABLE login_register_user(
	Id INT(11) AUTO_INCREMENT PRIMARY KEY,
	Usuario VARCHAR(100) NOT NULL,    
	Nombre VARCHAR(100) NOT NULL,	  
	Apellido1 VARCHAR(100) NOT NULL,	 
	Apellido2 VARCHAR(100) NOT NULL,	  
	Email VARCHAR(100) NOT NULL,
	Contrasena VARCHAR(100) NOT NULL,
	Telefono VARCHAR(100) NOT NULL,	  
	adm BOOLEAN NOT NULL,
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
	usuario VARCHAR(100) NOT NULL,
	timestamp TIMESTAMP
)";

if($conn->query($sql) === true){
	echo "La tabla se creó correctamente...";
}else{
	die("Error al crear tabla: " . $conn->error);
}

*/

// creacion de la tabla del crud_buses
/*
$sql = "CREATE TABLE crud_buses(
	Id INT(11) AUTO_INCREMENT PRIMARY KEY,
	nombre_bus VARCHAR(100) NOT NULL,    
	capacidad INT(11) NOT NULL,	  
	costo_km INT(11) NOT NULL,	 
	timestamp TIMESTAMP
)";

if($conn->query($sql) === true){
	echo "La tabla se creó correctamente...";
}else{
	die("Error al crear tabla: " . $conn->error);
}

*/
?>