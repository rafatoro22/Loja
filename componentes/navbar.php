<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="imgs/imgsEstilos/brandLogo.png" width="150px"></a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Procura algo em especial?">
				</div>
				<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
			</form>
			<ul class="nav navbar-nav navbar-right">
					<?php if (!isset($_SESSION["logado"]) || !$_SESSION["logado"]){ ?>
						<li><a href="cadastro_login.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Entre ou Cadastre-se</a></li>
					<?php } else { ?>				
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-user" aria-hidden="true">
									<?php echo $_SESSION["dados_cliente"]["Nome"] ?>
								</span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo "usuario.php?id=" . $_SESSION['dados_cliente']['CodCliente']  ?>">Meus Dados</a></li>
								<li><a href="biblioteca/logout.php">Logout</a></li>
							</ul>
						</li>
					<?php } ?>
				<li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge">0</span></a></li>
			</ul>
		</div>	
	</div>
</nav>