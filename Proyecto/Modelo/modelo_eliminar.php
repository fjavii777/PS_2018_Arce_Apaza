<?php
include("conexion.php")?>
<?php 
function EliminarPlato($id_plato){
	$con = conectar();
	$sql="UPDATE plato SET Estado_Registro_EstRegCod='3' WHERE PlaCod='$id_plato'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function EliminarEmpleado($id_Empleado){
	$con = conectar();
	$sql="UPDATE empleado SET Estado_Registro_EstRegCod='3' WHERE EmpCod='$id_Empleado'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function EliminarEmpresa($id_Empresa){
	$con = conectar();
	$sql="UPDATE empresa SET Estado_Registro_EstRegCod='3' WHERE EmpCod='$id_Empresa'";
	mysqli_query($con,$sql);
	return $sql;
}
?>