<?php
include ("../Modelo/modelo_tipoplato.php")
?>
<?php
$tipo = $_POST['crud'];

if($tipo=="1"){
	
	$tipoplatodesc= $_POST ['tipoplatodesc'];
	$respuesta=InsertarTipoPlato($tipoplatodesc);
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Tipo de Plato Agregado");
	location.replace("../vistas/views_plato/nuevo_plato.php");
	</script>
<?php 
	}
}
?>
<?php

if($tipo=="2"){	
	$ide = $_POST['id'];
	EliminarTipoPlato($ide);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Tipo de Plato eliminado");
		location.replace("../vistas/views_plato/nuevo_plato.php");	
		</script>			
		<?php 		
	}	
}
?>
<?php

if($tipo=="3"){	
    $id = $_POST['id'];
	
	$tipo= $_POST['tipoplatodesc'];
	//$sql="UPDATE plato SET PlaNom='$nom_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	//mysqli_query($con,$sql);
	$sql=ModificarTipoPlato($id,$tipo);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Tipo de Plato actualizado");
		location.replace("../vistas/views_plato/nuevo_plato.php");			
		</script>		
		<?php 		
	}	
}
?>

<?php 
function TodoLosTiposPlatos(){
	$resultado = show();
 return $resultado;	
}
?>