<?php 
	if(!empty($_POST['email_cadastro'])){
		//atribuição
		$errors 		= array();
		$email			= strip_tags($_POST['email_cadastro']);
		$nome 			= strip_tags($_POST['nome_cadastro']);
		$senha 			= strip_tags($_POST['senha_cadastro']);
		$confirmaSenha	= strip_tags($_POST['confirmar_senha_cadastro']);
		$data 			= strip_tags($_POST["data_nascimento"]);
		$sexo 			= !empty($_POST['sexo']) ? $_POST['sexo'] : "";
		$data 			= explode("/",$data); 
		$CPF_cadastro   = strip_tags($_POST['CPF_cadastro']);
		$Pais 			= strip_tags($_POST["pais"]);
		$endereco 		= strip_tags($_POST["endereco"]);
		$data_total       = "";

			//nome
		if (strlen(trim($nome)) == 0) {
			$errors[] = "Insira um nome";
		}elseif(!preg_match("/^[a-zA-ZãÃáÁàÀêÊéÉèÈíÍìÌôÔõÕóÓòÒúÚùÙûÛçÇºª' ']+$/", $nome)) {
			$errors[] = "Insira um nome valido!!!";
		}

			//CPF

		if (!preg_match("/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/", $CPF_cadastro) || strlen(trim($CPF_cadastro)) == 0) {
			$errors[] = "CPF não valido.";
		}

			//E-mail
		$emailValido 	= filter_input(INPUT_POST, 'email_cadastro', FILTER_VALIDATE_EMAIL);

		if (!$emailValido || strlen(trim($email)) == 0) {
			$errors[] = "E-mail não valido.";
		}

			//senha
		if(strlen(trim($senha)) == 0){
			$errors[] = "Insira uma senha"; 
		} else if(strlen($senha) > 16){
			$errors[] = "Insira uma senha menor."; 
		} else if(strlen($senha) < 8){
			$errors[] = "Insira uma senha maior."; 
		} 

		    //confirmar senha
		if($confirmaSenha == ""){
			$errors[] = "Insira a confirmação da senha"; 
		} else if(!($senha == $confirmaSenha)){
			$errors[] = "Confirme a senha";
		}

		 //Nascimento
		if (count($data) == 3) {
			$dia = $data[0]; 
			$mes = $data[1];
			$ano = $data[2];

			if (strlen(trim($ano)) == 0) {
				$errors[] = "Ano não inserido.";
			} elseif ($ano >=2017 || $ano < 1917){
				$errors[] = "Ano invalido.";
			} else{
				$data_total .= $ano."-"; 
			}
			
			if (strlen(trim($mes)) == 0) {
				$errors[] = "Mês não inserido.";
			} elseif (($mes >=12 || $mes < 1)){
				$errors[] = "Mês invalido.";
			} else{
				$data_total .= $mes."-"; 
			}

			if (strlen(trim($dia)) == 0) {
				$errors[] = "Dia não inserido.";
			} elseif (($dia >=31 || $dia <=1)||($dia >= 28 && $mes == "fevereiro")){
				$errors[] = "Dia invalido.";
			} else{
				$data_total .= $dia; 
			}

			
		}
			//endereco
		if (strlen(trim($endereco)) == 0) {
			$errors[] = "Insira um endereco";
		}

			//Sexo
		if (strlen(trim($sexo)) == 0) {
			$errors[] = "Sexo não selecionado.";
		}
			//banco de dados
		if (empty($errors)) {
            require_once "bd/conexao.php";
            $insert = "INSERT INTO tblUsuario(Nome,Email,Senha,ConfirmarSenha,CPF,Pais,endereco,dtNasc) ";
            $insert .= "VALUES('$nome', '$email', '$senha', '$confirmaSenha', '$CPF_cadastro', '$Pais', '$endereco', '$data_total')";

            $consulta = mysqli_query($conexao,$insert);
            if (!$consulta) {
                echo "Não deu certo " . mysqli_error($conexao);
                die();
            }else{
            	$_SESSION['logado'] = true;

            	//pegando os dados do usuario
            	$select 	= "SELECT * FROM tblUsuario";
            	$consulta 	=  mysqli_query($conexao,$select);
            	$_SESSION["dados_cliente"] = mysqli_fetch_assoc($consulta);
            	header("Location: index.php");
            }
        }
        
	}
?>
