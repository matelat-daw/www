<?php // Documento de script php
if (isset($_POST['user'])) // Si recibe datos por POST en la variable array $_POST["user"].
{
	$user = $_POST['user']; // Asigna a la variable $user el contenido del array $_POST["user"].
	$pass = $_POST['pass']; // Lo mismo con $_POST["pass"].
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<script src="inc/functions.js"></script>
<title><?php echo $user; ?></title> <!-- Le pone a la pÃ¡gina de tÃ­tulo el nombre del Usuario. -->
</head>
<body>
<h1>Hola <?php echo $user; ?></h1> <!-- Muestra en un h1 el nombre del usuario. -->
<h1><?php echo $pass; ?></h1> <!-- Muestra en un h1 la contraseÃ±a del usuario. -->
</body>
</html>