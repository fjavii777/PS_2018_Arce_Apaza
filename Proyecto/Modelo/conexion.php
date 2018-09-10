<?php
function conectar() {	
		$con=$mysqli = new mysqli ( "localhost", "root","","bd_restaurante");
		if ($con->connect_error) {
			die ( 'Error en la conexion' . $mysqli->connect_error );
		}
		return $con;	
}
?>