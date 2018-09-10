<?php
include ("../Modelo/modelo_factura.php")
?>
<?php
$tipo = $_POST['crud'];

if($tipo=="1"){
	
	$facnomcli= $_POST ['facnomcli'];
	$facigv= $_POST['facigv'];
	$dia= $_POST['dia'];
	$mes= $_POST ['mes'];
	$anio= $_POST['anio'];
	$facempleado= $_POST['facempleado'];
	$mesacod= $_POST ['mesacod'];
	$placod= $_POST['placod'];
	$estado= $_POST['estado'];
	$respuesta=InsertarFactura($facnomcli, $facigv,$dia,$mes,$anio,$facempleado,$mesacod,$placod,'1');
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Factura Agregada");
	location.replace("../vistas/views_factura/factura.php");
	</script>
<?php 
	}
}
?>
<?php

if($tipo=="2"){	
	$id = $_POST['id'];
	EliminarFactura($id);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Factura Eliminada");
		location.replace("../vistas/views_factura/factura.php");	
		</script>			
		<?php 		
	}	
}
?>
<?php

if($tipo=="3"){	
	$id = $_POST['id'];
	$facnomcli= $_POST ['facnomcli'];
	$facigv= $_POST['facigv'];
	$dia= $_POST['dia'];
	$mes= $_POST ['mes'];
	$anio= $_POST['anio'];
	$facempleado= $_POST['facempleado'];
	$mesacod= $_POST ['mesacod'];
	$placod= $_POST['placod'];
	$estado= $_POST['estado'];
	//$sql="UPDATE plato SET PlaNom='$nom_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	//mysqli_query($con,$sql);
	$sql=ModificarFactura($id,$facnomcli, $facigv,$dia,$mes,$anio,$facempleado,$mesacod,$placod,$estado);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Factura Actualizada");
		location.replace("../vistas/views_factura/factura.php");		
		</script>		
		<?php 		
	}	
}
?>

<?php 
function TodaslasFacturas(){
	$resultado = show();
 return $resultado;	
}
?>






