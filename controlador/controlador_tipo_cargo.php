<?php
include ("../Modelo/modelo_tipo_cargo.php")
?>
<?php
$tipo = $_POST['crud'];

if($tipo=="1"){
    $id= $_POST ['id'];
	$descripcion= $_POST ['descripcion'];
	
	$respuesta=InsertarTipoCargo($id,$descripcion,'1');
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Tipo de Cargo Agregado");
	location.replace("../vistas/views_tipo_cargo/tipoCargo.php");
	</script>
<?php 
	}
}
?>
<?php

if($tipo=="2"){	
	$ide = $_POST['id'];
	EliminarTipoCargo($ide);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Tipo de Cargo Eliminado");
		location.replace("../vistas/views_tipo_cargo/tipoCargo.php");	
		</script>			
		<?php 		
	}	
}
?>
<?php

if($tipo=="3"){	
    $id= $_POST ['id'];
    $descripcion= $_POST ['descripcion'];
    
	//$sql="UPDATE plato SET PlaNom='$nom_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	//mysqli_query($con,$sql);
	$sql=ModificarTipoCargo($id,$descripcion);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Tipo de Cargo Actualizado");
		location.replace("../vistas/views_tipo_cargo/tipoCargo.php");			
		</script>		
		<?php 		
	}	
}
?>

<?php 
function MostrarCargos(){
	$resultado = MostrarTipoCargo();
 return $resultado;
}
?>







