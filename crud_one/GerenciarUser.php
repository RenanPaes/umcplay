<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Gerencia Usuarios</title>

	<!-- Bootstrap Core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!--Jquery-->
	<script type="text/javascript" src="../js/jquery.min.js"></script>

	<!-- Fonts -->
	<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="../css/animate.css" rel="stylesheet" />
	<!-- Squad theme CSS -->
	<link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
	<!--Inclusão do meu estilo CSS-->
	<link href="../css/meuestilo.css" rel="stylesheet">

	<!--Fiveicon-->
	<link rel="shortcut icon" href="https://ava.umc.br/moodle/theme/image.php/umc_education/theme/1552055651/favicon" />

	<script type="text/javascript">
		$(document).ready(function(){
			//para desaparecer o alert automaticamente
			$(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
				$(".alert-success".slideUp(500));
			});

			//confirmar o delete
			$(".excluir").on('click', function(event){
				event.preventDefault();

				var link = $(this). attr('href');

				if(confirm("Deseja mesmo excluir este usuário?")){
					window.location.href=link;
				}else{
					return false;
				}
			});
		});

	</script>
</head>
<body class="bodyGerenciaADM">
	<h1 class="gerenciaADM">UMC PLAY</h1>
	<h3 class="gerenciaADM">Area do Administrador</h3>
	<div class="gerenciaADM"><a href="../home.php" class="linkVoltar"><< Voltar ao Menu Principal</a></div>
	<?php
	//tera acesso as variaveis de sessão
	session_start();

	require_once('../uteis/conexaoDB.php');


	//script de consulta
	$sql = "SELECT * FROM usuario";
	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();
	//realiza a consulta
	$resultado_id = mysqli_query($link, $sql);

	//verifica se a consulta no bd deu certo
	if($resultado_id){
	//variavel para armazenar a consulta em um array
		$dados_usuario = array();

		//Retorna o resource da consulta em uma estrutura de array
		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			$dados_usuario[] = $linha;
		}
	}else{
		//caso de um erro na consulta
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';

	}
	?>
	
	<!--Montar a tabela-->
	<div class="corGeren">
		<?php
		//verifica o parametro de erro com if ternario
		$excluido = isset($_GET['excluido']) ? $_GET['excluido'] : 0;
		if ($excluido == 1) {
			echo '<div class="alert alert-success" role="alert">Usuário Excluído com Sucesso!</div>';
		}

		$update = isset($_GET['update']) ? $_GET['update'] : 0;
		if ($update == 1) {
			echo '<div class="alert alert-success" role="alert">Mudanças no usuário realizadas com Sucesso!</div>';
		}

		?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Sobrenome</th>
					<th scope="col">Email</th>
					<th scope="col">Cep</th>
					<th scope="col">Endereço</th>
					<th scope="col">Número</th>
					<th scope="col">Cidade</th>
					<th scope="col">Bairro</th>
					<th scope="col">UF</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<!--Listar a tabela-->
				<?php foreach ($dados_usuario as $usuario) { ?>

					<tr>
						<th scope="col"><? echo $usuario['id_user']; ?></th>
						<th scope="col"><? echo $usuario['nome']; ?></th>
						<th scope="col"><? echo $usuario['sobrenome']; ?></th>
						<th scope="col"><? echo $usuario['email']; ?></th>
						<th scope="col"><? echo $usuario['cep']; ?></th>
						<th scope="col"><? echo $usuario['endereco']; ?></th>
						<th scope="col"><? echo $usuario['numero']; ?></th>
						<th scope="col"><? echo $usuario['cidade']; ?></th>
						<th scope="col"><? echo $usuario['bairro']; ?></th>
						<th scope="col"><? echo $usuario['estado']; ?></th>
						<th scope="col">
							<a href="<?php echo '../edicao.php?id='.$usuario['id_user'] ?>" class="editar">Editar / </a>
							<a href="<?php echo 'excluir.php?id='.$usuario['id_user'] ?>" class="excluir">Excluir</a>
						</th>
					</tr>

				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>