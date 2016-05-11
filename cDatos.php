<?php
	/********CONEXION*********/
	//Creamos las variables con los datos
	$host = "localhost";
	$user = "root";
	$pass = "n0m3l0";
	//$pass = "nomeacuerdo";
	$database_name = "visionyestilo";

	#MySQL
	/*
	$conexion = mysql_connect($host,$user,$pass);
	if ($conexion) {
		mysql_select_db($database_name, $link);
	}*/

	#MySQLi

	$conexion = mysqli_connect($host, $user, $pass, $database_name) or die("Ira men deja te etsplico que no se pudo coneptar");

?>