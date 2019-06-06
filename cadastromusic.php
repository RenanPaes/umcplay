<?php
	session_start();
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

</head>
<body style="margin: 0px;">
  <div class="container-cadastro">
    <section id="home-cadastro">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-cadastro">
            <br><h1 class="text_color">UMC PLAY</h1>
            <h2 class="corfontecad">Cadastrar nova música na playlist</h2>
            <!-----FORM------>
            <form method="post" action="crud_two/cadastrar.php" id="formCadastro">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputprimeironome" class="corfontecad">Nome*</label>
                  <input type="text" class="form-control" id="inputprimeironome" name="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSobrenome" class="corfontecad">Artista*</label>
                  <input type="text" class="form-control" id="inputSobrenome" name="artista" placeholder="Artista">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSobrenome" class="corfontecad">Genêro*</label>
                  <input type="text" class="form-control" id="inputSobrenome" name="genero" placeholder="Genêro">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSobrenome" class="corfontecad">Url*</label>
                  <input type="text" class="form-control" id="inputSobrenome" name="url" placeholder="URL">
                </div>
                
              <div class="form-group">
                <button type="submit" class="btn btn-primary" id="btn_cadastrar">Cadastrar nova Música</button>
                <br/><br/><a href="musicas.php"class="linkVoltar"><< Voltar a Playlist</a>
              </form><!-----END_FORM------>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
  </html>