<?php 
	require "../../bd/conexao.php";

	if (!empty($_POST)) {
		$codCategoria		= $_POST["codCategoria"];
		$nomeProduto 		= $_POST["nomeProduto"];
		$precoProduto		= $_POST["precoProduto"];
		$descricaoProduto 	= $_POST["descricaoProduto"];
		//imagem do produto
		$imagem_tmp			= $_FILES["imagemProduto"]["tmp_name"];
		$imagem				= basename($_FILES["imagemProduto"]["name"]);
		$diretorio_mover	= "../../imgs/produtos/";
		$diretorio   		= "imgs/produtos/";

		move_uploaded_file($imagem_tmp, $diretorio_mover. $imagem);
		$diretorio_imagem = $diretorio. $imagem;

		$insert = "INSERT INTO tblproduto(CodCategoria,nomeProduto,Preco,DescricaoProduto,Imagem) VALUES ($codCategoria,'$nomeProduto','$precoProduto','$descricaoProduto','$diretorio_imagem')";

		$consulta = mysqli_query($conexao,$insert);

		if (!$consulta) {
			echo "Não deu certo " . mysqli_error($conexao);
		}else{
			header("Location: ../index.php");
		}

	}
?>