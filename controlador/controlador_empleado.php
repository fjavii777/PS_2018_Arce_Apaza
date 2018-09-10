	<?php
include ("../Modelo/modelo_empleado.php")
?>
<?php
$tipo = $_POST['crud'];
if($tipo=="1"){
	$EmpNom = $_POST ['nomempleado'];
	$EmpCon = $_POST ['passwordempleado'];
	//$pas_cifrado=password_hash($EmpCon, PASSWORD_DEFAULT);
	$EmpEda = $_POST ['edadempleado'];
	$EmpCor = $_POST ['corempleado'];
	$EmpDir = $_POST ['dirempleado'];
	$EmpTel = $_POST ['telempleado'];
	$EmpDni = $_POST ['dniempleado'];
	$tipo_cargo_TipCarCod= $_POST ['tipoempleado'];
	$tipo_horario_TipHorCod= $_POST ['tipoHorario'];
	$EmpFoto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
	$EmpSue= $_POST ['SueldoEmpleado'];
	$empresa_EmpCod= $_POST ['tipoempresa'];								
	$respuesta=InsertarEmpleado($EmpNom,$EmpCon,$EmpEda,$EmpCor,$EmpTel,$EmpDni,$EmpDir,$EmpSue,$EmpFoto,$empresa_EmpCod,$tipo_cargo_TipCarCod,$tipo_horario_TipHorCod,"1");
	if($respuesta==0){
?>	
	<script type="text/javascript">
	  alert("Empleado Agregado");
	  location.replace("../views_empleados/Admin_empleados.php");			
	</script>
<?php 	
	}
}
?>
<?php

if($tipo=="2"){	
	$id_empleado = $_POST['id_empleado'];
	EliminarEmpleado($id_empleado);
	if($sql==0){
?>
		<script type="text/javascript">
			alert("Empleado Eliminado");
			location.replace("../vistas/views_empleados/Admin_empleados.php");						
		</script>			
		<?php 		
	}	
}
?>
<?php
if($tipo=="3"){	
	$id_empleado = $_POST['mEmpCod'];
	$nom_empleado = $_POST['mEmpNom'];
	$pass_empelado = $_POST['mEmpPass'];
	$edad_empleado = $_POST['mEmpEda'];
	$cor_empleado = $_POST['mEmpCor'];
	$direc_empleado = $_POST['mEmpDir'];
	$tel_empleado = $_POST['mEmpTel'];
	$dni_empleado = $_POST['mEmpDni'];
	$tipo_empleado = $_POST['mTIPO_EMPLEADO_TipCod'];
	$tipo_salario = $_POST['mTIPO_SALARIO_SalCod'];
	$tipo_empresa = $_POST['mEMPRESA_EmpCod'];
	$sql=ModificarEmpleado($id_empleado,$nom_empleado,$pass_empelado,$edad_empleado,$cor_empleado,$direc_empleado,$tel_empleado,$dni_empleado,$tipo_empleado,$tipo_salario,$tipo_empresa);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Empleado Modificado");
		location.replace("../vistas/views_empleados/Admin_empleados.php");												
		</script>		
		<?php 		
	}	
}
?>
<?php 
function TodoLosPlatos(){
	$resultado = show();
 return $resultado;	
}
?>

