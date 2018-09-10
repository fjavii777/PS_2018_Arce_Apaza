<?php
include("conexion.php")?>
<?php 
function InsertarPlato($nomplato,$tipoplato){
	$con = conectar();
	$query="INSERT INTO plato(PlaNom,tipo_plato_TipPlaCod)values('$nomplato','$tipoplato')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<?php 
function EliminarPlato($id_plato){
	$con = conectar();
	$sql="DELETE FROM `plato` WHERE PlaCod=".$id_plato;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarPlato($id_plato,$nom_plato,$tipo_plato){
	$con = conectar();
	$sql="UPDATE plato SET PlaNom='$nom_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function show(){
	$con = conectar();
	$query = "SELECT * FROM plato";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>

