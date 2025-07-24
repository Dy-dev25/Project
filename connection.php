<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "project";
	$connection = mysqli_connect($server, $user, $password, $database);

	if (!$connection){
		die("Error. La conexión con la base de datos ha fallado" . mysqli_connect_error());
	}
?>