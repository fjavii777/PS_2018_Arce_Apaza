<?php
include ("../Modelo/modelo_mesa.php")
?>
<?php
$tipo = $_GET['crud'];
if($tipo=="1"){
	$NumMesa = $_GET ['MesaNum'];
	$respuesta=InsertarMesa($NumMesa,1);
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Mesa Agregada");
	location.replace("../vistas/views_mesas/Admin_mesas.php");			
	</script>
<?php 
	}
}
?>
<?php

if($tipo=="2"){	
	$id_mesa = $_GET['id_mesa'];
	EliminarMesa($id_mesa);
	if($sql==0){
?>
		<script type="text/javascript">
			alert("Mesa Eliminada");
			location.replace("../vistas/views_mesas/Admin_mesas.php");						
		</script>			
		<?php 		
	}	
}
?>
<?php
if($tipo=="3"){	
	$id_mesa = $_GET['mmescod'];
	$num_mesa = $_GET['mnumero'];
	$sql=ModificarMesa($id_mesa,$num_mesa);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Mesa Modificaca");
		location.replace("../vistas/views_mesas/Admin_mesas.php");												
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

