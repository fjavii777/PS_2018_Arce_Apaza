<?php
include("conexion.php")?>
<?php 
function InsertarEmpleado($EmpNom,$EmpCon,$EmpEda,$EmpCor,$EmpTel,$EmpDni,$EmpDir,$EmpSue,$EmpFoto,$empresa_EmpCod,$tipo_cargo_TipCarCod,$tipo_horario_TipHorCod,$Estado_Registro_EstRegCod){
	$con = conectar();                                                                                                                                                                                                                                                                   
	$query="INSERT INTO empleado(EmpNom,EmpCon,EmpEda,EmpCor,EmpTel,EmpDni,EmpDir,EmpSue,EmpFoto,empresa_EmpCod,tipo_cargo_TipCarCod,tipo_horario_TipHorCod,Estado_Registro_EstRegCod)values('$EmpNom','$EmpCon','$EmpEda','$EmpCor','$EmpTel','$EmpDni','$EmpDir','$EmpSue','$EmpFoto','$empresa_EmpCod','$tipo_cargo_TipCarCod','$tipo_horario_TipHorCod','$Estado_Registro_EstRegCod')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<!--   Se cambio-->
<?php 
function EliminarEmpleado($id_empleado){
	$con = conectar();
	$sql="UPDATE empleado SET Estado_Registro_EstRegCod='3' WHERE EmpCod='$id_empleado'";
	//$sql="DELETE FROM `plato` WHERE PlaCod=".$id_plato;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarEmpleado($id_empleado,$nom_empleado,$pass_empelado,$edad_empleado,$cor_empleado,$direc_empleado,$tel_empleado,$dni_empleado,$tipo_empleado,$tipo_salario,$tipo_empresa){
	$con = conectar();
	$sql="UPDATE empleado SET EmpNom='$nom_empleado',EmpPass='$pass_empelado',EmpEda='$edad_empleado',EmpCor='$cor_empleado',EmpDir='$direc_empleado',EmpTel='$tel_empleado',EmpDni='$dni_empleado',TIPO_EMPLEADO_TipCod='$tipo_empleado',TIPO_SALARIO_SalCod='$tipo_salario',EMPRESA_EmpCod='$tipo_empresa' WHERE EmpCod='$id_empleado'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function show(){
	$con = conectar();
	$query = "SELECT * FROM empleado WHERE Estado_Registro_EstRegCod='1'";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>

