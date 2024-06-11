<?php // Documento de script php
if (isset($_POST['email'])) // Si recibe datos por POST en la variable array $_POST["email"].
{
	$email = $_POST['email']; // Asigna a la variable $email el contenido del array $_POST["email"].
	$pass = $_POST['pass']; // Lo mismo con $_POST["pass"].

	$sql = "SELECT * FROM user WHERE email='$emal';";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	if ($stmt->rowCount() > 0)
	{
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		if (password_verify($pass, $row->pass))
		{
			include "includes/header.php";
			echo '
				<h1>Hola <?php echo $email; ?></h1> <!-- Muestra en un h1 el email del usuario. -->
				<h1><?php echo $pass; ?></h1> <!-- Muestra en un h1 la contraseña del usuario. -->
			';
		}
	}
	else
	{
		echo "<script>toast(1, 'No Hay Datos', 'El E-mail Introducido no Está Registrado en la Base de Datos.');</script>";
	}
}
include "includes/footer.html";
?>