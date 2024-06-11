<?php // Conexión con la base de datos en PDO.
try // Intenta la conexión con MariaDB, se necesita una base de datos llamada macs con una tabla llamada mac que contiene todas las macs de todos los fabricantes.
{
	$conn = new PDO('mysql:host=localhost;port=3307;dbname=macs', "root", ""); // Conexión con el SGBD en el puerto 3307(MariaDB en WAMP)
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) // En caso de error
{
	echo 'Error: ' . $e->getMessage(); // Muestra el error.
}

use InfluxDB2\Client;

$org = 'laberit';
$bucket = 'SAIDI_DATA';

$client = new Client([
    "url" => "http://localhost:8086",
    "token" => "tMrvUiBYzgW_tMn2IIyFQepTEh9vlawvX-r399jCRcGEzrgrKle_41_-yJxM19cCjHtD7t_qsNlFU6KBicmGpw==",
]); // Para la conexión con InfluxDB es necesario el token que está en una variable de entorno, el puerto (8086), La organización que es laberit y el nombre de la base de datos(bucket) SAIDI_DATA.
?>