<?php
require_once('../uteis/conexaoDB.php');

$senha = md5($_POST['senha']);
$email = $_POST['email'];

//instancia o objeto para conexao
$conexao = new conexaoDB();
//recupera o link da funcao
$link = $conexao->conecta_db();

$sql = " UPDATE usuario SET senha = '$senha' WHERE email = '$email' ";

//executar a query
if(mysqli_query($link, $sql)){
	header('Location: ../login.php?update=1');
}else{
	echo 'WARNING: ERRO AO MUDAR SENHA DE USUÁRIO!';
};

?>