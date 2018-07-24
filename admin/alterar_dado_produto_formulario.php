<?php 
	require_once "../bd/conexao.php";

	if (!empty($_GET)) {
		$codProduto = $_GET["produto"];

		$comando 	= "SELECT * FROM tblproduto WHERE CodProduto = $codProduto";
		$consulta 	= mysqli_query($conexao, $comando);
		$produto 	= mysqli_fetch_assoc($consulta); 
	}else{
		header("Location: alterar_dados_produtos.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amazing Eletros</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../_css/style.css">
</head>
<body>
	<?php require "componentes/navbar.php" ?>
	<section class="container">
		<h1 class="text-center">Atualizar Produto</h1>
				<form class="form-horizontal" action="update/atualizarProduto.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
					<input type="hidden" class="form-control" name="codProduto" id="codProduto" placeholder="CODIGO PRODUTO" value="<?php echo $produto["CodProduto"]; ?>">
			</div>

			<div class="form-group">
					<input type="hidden" class="form-control" name="codCategoria" id="codProduto" placeholder="CODIGO PRODUTO" value="<?php echo $produto["CodCategoria"]; ?>">
			</div>

			<div class="form-group">
				<label for="nomeProduto" class="col-sm-2 control-label">NOME DO PRODUTO</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="NOME DO PRODUTO" value="<?php echo $produto["NomeProduto"]; ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="precoProduto" class="col-sm-2 control-label">PREÇO</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="precoProduto" id="precoProduto" placeholder="PREÇO DO PRODUTO" value="<?php echo $produto["Preco"]; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="descricaoProduto" class="col-sm-2 control-label">DESCRIÇÃO</label>
				<div class="col-sm-10 ">
					<textarea class="form-control" rows="3" name="descricaoProduto" id="descricaoProduto" placeholder="DESCRIÇÃO DO PRODUTO"><?php echo $produto["DescricaoProduto"]; ?></textarea>
				</div>
			</div>
			<!-- Imagens-->
			<div class="form-group">
			    <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
			    <input type="file" id="exampleInputFile" class="form" name="imagemProduto">
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Alterar Dados</button>
				</div>
			</div>
		</form>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../_js/jquery.mask.js"></script>
</body>
</html>