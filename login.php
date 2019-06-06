<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>UMC PLAY - Login</title>

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

  <!--Script de validação do login-->
  <script type="text/javascript">
    $(document).ready(function(){
      //verificar se os campos de user e senha foram preenchidos
      var campo_vazio = false;

      $('#btn_login').click(function(){
        if($('#login-email').val() == ''){
          $('#login-email').css({'border-color': '#A94442'});
          campo_vazio = true;
        }else{
          $('#login-email').css({'border-color': '#CCC'});
        }
        if($('#login-senha').val() == ''){
          $('#login-senha').css({'border-color': '#A94442'});
          campo_vazio = true;
        }else{
          $('#login-senha').css({'border-color': '#CCC'});
        }
        if(campo_vazio) return false;
      });
    });
  </script>

</head>
<body style="margin: 0px;">
	<div class="container-login">
		<section id="home-login">

      <!--PHP-->
      <?php
              //verifica o parametro de erro com if ternario
              $erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
              if ($erro == 1) {
                echo '<div class="alert alert-danger" role="alert">Usuário e/ou senha incorretos!</div>';
              }
              $cadastrado = isset($_GET['cadastrado']) ? $_GET['cadastrado'] : 0;
              if ($cadastrado == 1) {
                echo '<div class="alert alert-success" role="alert">Cadastrado com sucesso! Efetue login.</div>';
              }
              $atualizado = isset($_GET['update']) ? $_GET['update'] : 0;
              if ($atualizado == 1) {
                echo '<div class="alert alert-success" role="alert">Senha Alterada com Sucesso! Efetue login.</div>';
              }
      ?>
      
			<div class="row">
				<div class="col-sm-12">
					<div class="box-login">
            <!-----FORM------>
						<form method="post" action="crud_one/logar.php">
  							<div class="form-group">
  								<img src="img/my_img/umcplaylogo.png" height="80" width="230">
  								<!--<h2 style="color: #CD950C; font-weight: bold;">UMC PLAY</h2>-->
  								<br><h3 style="color: #CD950C;">UMC PLAY</h3>
    							<input type="email" class="form-control input-login" name="login_email" id="login-email" aria-describedby="emailHelp" placeholder="Seu email">
  							</div>
  							<div class="form-group">
    							<input type="password" class="form-control input-login" name="login_senha" id="login-senha" placeholder="Senha">
  							</div>
  							<div class="form-group form-check">
    							<input type="checkbox" class="form-check-input" id="cbLembrar">
    							<label class="form-check-label" for="exampleCheck1">Lembrar identificação de usuário</label>
  							</div>
  							<button type="submit" class="btn btn-primary" id="btn_login">Acessar</button><br><br>
  							<a href="mudarsenha.php">Esqueci minha Senha</a>
                <br/><br/><a href="index.php"class="linkVoltar"><< Voltar ao Menu Principal</a>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>