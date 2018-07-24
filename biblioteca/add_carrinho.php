<?php
	require_once "../bd/conexao.php";

	if (!empty($_GET)) {
		$codProduto = $_GET["produto"]; 

	}else{
		header("Location: index.php");
	}
?>