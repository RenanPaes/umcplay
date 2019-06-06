<?php

	require_once('../uteis/conexaoDB.php');

	$id_user = $_GET['id'];

	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();

	//instrução para excluir
	$sql = " DELETE FROM usuario WHERE id_user = '$id_user'";

	//executar a query
	if(mysqli_query($link, $sql)){
		header('Location: GerenciarUser.php?excluido=1');
	}else{
		echo 'WARNING: ERRO AO DELETAR USUÁRIO!';
	};
?>