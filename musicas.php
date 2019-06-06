<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>UMC Play - PlayList</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!--Jquery-->
	<script type="text/javascript" src="../js/jquery.min.js"></script>

	<!-- Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
	<!-- Squad theme CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<!--Inclusão do meu estilo CSS-->
	<link href="css/meuestilo.css" rel="stylesheet">

	<!--Fiveicon-->
	<link rel="shortcut icon" href="https://ava.umc.br/moodle/theme/image.php/umc_education/theme/1552055651/favicon" />

	<script type="text/javascript">
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
	</script>

</head>
<body class="bodyPlaylist">
	<h1 class="music">UMC PLAY</h1>
	<h3 class="subtitlemusic">PLAYLIST</h3>
	<div class="music"><a href="home.php" class="music"><< Voltar ao Menu Principal</a></div>
	<?php
	//tera acesso as variaveis de sessão
	session_start();

	require_once('uteis/conexaoDB.php');


	//script de consulta
	$sql = "SELECT * FROM musicas";
	//instancia o objeto para conexao
	$conexao = new conexaoDB();
	//recupera o link da funcao
	$link = $conexao->conecta_db();
	//realiza a consulta
	$resultado_id = mysqli_query($link, $sql);

	//verifica se a consulta no bd deu certo
	if($resultado_id){
	//variavel para armazenar a consulta em um array
		$dados_musica = array();

		//Retorna o resource da consulta em uma estrutura de array
		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			$dados_musica[] = $linha;
		}
	}else{
		//caso de um erro na consulta
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';

	}
	if ($_SESSION['nome'] == 'Administrador') {
		echo '<br/><div class="btn-music"><button type="button" class="btn btn-warning"><a href="cadastromusic.php">Incluir Músicas na Playlist</a></button></div>';
	}
	?>
	<!--Montar a tabela-->
	<div class="corMusic">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Artista</th>
					<th scope="col">Gênero</th>
					<th scope="col">Ouvir</th>
					<?php if ($_SESSION['nome'] == 'Administrador') {
						echo'<th scope="col">Adm</th>';}
					?>
				</tr>
			</thead>
			<tbody>
				<!--Listar a tabela-->
				<?php foreach ($dados_musica as $musica) { ?>

					<tr>
						<th scope="col"><? echo $musica['nome']; ?></th>
						<th scope="col"><? echo $musica['artista']; ?></th>
						<th scope="col"><? echo $musica['genero']; ?></th>
						<th scope="col">
							<a href="site_construcao.html" class="editar"><img src="img/my_img/playbutton.png" height="25px" width="25px"></a>
						</th>
						<th scope="col">
							<?php if ($_SESSION['nome'] == 'Administrador') {
								echo '<a href="crud_two/excluir.php?id='.$musica['id_user']. '"class="excluir">Excluir</a>';
							}?>
						</th>
					</tr>

				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>