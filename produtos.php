<?php 
	require_once "bd/conexao.php";
	session_start();

	if (!empty($_GET)) {
		$codProduto = $_GET["produto"];

		$comando 	= "SELECT * FROM tblproduto WHERE CodProduto = $codProduto";
		$consulta 	= mysqli_query($conexao, $comando);
		$produto 	= mysqli_fetch_assoc($consulta); 
	}else{
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amazing Eletros</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="_css/style.css">
</head>
<body>
	<header>
		<?php require("componentes/navbar.php") ?>
	</header>
	<section class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12 col-md-5 col-lg-4">
						<a href="#" class="thumbnail">
							<img src="<?php echo $produto["Imagem"] ?>">
						</a>
					</div>
					<div class="col-xs-12 col-md-7 col-lg-8">
						<h1 class="product-name"><?php echo $produto['NomeProduto']; ?> <span class="label label-primary">Promoção</span></h1>
						<div class="panel panel-default">
							<div class="panel-body">
								<?php echo $produto["DescricaoProduto"]; ?>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-body">
								<h4 class="text-center">Preços</h4>
								<div class="col-lg-6 col-md-6">
									<ul class="list-group">
										<li class="list-group-item"><?php echo "À vista: " . $produto['Preco'] . " R$"; ?></li>
										<li class="list-group-item"><?php echo "À prazo: 12x de " . number_format($produto['Preco']/12, 2) . " R$"; ?></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6">
									<form action="produtos.php" method="post">
										<div class="input-group">
											<input type="text" name="cep" class="form-control" placeholder="Calcule o prazo pelo CEP">
											<span class="input-group-btn">
												<button class="btn btn-default" type="button">Calcular</button>
											</span>
										</div>
									</form>
									<a href="#" class="btn btn-primary col-lg-12" role="button">COMPRAR</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--        sugestões de produtos-->
		<h3>Produtos visitados por quem procura este item</h3>
		<?php 
			$comando 	= "SELECT * FROM tblproduto WHERE CodCategoria = " . $produto['CodCategoria'];
			$consulta 	= mysqli_query($conexao, $comando);
		?>
		<?php while ($produto_semelhante = mysqli_fetch_assoc($consulta)) { ?>
		<div class="col-sm-3 col-md-4">
			<div class="thumbnail">
				<img class="imagem-produto" src="<?php echo $produto_semelhante['Imagem'] ?>">
				<div class="caption">
					<h3><?php echo $produto_semelhante['NomeProduto'] ?></h3>
					<a href="produtos.php?produto=<?php echo $produto_semelhante['CodProduto'] ?>" class="btn btn-primary" role="button">Ver produto</a>
					<a href="#" class="btn btn-default" role="button">Adicionar ao Carrinho</a>
				</div>
			</div>
		</div>
		<?php } ?>
	</section>
	<footer class="col-lg-12 footer-main">
		<?php require("componentes/footer.php") ?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="_js/jquery.mask.js"></script>
</body>
</html>