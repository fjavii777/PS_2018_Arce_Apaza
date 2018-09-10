<?php
include("conexion.php")?>
<?php 
function InsertarFactura($FacNomCli,$FacIgv,$FacFecDia,$FacFecMes,$FacFecAnio,$empleado_EmpCod,$mesa_plato_mesa_MesaCod,$mesa_plato_plato_PlaCod,$Estado_Registro_EstRegCod){
	$con = conectar();
	$query="INSERT INTO factura(FacNomCli,FacIgv,FacFecDia,FacFecMes,FacFecAnio,empleado_EmpCod,mesa_plato_mesa_MesaCod,mesa_plato_plato_PlaCod,Estado_Registro_EstRegCod)values('$FacNomCli','$FacIgv','$FacFecDia','$FacFecMes','$FacFecAnio','$empleado_EmpCod','$mesa_plato_mesa_MesaCod','$mesa_plato_plato_PlaCod','$Estado_Registro_EstRegCod')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<?php 
function EliminarFactura($id){
	$con = conectar();
	$sql="DELETE FROM `factura` WHERE FacCod=".$id;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarFactura($id,$FacNomCli,$FacIgv,$FacFecDia,$FacFecMes,$FacFecAnio,$empleado_EmpCod,$mesa_plato_mesa_MesaCod,$mesa_plato_plato_PlaCod,$Estado_Registro_EstRegCod){
	$con = conectar();
	$sql="UPDATE factura SET FacNomCli='$FacNomCli',FacIGV='$FacIgv',FacFecDia='$FacFecDia',FacFecMes='$FacFecMes',FacFecAnio='$FacFecAnio',empleado_EmpCod='$empleado_EmpCod',mesa_plato_mesa_MesaCod='$mesa_plato_mesa_MesaCod',mesa_plato_plato_PlaCod='$mesa_plato_plato_PlaCod',Estado_Registro_EstRegCod='$Estado_Registro_EstRegCod' WHERE FacCod='$id'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function MostrarFactura(){
	$con = conectar();
	$query = "SELECT * FROM factura";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>




