<?php // Conexión con la base de datos en PDO.
try // Intenta la conexión con MariaDB, se necesita una base de datos llamada macs con una tabla llamada mac que contiene todas las macs de todos los fabricantes.
{
	$conn = new PDO('mysql:host=localhost;port=3307;dbname=users', "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) // En caso de error
{
	echo 'Error: ' . $e->getMessage(); // Muestra el error.
}
?>