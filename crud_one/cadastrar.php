<?php

	require_once('../uteis/conexaoDB.php');

	//Super Global POST
	$nome         = $_POST['primeironome'];
	$sobrenome    = $_POST['sobrenome'];
	$email        = $_POST['email'];
	$confirmEmail = $_POST['confirmEmail'];
	$senha        = md5($_POST['senha']);
	$confirmSenha = $_POST['confirmSenha'];
	$cep          = $_POST['cep'];
	$endereco     = $_POST['endereco'];
	$numero       = $_POST['numero'];
	$cidade       = $_POST['cidade'];
	$bairro       = $_POST['bairro'];
	$estado       = $_POST['estado'];
	
	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();

	//verificar se o e-mail já esta cadastrado
	$sqlConsulta = "SELECT * FROM usuario WHERE email = '$email'";

	if($resultado_id = mysqli_query($link, $sqlConsulta)){
		
		$consulta_user = mysqli_fetch_array($resultado_id);

		if(isset($consulta_user['email'])){
			header('Location: ../cadastro.php?cadastrado=1');
		}

	}else{
		echo 'Erro ao tentar validar usuário';
	}

	//query de insert
	$sql = "INSERT INTO usuario(nome, sobrenome, email, senha, cep, endereco, numero, cidade, bairro, estado) VALUES('$nome', '$sobrenome', '$email', '$senha', '$cep', '$endereco', '$numero', '$cidade', '$bairro', '$estado')";

	//executar a query
	if(mysqli_query($link, $sql)){
		header('Location: ../login.php?cadastrado=1');
	}else{
		echo 'WARNING: ERRO AO REGISTRAR USUÁRIO!';
	};
?>