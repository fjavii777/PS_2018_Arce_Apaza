<?php
include("conexion.php")?>
<?php 
function InsertarPlato($nomplato,$precioplato,$desplato,$platofoto,$tipoplato,$es_reg_cod){
	$con = conectar();
	//$query="INSERT INTO plato(PlaNom,PlaPrecio,PlaDesc,PlaFoto,tipo_plato_TipPlaCod,Estado_Registro_EstRegCod)values('$nomplato','$precioplato','$desplato',$platofoto,'$tipoplato','$es_reg_cod')"  or die ( mysqli_errno($con));
	$query1="INSERT INTO `plato`(`PlaCod`, `PlaNom`, `PlaPrecio`, `PlaDesc`, `PlaFoto`, `tipo_plato_TipPlaCod`, `Estado_Registro_EstRegCod`) VALUES 
	('','$nomplato','$precioplato','$desplato','$platofoto','$tipoplato','$es_reg_cod')";	
	mysqli_query($con,$query1);
	return $query1;	
}
?>
<?php 
function EliminarPlato($id_plato){
	$con = conectar();
	$sql="UPDATE plato SET Estado_Registro_EstRegCod='3' WHERE PlaCod='$id_plato'";
	//$sql="DELETE FROM `plato` WHERE PlaCod=".$id_plato;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarPlato($id_plato,$nom_plato,$precio_plato,$descripcion_plato,$tipo_plato){
	$con = conectar();
	$sql="UPDATE plato SET PlaNom='$nom_plato',PlaPrecio='$precio_plato',PlaDesc='$descripcion_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function show(){
	$con = conectar();
	$query = "SELECT * FROM plato WHERE Estado_Registro_EstRegCod='1'";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>

