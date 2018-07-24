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
	<section class="container">
		<div class="row">
			<h1 class="text-center">DADOS</h1>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Email</th>
						<th>Pais</th>
						<th>Endereço</th>
						<th>Senha</th>
						<th>Editar</th>
						<th>Excluir</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $_SESSION["dados_cliente"]["Nome"]; ?></td>
						<td><?php echo $_SESSION["dados_cliente"]["Email"]; ?></td>
						<td><?php echo $_SESSION["dados_cliente"]["Pais"]; ?></td>
						<td><?php echo $_SESSION["dados_cliente"]["endereco"]; ?></td>
						<td><?php echo sha1($_SESSION["dados_cliente"]["Senha"]); ?></td>
						<td><a href="">Editar</a></td>
						<td><a href="">Excluir</a></td>
					</tr>
				</tbody>
			</table>
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