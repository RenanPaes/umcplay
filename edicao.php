<?php

	require_once('uteis/conexaoDB.php');

	$id_user = $_GET['id'];

	//Conexão para recuperar usuário para edição
  //instancia o objeto para conexao
  $conexao = new conexaoDB();
  //recupera o link da funcao
  $link = $conexao->conecta_db();

  //query que recupera os dados no banco
  $sql = "SELECT * FROM usuario WHERE id_user = '$id_user'";

  //realiza a consulta
  $resultado_id = mysqli_query($link, $sql);

  //verifica se a consulta no bd deu certo
  if($resultado_id){
    //Retorna o resource da consulta em uma estrutura de array
    $dados_usuario = mysqli_fetch_array($resultado_id);

    //Recupera os dados
    $nome = $dados_usuario['nome'];
    $sobrenome = $dados_usuario['sobrenome'];
    $email = $dados_usuario['email'];
    $senha = $dados_usuario['senha'];
    $cep = $dados_usuario['cep'];
    $endereco = $dados_usuario['endereco'];
    $numero = $dados_usuario['numero'];
    $cidade = $dados_usuario['cidade'];
    $bairro = $dados_usuario['bairro'];
    $estado = $dados_usuario['estado'];
  }else{
    //caso de um erro na consulta
    echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';

  }	

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

  <!--Script de validação do cadastro-->
  <script type="text/javascript">
    $(document).ready(function(){
    //verificar se os campos do form foram preenchidos
    var campo_vazio = false;

    $('#btn_editar').click(function(){
      if($('#inputprimeironome').val() == ''){
        $('#inputprimeironome').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputprimeironome').css({'border-color': '#CCC'});
      }
      /************/
      if($('#inputSobrenome').val() == ''){
        $('#inputSobrenome').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputSobrenome').css({'border-color': '#CCC'});
      }
      /************/
      if($('#inputEmail').val() == ''){
        $('#inputEmail').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputEmail').css({'border-color': '#CCC'});
      }
      /************/
      if($('#inputConfirmaEmail').val() == ''){
        $('#inputConfirmaEmail').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputConfirmaEmail').css({'border-color': '#CCC'});
      }
      /************/
      if($('#inputSenha').val() == ''){
        $('#inputSenha').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputSenha').css({'border-color': '#CCC'});
      }
      /************/
      if($('#inputConfirmaSenha').val() == ''){
        $('#inputConfirmaSenha').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputConfirmaSenha').css({'border-color': '#CCC'});
      }
      /*Verificação de confirmação
      if($('#inputSenha').val() != $('inputConfirmaSenha')){
        $('#inputSenha').css({'border-color': '#A94442'});
        $('#inputConfirmaSenha').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputSenha').css({'border-color': '#CCC'});
        $('#inputConfirmaSenha').css({'border-color': '#CCC'});
      }
      
      if($('#inputEmail').val() != $('inputConfirmaEmail')){
        $('#inputEmail').css({'border-color': '#A94442'});
        $('#inputConfirmaEmail').css({'border-color': '#A94442'});
        campo_vazio = true;
      }else{
        $('#inputEmail').css({'border-color': '#CCC'});
        $('#inputConfirmaEmail').css({'border-color': '#CCC'});
      }*/

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
            <h2 class="corfontecad">EDITAR USUÁRIO</h2>
            <!-----FORM------>
            <form method="post" action="<?php echo 'crud_one/editar.php?id='.$id_user ?>" id="formCadastro">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputprimeironome" class="corfontecad">Nome*</label>
                  <input type="text" class="form-control" id="inputprimeironome" name="primeironome" value="<?php echo $nome ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSobrenome" class="corfontecad">Sobrenome*</label>
                  <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" value="<?php echo $sobrenome ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail" class="corfontecad">E-mail*</label>
                  <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $email ?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputConfirmaEmai" class="corfontecad">Confirma E-mail*</label>
                  <input type="email" class="form-control" id="inputConfirmaEmail" name="confirmEmail" placeholder="Confirma E-mail">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputSenha" class="corfontecad">Nova Senha*</label>
                  <input type="password" class="form-control" id="inputSenha" name="senha" placeholder="Nova Senha">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputConfirmaSenha" class="corfontecad">Confirma Nova Senha*</label>
                  <input type="password" class="form-control" id="inputConfirmaSenha" name="confirmSenha" placeholder="Confirma Nova Senha">
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="inputEndereco" class="corfontecad">CEP</label>
                <input type="text" class="form-control" id="inputCEP" name="cep" value="<?php echo $cep ?>">
              </div>
              <div class="form-group col-md-3">
                <label for="inputEndereco" class="corfontecad">Endereço</label>
                <input type="text" class="form-control" id="inputEndereco" name="endereco" value="<?php echo $endereco ?>">
              </div>
              <div class="form-group col-md-3">
                <label for="inputNumero" class="corfontecad">Número</label>
                <input type="text" class="form-control" id="inputNumero" name="numero" value="<?php echo $numero ?>">
              </div>
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity" class="corfontecad">Cidade</label>
                  <input type="text" class="form-control" id="inputCity" name="cidade" value="<?php echo $cidade ?>">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputBairro" class="corfontecad">Bairro</label>
                  <input type="text" class="form-control" id="inputBairro" name="bairro" value="<?php echo $bairro ?>">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputState" class="corfontecad">Estado</label>
                  <select id="inputState" name="estado" class="form-control">
                    <option selected><?php echo $estado ?></option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="PR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" id="btn_editar">Salvar Mudanças</button>
                <br/><br/><a href="crud_one/GerenciarUser.php"class="linkVoltar"><< Voltar ao Gerenciador</a>
              </form><!-----END_FORM------>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
  </html>