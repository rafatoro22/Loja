	<h2 class="text-center title-section">Já sou cliente</h2>

	<form class="form-horizontal" action="cadastro_login.php" method="post">

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
				<input name="email_login" type="email" id="email" class="form-control" placeholder="Insira aqui seu email" aria-describedby="basic-addon2">
			</div>
		</div>

		<div class="form-group">
			<label for="senha" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-10">
				<input name="senha_login" type="password" class="form-control" placeholder="Insira aqui a sua senha" aria-describedby="basic-addon2">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input class="btn btn-primary btn-submit-form" type="submit">
			</div>
		</div>
	</form>