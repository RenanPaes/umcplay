<?php
require_once('../uteis/conexaoDB.php');

$email = $_POST['email'];

//instancia o objeto para conexao
$conexao = new conexaoDB();
//recupera o link da funcao
$link = $conexao->conecta_db();

//verificar se o e-mail já esta cadastrado
$sqlConsulta = "SELECT * FROM usuario WHERE email = '$email'";

if($resultado_id = mysqli_query($link, $sqlConsulta)){

	$consulta_user = mysqli_fetch_array($resultado_id);

	if(isset($consulta_user['email'])){
		header('Location: ../mudarsenha2.php?email='.$consulta_user['email']);
	}else{
		header('Location: ../mudarsenha.php?erro=1');
	}

}else{
	echo 'Erro ao tentar trocar senha';
}


?>