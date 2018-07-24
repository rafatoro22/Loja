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
		<?php 
			$comando 	= "SELECT * FROM tblproduto";
			$consulta 	= mysqli_query($conexao, $comando);
		?>
		<table class="table">
			<tr>
				<th>CodProduto</th>
				<th>CodCategoria</th>
				<th>NomeProduto</th>
				<th>Imagem</th>
				<th>Preco</th>
				<th>DescricaoProduto</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
		<?php while ($produto = mysqli_fetch_assoc($consulta)) { ?>
			<tr>
				<td><?php echo $produto["CodProduto"]; ?></td>
				<td><?php echo $produto["CodCategoria"]; ?></td>
				<td><?php echo $produto["NomeProduto"]; ?></td>
				<td><?php echo $produto["Imagem"]; ?></td>
				<td><?php echo $produto["Preco"]; ?></td>
				<td><?php echo $produto["DescricaoProduto"]; ?></td>
				<td><a href="alterar_dado_produto_formulario.php?produto=<?php echo $produto['CodProduto'] ?>">editar</a></td>
				<td><a href="delete/excluirProduto.php?produto=<?php echo $produto['CodProduto'] ?>">Excluir</a></td>
			</tr>
		<?php } ?>
		</table>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../_js/jquery.mask.js"></script>
</body>
</html>