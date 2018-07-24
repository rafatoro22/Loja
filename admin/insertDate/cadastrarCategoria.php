<?php 
	require "../../bd/conexao.php";

	if (!empty($_POST)) {
		$DescCategoria 		= $_POST["descCategoria"];

		$insert = "INSERT INTO tblcategoriaproduto(DescCategoria) VALUES ('$DescCategoria')";
		// $insert .= "";

		$consulta = mysqli_query($conexao,$insert);
		if (!$consulta) {
			echo "Não deu certo " . mysqli_error($conexao);
		}else{
			header("Location: ../index.php");
		}
	}
?>