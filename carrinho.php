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
	<section class="container">
		<div class="row">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="text-center">CARRINHO DE COMPRAS <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1>
				</div>
				<div class="panel-body">
					<!-- <ul class="list-group">
						<li class="list-group-item"><img src="imgs/produtos/teste.jpg" width="150px"> NOME DO PRODUTO </li>
					</ul> -->
					<table class="table">
						<tr>
							<th>IMAGEM</th>
							<th>PRODUTO</th>
							<th>QUANTIDADE</th>
							<th>PREÇO</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<div class="panel-footer">
					<div class="col-lg-10">
						<div class="row">
							<form action="carrinho.php" method="post">
								<div class="input-group col-lg-4">
									<input type="text" name="cep" class="form-control" placeholder="Calcule o prazo pelo CEP">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Calcular</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<a href="#" class="btn btn-primary" role="button">COMPRAR</a>
				</div>
			</div>
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