<?php

	$conexion = mysqli_connect('localhost', 'root', '', 'datos1') or die(mysql_error($mysqli));

	diferenciar($conexion);

	function diferenciar($conexion) {
		if (isset($_POST['enviar'])){
			insertar($conexion);
		}
		if (isset($_POST['borrar'])){
			borrar($conexion);
		}
	} 

	function insertar($conexion){
		$matricula = $_POST['ID_Persona'];
		$nombre = $_POST['Nombre'];
		$apellido = $_POST['Carro'];

		$consulta = "INSERT INFO viajes(ID Persona, Nombre, Carro) VALUES ('$ID_Persona', '$Nombre', '$Carro')";
	}
 ?>