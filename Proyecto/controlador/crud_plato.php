<?php
include ("../Modelo/modelo_crud_plato.php")
?>
<?php
$tipo = $_GET['crud'];
if($tipo=="1"){
	$nomplato = $_GET ['nomplato'];
	$tipoplato= $_GET ['tipoplato'];
	$respuesta=InsertarPlato($nomplato,$tipoplato);
	if($respuesta==0){
?>	
	<script type="text/javascript">
	alert("Plato Agregado");
	location.replace("../vistas/tipoPlato/nuevo_platos.php");
	</script>
<?php 
	}
}
?>
<?php

if($tipo=="2"){	
	$id_plato = $_GET['id_tipoplato'];
	EliminarPlato($id_plato);
	if($sql==0){
?>
		<script type="text/javascript">
			alert("Producto Eliminado");
			location.replace("../vistas/tipoPlato/nuevo_platos.php");			
		</script>			
		<?php 		
	}	
}
?>
<?php

if($tipo=="3"){	
	$id_plato = $_GET['mplacod'];
	$nom_plato = $_GET['mNomPlato'];
	$tipo_plato = $_GET['mTipoplato'];
	//$sql="UPDATE plato SET PlaNom='$nom_plato',tipo_plato_TipPlaCod='$tipo_plato' WHERE PlaCod='$id_plato'";
	//mysqli_query($con,$sql);
	$sql=ModificarPlato($id_plato,$nom_plato,$tipo_plato);
	if($sql==0){
?>
		<script type="text/javascript">
			location.replace("../vistas/tipoPlato/nuevo_platos.php");			
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

