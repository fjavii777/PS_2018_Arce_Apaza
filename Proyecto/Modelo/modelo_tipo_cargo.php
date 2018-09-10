
<?php
include("conexion.php")?>
<?php 
function InsertarTipoCargo($id,$descripcion,$estado){
	$con = conectar();
	$query="INSERT INTO tipo_cargo(TipCarCod,TipCarDes,Estado_Registro_EstRegCod)values('$id','$descripcion','$estado')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<?php 
function EliminarTipoCargo($id){
	$con = conectar();
	$sql="DELETE FROM `tipo_cargo` WHERE TipCarCod=".$id;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarTipoCargo($id,$descripcion){
	$con = conectar();
	$sql="UPDATE tipo_cargo SET TipCarDes='$descripcion'  WHERE TipCarCod='$id'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function MostrarTipoCargo(){
	$con = conectar();
	$query = "SELECT * FROM tipo_cargo WHERE Estado_Registro_EstRegDesc";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>


