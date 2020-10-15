<?php
$servername ="localhost";
$username = "id9947828_".$_POST['buscar'];
//$pasword ="SoFi@0427";
$pasword = $_POST['pass'];
$database = "id9947828_prueba";
function Conni()
{
	//global $Conn;
	global $servername;
	global $username;
	global $pasword;
	global $database;
	$Conn = mysqli_connect($servername, $username, $pasword);
	if($Conn->connect_error){
		die("Conexión fallida: " . $Conn->connect_error);	
	} else{
		echo "La tabla existe<br>";
		}
}

function tabexists($tabNombre)
{
	Conni();
}
//$buscar = $_POST['buscar'];
//echo "Hola";

//$buscar = $_POST["buscar"];
//Crear la conexión
echo "lista pag<br>";
echo "el id es: " . $username."<br>";
echo "la contraseña es: " . $pasword."<br>";
//$conn = new mysqli($servername, $username, $pasword);
$conn = mysqli_connect($servername, $username, $pasword, $database);
//if ($conn->connect_error){
if(!$conn){
	die("Conexión fallida: " . $conn->connect_error);
}
//Crear la Base de Datos
//$sql = "CREATE DATABASE myDB";
//if($conn->query($sql) ===TRUE){
//	echo "Base creada satisfactoriamente";
//} else {
//	echo "Error al crear la base: " . $conn->error;
//}
echo "Conectado satisfactoriamente<br>";
$conn->close();
$conn =new mysqli($servername, $username, $pasword);
if($conn->connect_error){
	die("Conexión fallida: " . $conn->connect_error);	
} else{
	echo "Segunda conexión establecida<br>";
}
$sql = "CREATE DATABASE id9947828_MIbd";
if($conn->query($sql) ==TRUE){
	echo "Base creada bien <br>";
} else{
	echo "No se creo la base".$conn->error."<br>";
}
$conn->close();
$con = new mysqli($servername, $username, $pasword, $database);
if($con->connect_error){
	die("Conexión fallida: " . $conn->connect_error);	
} else{
	echo "Tercera conexión establecida<br>";
}
$sql = "CREATE TABLE Tabla1(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, firsttname VARCHAR(30) NOT NULL, LASTNAME VARCHAR(30) NOT NULL, email VARCHAR (50), reg_date TIMESTAMP)";
if ($con->query($sql) === TRUE) {
    echo "La creación ha sido exitosa<br>";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
tabexists("Tabla1");
$sql= "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES";
echo "el id es: " . $sql."<br>";
//function tabExists($tabNombre)
//{
//	global
//}
?>