<?php
include ("../Modelo/modelo_empresa.php")
?>
<?php
$tipo = $_POST['crud'];
if($tipo=="1"){
	$NomEmpresa = $_POST ['NombreEmpresaA'];
	$DirEmpresa = $_POST ['DireccionEmpresaA'];
	$TelEmpresa= $_POST ['TelefonoEmpresaA'];	
	$rucEmpresa= $_POST['rucEmpresa'];
	$respuesta=InsertarEmpresa($NomEmpresa,$DirEmpresa,$TelEmpresa,$rucEmpresa,'1');
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Empresa Agregada");
	location.replace("../vistas/views_empresa/Admin_empresa.php");			
	</script>
<?php 
	}
}
?>
<?php



if($tipo=="2"){	
	$id_empresa = $_GET['id_empresa'];
	EliminarEmpresa($id_empresa);
	if($sql==0){
?>
		<script type="text/javascript">
			alert("Empresa Eliminada");
			location.replace("../vistas/views_empresa/Admin_empresa.php");						
		</script>			
		<?php 		
	}	
}
?>
<?php
if($tipo=="3"){	
	$id_empresa = $_POST['mEmpCod'];
	$nom_empresa = $_POST['mEmpNom'];
	$dir_empresa = $_POST['mEmpDir'];
	$tel_empresa = $_POST['mEmpTel'];
	$ruc_empresa= $_POST['mEmpRuc'];
	$sql=ModificarEmpresa($id_empresa,$nom_empresa,$dir_empresa,$tel_empresa,$ruc_empresa);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Empresa Modificaca");
		location.replace("../vistas/views_empresa/Admin_empresa.php");												
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

