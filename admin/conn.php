<?php
	$conn = mysqli_connect('localhost', 'root', '', 'conaf_estacionamiento');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>