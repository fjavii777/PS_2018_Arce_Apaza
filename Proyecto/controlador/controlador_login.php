<?php
include '../Modelo/conexion.php';
try{
	session_start();
	echo "holas entre1";
	$nombre_empleado="";
	$id_empleado="";
	$login=htmlentities(addslashes($_GET["email"]));
	$password=htmlentities(addslashes($_GET["password"]));	
	$contador=0;
	$base=new PDO("mysql:host=localhost; dbname=bd_restaurante" , "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM empleado WHERE EmpCor= :login";
	$resultado=$base->prepare($sql);	
	$resultado->execute(array(":login"=>$login));
	echo "holas entre 2";
	while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){			
		//echo "Empleado: " . $registro['EmpCor'] . " Contraseña: " . $registro['EmpCon'] . "<br>";
		if($password==$registro['EmpCon']){
			
			$tipo_empleado=$registro['tipo_cargo_TipCarCod'];
			$foto_empleado=$registro['EmpFoto'];
			
			$nombre_empleado=$registro['EmpNom'];
			$contador++;
			//echo $foto_empleado;
			
		}
		/*if(password_verify($password,$registro['EmpCon'])){
			$contador++;
		}*/
	}
	//echo $tipo_empleado;
	if($contador>0){
		echo "holas entre4";
		//Es administrador
		if($tipo_empleado=="1"){
			echo "holas entre 6";
			$_SESSION['nombre']=$nombre_empleado;
			$_SESSION['foto']=$foto_empleado;
?>	
			<script type="text/javascript">
			alert("Administrador......Dota");
			location.replace("../vistas/views_empleados/Admin_empleados.php");
			</script>
<?php 
		}
		//Es Cajero
		if($tipo_empleado=="2"){	
			echo "holas entre 5";
		}
		//Es mozo
		if($tipo_empleado=="3"){
				
		}
	}
	$resultado->closeCursor();
	}catch(Exception $e){	
	die("Error: " . $e->getMessage());
}
?>