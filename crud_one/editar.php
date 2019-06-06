<?php  
	require_once('../uteis/conexaoDB.php');

	$id_user = $_GET['id'];

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

	//instrução para excluir
	$sql = " UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha', cep = '$cep', endereco = '$endereco', numero = '$numero', cidade = '$cidade', bairro = '$bairro', estado = '$estado' WHERE id_user = '$id_user' ";

	//executar a query
	if(mysqli_query($link, $sql)){
		header('Location: GerenciarUser.php?update=1');
	}else{
		echo 'WARNING: ERRO AO SALVAR MUDANÇAS DE USUÁRIO!';
	};


?>