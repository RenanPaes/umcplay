<?php
	//tera acesso as variaveis de sessão
	session_start();

	require_once('../uteis/conexaoDB.php');

	$email = $_POST['login_email'];
	$senha = md5($_POST['login_senha']);

	//query que recupera os dados no banco
	$sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();

	//realiza a consulta
	$resultado_id = mysqli_query($link, $sql);

	//verifica se a consulta no bd deu certo
	if($resultado_id){
		//Retorna o resource da consulta em uma estrutura de array
		$dados_usuario = mysqli_fetch_array($resultado_id);

		//realiza a autenticação do usuário
		if(isset($dados_usuario['id_user'])){
			//global session recebendo o retorno da consulta no bd
			$_SESSION['nome'] = $dados_usuario['nome'];
			$_SESSION['email'] = $dados_usuario['email'];

			header('Location: ../home.php');
		}else{
			header('Location: ../login.php?erro=1');
		}
	}else{
		//caso de um erro na consulta
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';

	}
?>