<?php
include ("../Modelo/modelo_eliminar.php")
?>

<?php 
$tipo=$_GET['eliminar'];
?>
<?php
if($tipo=="eliminar_plato"){	
	$id_plato = $_GET['id_plato'];
	$sql=EliminarPlato($id_plato);
	if($sql==0){
?>
		<script type="text/javascript">
			alert("Producto Eliminado");
			location.replace("../vistas/views_plato/Admin_plato.php");						
		</script>			
		<?php 		
	}	
}
?>
<?php
if($tipo=="eliminar_empleado"){	
	$id_plato = $_GET['id_empleado'];
	$sql=EliminarEmpleado($id_plato);
	if($sql==0){
?>
		<script type="text/javascript">
			alert("Producto Eliminado");
			location.replace("../vistas/views_empleados/Admin_emplado.php");						
		</script>			
		<?php 		
	}	
}
?>
<?php
if($tipo=="eliminar_empresa"){	
	$id_empresa = $_GET['id_empresa'];
	$sql=EliminarEmpresa($id_empresa);
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