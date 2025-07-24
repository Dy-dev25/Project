<?php
	include 'connection.php';

	$usuario = $_POST['username'];
	$contrasena = $_POST['password'];

	$insert = "INSERT INTO usuarios(Username, Password) VALUES ('$usuario', '$contrasena')";

	if (mysqli_query($connection, $insert)) {
		echo "<script>alert('Usuario guardado correctamente');</script>";
	}
	else{
		echo "Error. El usuario no se ha guardado" . mysqli_connect_error($connection);
	}
	mysqli_close($connection);
?>