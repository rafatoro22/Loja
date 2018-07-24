<?php 
	require("biblioteca/validacao_login.php");
	require("biblioteca/validacao_cadastrando.php");
	require("biblioteca/funcoes.php");
	require("bd/conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amazing Eletros</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
<body>
	<header>
		<?php require("componentes/navbar.php") ?>
	</header>
	
	<section class="container">
		<h1 class="text-center title-section">Crie seu cadastro ou acesse sua conta!</h1>	
		<div class="container form_cadastro_longin">
			<div class="row">
				<!-- login -->
				<div class="col-lg-5 col-md-5 col-sm-12 col-md-12">
					<?php require_once("componentes/formulario_login.php") ?>
				</div>
				<?php 
						$mensagem_login = "Cadastrado com sucesso!!!";
						if(!empty($_POST['email_login'])){
							ErrosAlert($error_login, $mensagem_login); 
						}
				?>
				<!-- cadastramento -->
				<div class="section-right col-lg-7 col-md-7 col-sm-12 col-md-12">
					<?php require_once("componentes/formulario_cadastro.php") ?>
					<!-- Alertando o usuário dos erros -->
					<?php 
						$mensagem_cadastro = "Cadastrado com sucesso!!!";
						if(!empty($_POST['email_cadastro'])){
							ErrosAlert($errors, $mensagem_cadastro); 
						}
					?>
				</div>
			</div>
		</div>
	</section>
	<footer class="row container-fluid footer-main">
		<?php require("componentes/footer.php") ?>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="_js/main.js"></script>
	<script src="_js/jquery.mask.js"></script>
</body>
</html>