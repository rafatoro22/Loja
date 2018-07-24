		<form class="form-horizontal" action="insertDate/cadastrarProdutos.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="codProduto" class="col-sm-2 control-label">CODIGO PRODUTO</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="codProduto" id="codProduto" placeholder="CODIGO PRODUTO">
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