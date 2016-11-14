<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		echo "existe la sesion";
		session_destroy();
	}
	else{
	}
	header("Location:login.html");
?>