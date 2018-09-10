<?php
include("conexion.php")?>
<?php 
function InsertarMesa($NumMesa,$es_reg_cod){
	$con = conectar();
	$query="INSERT INTO mesa(MesaNum,Estado_Registro_EstRegCod)values('$NumMesa','$es_reg_cod')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<?php 
function EliminarMesa($id_mesa){
	$con = conectar();
	$sql="UPDATE mesa SET Estado_Registro_EstRegCod='3' WHERE MesaCod='$id_mesa'";
	//$sql="DELETE FROM `plato` WHERE PlaCod=".$id_plato;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarMesa($id_mesa,$num_mesa){
	$con = conectar();
	$sql="UPDATE mesa SET MesaNum='$num_mesa' WHERE MesaCod='$id_mesa'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function show(){
	$con = conectar();
	$query = "SELECT * FROM mesa WHERE Estado_Registro_EstRegCod='1'";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>

