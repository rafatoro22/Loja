<?php 
	session_start();
	$_SESSION["logado"] = false;
	unset($_SESSION["dados_cliente"]);
	session_destroy();
	header("Location: ../index.php");
?>