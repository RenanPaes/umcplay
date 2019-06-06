<?php
	session_start();

	require_once('../uteis/conexaoDB.php');

	$nome    = $_POST['nome'];
	$artista = $_POST['artista'];
	$genero  = $_POST['genero'];
	$url     = $_POST['url'];

	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();

	//query de insert
	$sql = "INSERT INTO musicas(nome, artista, genero, url) 
		VALUES('$nome', '$artista', '$genero', '$url')";

	//executar a query
	if(mysqli_query($link, $sql)){
		header('Location: ../musicas.php');
	}else{
		echo 'WARNING: ERRO AO REGISTRAR USUÁRIO!';
	};
?>