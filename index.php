<?php 
	require_once "bd/conexao.php";
	session_start();
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
	<?php require("componentes/navbar.php") ?>
	<header class="container hidden-xs">
		<?php require("componentes/header_categorias.php") ?>
	</header>
	<section class="container">
		<div class="row">
			<!-- imagens-->
			<h1 class="text-center">CONFIRA ESTAS OFERTAS EXCLUSIVAS <span class="glyphicon glyphicon glyphicon-circle-arrow-down"></span></h1>
			<?php 
				$comando 	= "SELECT * FROM tblproduto";
				$consulta 	= mysqli_query($conexao, $comando);
			?>
			<?php while ($produto = mysqli_fetch_assoc($consulta)) { ?>
				<div class="col-sm-3 col-md-4">
					<div class="thumbnail">
						<img class="imagem-produto" src="<?php echo $produto['Imagem'] ?>">
						<div class="caption">
							<h3><?php echo $produto['NomeProduto'] ?></h3>
							<ul class="list-group">
								<li class="list-group-item"><?php echo "À vista: " . $produto['Preco'] . " R$"; ?></li>
								<li class="list-group-item"><?php echo "À prazo: 12x de " . number_format($produto['Preco']/12, 2) . " R$"; ?></li>
							</ul>
							<a href="produtos.php?produto=<?php echo $produto['CodProduto'] ?>" class="btn btn-primary" role="button">Ver produto</a>
							<a href="<?php echo 'biblioteca/add_carrinho.php?produto=' . $produto['CodProduto']  ?>" class="btn btn-default" role="button">
								Adicionar ao Carrinho
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</section>
	<footer class="col-lg-12 footer-main">
		<?php require("componentes/footer.php") ?>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="_js/jquery.mask.js"></script>
</body>
</html>