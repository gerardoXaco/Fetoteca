<?php
	session_start();
	$recibido=json_decode(file_get_contents('php://input'), true);

	include_once "conexion.php";
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");

	$sql="SELECT nombre_usuario, tipo FROM usuarios where nombre_usuario='".$recibido['user']."' AND contrasena='".$recibido['pass']."'";
	$validar=mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($validar);
	$_SESSION['nivel']="";
	if($row["nombre_usuario"]==$recibido['user']){
		
		$_SESSION['usuario']=$row['nombre_usuario'];
		$_SESSION['nivel']=$row['tipo'];
		//msqli_close($con);
 		//header("Location:index.php");
 		$mensaje["status"]="ok";
 		$mensaje["respuesta"]="log in exitoso";

 		echo json_encode($mensaje);

	}
    else{
    	//msqli_close($con);
		$mensaje["status"]="error";
 		$mensaje["respuesta"]="El nombre de usuario o contraseña es incorrecto";
 		echo json_encode($mensaje);
 		 	}

?>

