<?php 
	require_once "../bd/conexao.php";
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
		<h1 class="text-center">Cadastrar Produto</h1>

		<form class="form-horizontal" action="insertDate/cadastrarProdutos.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="codCategoria" class="col-sm-2 control-label">CODIGO CATEGORIA</label>
				<div class="col-sm-10">
					<select class="form-control" name="codCategoria" id="codCategoria">
						<?php 
							$comando 	= "SELECT * FROM tblCategoriaProduto";
							$consulta	= mysqli_query($conexao,$comando);
							if (!$consulta) {
								echo "Erro " . mysqli_error($conexao);
								die();
							}

							while ($categorias = mysqli_fetch_assoc($consulta)){
						 ?>
						 	<option value="<?php echo $categorias['CodCategoria'] ?>"><?php echo $categorias["DescCategoria"]; ?></option>
						 <?php } ?>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="nomeProduto" class="col-sm-2 control-label">NOME DO PRODUTO</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="NOME DO PRODUTO">
				</div>
			</div>
			<div class="form-group">
				<label for="precoProduto" class="col-sm-2 control-label">PREÇO</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" name="precoProduto" id="precoProduto" placeholder="PREÇO DO PRODUTO">
				</div>
			</div>

			<div class="form-group">
				<label for="descricaoProduto" class="col-sm-2 control-label">DESCRIÇÃO</label>
				<div class="col-sm-10 ">
					<textarea class="form-control" rows="3" name="descricaoProduto" id="descricaoProduto" placeholder="DESCRIÇÃO DO PRODUTO"></textarea>
				</div>
			</div>
			<!-- Imagens-->
			<div class="form-group">
			    <label for="exampleInputFile" class="col-sm-2 control-label">File input</label>
			    <input type="file" id="exampleInputFile" class="form" name="imagemProduto">
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">CADASTRAR PRODUTO</button>
				</div>
			</div>
		</form>
		
		<!-- *********************************************************** Cadastrar Categoria ********************************************************************** -->

		<h1 class="text-center">Cadastrar categoria</h1>
		<form class="form-horizontal" action="insertDate/cadastrarCategoria.php" method="post">
			<div class="form-group">
				<label for="descCategoria" class="col-sm-2 control-label">NOME CATEGORIA</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="descCategoria" id="descCategoria" placeholder="NOME CATEGORIA">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">CADASTRAR CATEGORIA</button>
				</div>
			</div>
		</form>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../_js/jquery.mask.js"></script>
</body>
</html>