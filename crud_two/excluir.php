<?php
	session_start();

	require_once('../uteis/conexaoDB.php');

	$id_music = $_GET['id'];

	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();

	//instrução para excluir
	$sql = " DELETE FROM musicas WHERE id_user = '$id_music'";

	//executar a query
	if(mysqli_query($link, $sql)){
		header('Location: ../musicas.php');
	}else{
		echo 'WARNING: ERRO AO DELETAR USUÁRIO!';
	};

?>