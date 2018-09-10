<?php
include ("../Modelo/modelo_estado_registro.php")
?>
<?php

$tipo = $_POST['crud'];

if($tipo=="1"){
    $ide = $_POST['id'];
    
	$Est= $_POST ['Est'];
	$respuesta=InsertarEstadoRegistro($ide,$Est);
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Estado de Registro  Agregado");
	location.replace("../vistas/views_estado_registro/estadoregistro.php");
	</script>
<?php 
	}
}
?>
<?php

if($tipo=="2"){	
	$ide = $_POST['id'];
	EliminarEstadoRegistro($ide);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Estado de Registro  Agregado");
		location.replace("../vistas/views_estado_registro/estadoregistro.php");
		</script>			
		<?php 		
	}	
}
?>
<?php

if($tipo=="3"){	
    $id = $_POST['id'];
	
	$tipo= $_POST['Est'];
	//$sql="UPDATE plato SET PlaNom='$nom_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	//mysqli_query($con,$sql);
	$sql=ModificarEstadoRegistro($id,$tipo);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Estado de Registro  Agregado");
		location.replace("../vistas/views_estado_registro/estadoregistro.php");		
		</script>		
		<?php 		
	}	
}
?>

<?php 
function TodoLosTiposEstadosRegistros(){
	$resultado = show();
 return $resultado;	
}
?>







