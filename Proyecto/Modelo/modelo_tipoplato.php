<?php
include("conexion.php")?>
<?php 
function InsertarTipoPlato($desc){
	$con = conectar();
	$query="INSERT INTO tipo_plato(TipPlaDesc)values('$desc')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<?php 
function EliminarTipoPlato($id_plato){
	$con = conectar();
	$sql="DELETE FROM `tipo_plato` WHERE TipPlaCod=".$id_plato;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarTipoPlato($id_plato,$tipo_plato){
	$con = conectar();
	$sql="UPDATE tipo_plato SET TipPlaDesc='$tipo_plato' WHERE TipPlaCod='$id_plato'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function show_tipo_plato(){
	$con = conectar();
	$query = "SELECT * FROM tipo_plato";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>


