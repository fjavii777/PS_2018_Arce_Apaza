<?php
include("conexion.php")?>
<?php 
function InsertarEmpresa($nom,$dir,$tel,$ruc,$estado){
	$con = conectar();
	$query="INSERT INTO empresa(EmpNom,EmpDir,EmpTel,EmpRuc,Estado_Registro_EstRegCod)values('$nom','$dir','$tel','$ruc','$estado')"  or die ( mysqli_errno($con));
	mysqli_query($con,$query);
	return $query;
}
?>
<?php 
function EliminarEmpresa($id){
	$con = conectar();
	$sql="DELETE FROM `empresa` WHERE EmpCod=".$id;
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function ModificarEmpresa($id,$nom,$dir,$tel,$ruc){
	$con = conectar();
	$sql="UPDATE empresa SET EmpNom='$nom',EmpDir='$dir',EmpTel='$tel',EmpRuc='$ruc' WHERE EmpCod='$id'";
	mysqli_query($con,$sql);
	return $sql;
}
?>
<?php 
function show(){
	$con = conectar();
	$query = "SELECT * FROM empresa WHERE Estado_Registro_EstRegCod='1'";
	$resultado = mysqli_query ($con, $query);
	return $resultado;
}
?>




