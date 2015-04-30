<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "consultas_simit";
$con = mysql_connect($server, $username, $password) or die ("Error al conectar: " . mysql_error());
mysql_select_db($database, $con);

$nombre = $_POST["name"];
$mail = $_POST["mail"];
$telefono = $_POST["telefono"];

//Insertamos en la base de datos

$sql = "INSERT INTO clientes (id_clientes, nombre, mail, telefono ) ";
$sql .= "VALUES (' ', '$nombre', '$mail', '$telefono')";
if (!mysql_query($sql, $con)) {
 die('Error: ' . mysql_error());
} else {
	 echo "Datos guardados";
}
mysql_close($con);
?>

?>