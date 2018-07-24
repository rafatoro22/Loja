<?php 
	require "../../bd/conexao.php";

	if (!empty($_POST)) {
		$codProduto 		= $_POST["codProduto"];
		$codCategoria		= $_POST["codCategoria"];
		$nomeProduto 		= $_POST["nomeProduto"];
		$precoProduto		= $_POST["precoProduto"];
		$descricaoProduto 	= $_POST["descricaoProduto"];
		//imagem do produto
		$imagem_tmp			= $_FILES["imagemProduto"]["tmp_name"];
		$imagem		= basename($_FILES["imagemProduto"]["name"]);
		$diretorio_mover	= "../../imgs/produtos/";
		$diretorio   		= "imgs/produtos/";

		move_uploaded_file($imagem_tmp, $diretorio_mover. $imagem);
		$diretorio_imagem = $diretorio. $imagem;

		$update = "UPDATE tblproduto SET CodProduto = '$codProduto',CodCategoria = '$codCategoria',nomeProduto = '$nomeProduto',Preco = '$precoProduto',DescricaoProduto = '$descricaoProduto',Imagem = '$diretorio_imagem' WHERE CodProduto = $codProduto";
		
		$atualizar = mysqli_query($conexao,$update);

		if (!$atualizar) {
			echo "Não deu certo " . mysqli_error($conexao);
		}else{
			header("Location: ../index.php");
		}

	}
?>