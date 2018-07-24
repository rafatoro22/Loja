<?php 
	require_once "../../bd/conexao.php";

	if (!empty($_GET)) {
		$codProduto = $_GET["produto"];

		//consulta ao banco
		$comando2 = "SELECT Imagem FROM tblproduto WHERE CodProduto = '$codProduto'";
		$resultado = mysqli_query($conexao, $comando2);
		$produto = mysqli_fetch_assoc($resultado);

		$comando 	= "DELETE FROM tblproduto WHERE CodProduto = '$codProduto'";
		$delete     = mysqli_query($conexao,$comando);
		if (!$comando) {
			echo "Erro: " . mysqli_error($conexao);
		}else{			
			$caminhoImagem = $produto["Imagem"];
			unlink("../../" . $caminhoImagem);

			header("Location: ../alterar_dados_produtos.php");
		}
	}else{
		header("Location: ../alterar_dados_produtos.php");
	}
?>