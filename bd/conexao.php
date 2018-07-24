<?php 
	$conexao = mysqli_connect(
		"localhost",
		"root",
		"",
		"AMAZING_ELETROS"
	);

	if (!$conexao) {
		echo "Falha na conexão" . mysql_error();
	}
?>