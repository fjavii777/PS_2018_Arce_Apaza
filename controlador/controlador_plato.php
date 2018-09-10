<?php
include ("../Modelo/modelo_plato.php")
?>
<?php 

$expr1 = "/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/";
//Expresión para validar edad de 18 a 60 años
$expr2 = "/^1[8-9]|[2-5]\d|60$/";
$corregir = "";
?>
<?php
$tipo = $_POST['crud'];
if($tipo=="1"){
	$nomplato = $_POST ['nomplato'];
	$precio = $_POST ['precioplato'];
	$desplato = $_POST ['desplato'];
	$tipoplato= $_POST ['tipoplato'];
	$nom=str_replace(' ', '', $nomplato);
	$pre=str_replace(' ', '', $precio);
	$pla=str_replace(' ', '', $desplato);
	$tip=str_replace(' ', '', $tipoplato);
	
	//if (preg_match( $expr1, $nom )&& preg_match( $expr2, $pre )) {
		$nomplato=trim($nomplato);
		$precio=trim($precio);
		$desplato=trim($desplato);
		$tipoplato=trim($tipoplato);
		$imagenBinaria = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
		$respuesta=InsertarPlato($nomplato,$precio,$desplato,$imagenBinaria,$tipoplato,1);
		if($respuesta==0){
?>
			<script type="text/javascript">
			alert("Plato Agregado");
			location.replace("../views_plato/Admin_plato.php");			
			</script>
<?php 
		}
		//echo "DATOS GRABADOS CORRECTAMENTE";
	//}
	/*if (preg_match( $expr1, $nom ) == false) {
		$corregir .= "Ingrese correo valido <br>";
	}
	
	if (preg_match( $expr2, $pre ) == false) {
		$corregir.="valores de 16 menores de 60 <br>";
	}	
	if($corregir!=""){
		echo $corregir;
	}*/
?>
	
<?php 
	}
?>

<?php
if($tipo=="3"){	
	$id_plato = $_POST['mplacod'];
	$nom_plato = $_POST['mnombre'];
	$precio_plato = $_POST['mprecio'];
	$descripcion_plato = $_POST['mdescripcion'];
	$tipo_plato = $_POST['mtipoplato'];
	$sql=ModificarPlato($id_plato,$nom_plato,$precio_plato,$descripcion_plato,$tipo_plato);
	if($sql==0){
?>
		<script type="text/javascript">
		alert("Producto Modificado");
		location.replace("../vistas/views_plato/Admin_plato.php");												
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

