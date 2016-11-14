<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		echo "existe la sesion";
	}
	else{
		echo "no exite session";
	}
?>