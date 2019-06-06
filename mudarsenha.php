<?php


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>UMC PLAY - Cadastro</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!--Jquery-->
	<script type="text/javascript" src="js/jquery.min.js"></script>

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
    $(document).ready(function(){
      //verificar se os campos de user e senha foram preenchidos
      var campo_vazio = false;

      $('#btn_cadastrar').click(function(){
        if($('#email').val() == ''){
          $('#email').css({'border-color': '#A94442'});
          campo_vazio = true;
        }else{
          $('#email').css({'border-color': '#CCC'});
        }
        if(campo_vazio) return false;
      });
    });
  </script>

</head>
<body style="margin: 0px;">
	<div class="container-cadastro">
		<section id="home-cadastro">
			<div class="row">
				<div class="col-sm-12">
					<div class="box-cadastro">
						<br><h1 class="text_color">UMC PLAY</h1>
						<h2 class="corfontecad">Esqueceu sua senha?</h2>

						<!--PHP-->
						<?php
              			//verifica o parametro de erro com if ternario
						$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
						if ($erro == 1) {
							echo '<div class="alert alert-danger" role="alert">E-mail não cadastrado, <a href="cadastro.php">cadastre-se aqui</a></div>';
						}
						?>

						<!-----FORM1------>
						<form method="post" action="crud_one/mudarsenha.php" id="formCadastro">
							<div class="form-row">
								<div class="form-group col-md-12">
									<label for="inputprimeironome" class="corfontecad">Email*</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="email">
								</div>               
								<div class="form-group">
									<button type="submit" class="btn btn-primary" id="btn_cadastrar">Continuar</button>
								</div>
							</div>
						</form><!-----END_FORM1------>';

						<br/><br/><a href="login.php"class="linkVoltar"><< Voltar ao Login</a>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>