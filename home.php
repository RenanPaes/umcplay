<?php
	session_start();

	if(!isset($_SESSION['nome'])){
		header('Location: login.php?erro=1');
	}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UMC PLAY</title>

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

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">
          <h1>UMC PLAY</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro">Inicio</a></li>
          <li><a href="#playlist">Playlist</a></li>
          <li><a href="#service">História da Música</a></li>
          <!--Modificação Toogle-->
          <li>
            <a class="nav" id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Bem-Vindo, <?= $_SESSION['nome'] ?>!</a>
            <ul class="dropdown-menu navbar-inverse" aria-labelledby="entrar">
              <?php
                if($_SESSION['nome'] == 'Administrador'){
                  echo '<li><a href="crud_one/GerenciarUser.php">Gerenciar Usuários</a></li>';
                }
              ?>
              <li><a href="uteis/sair.php">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section id="intro" class="intro">
    <div class="slogan">
      <h2>BEM VINDO À <span class="text_color">UMC PLAY</span> </h2>
      <h4>AQUI VOCÊ OUVE A MÚSICA DO SEU ESTILO</h4>
    </div>
    <div class="page-scroll">
      <a href="#rodape" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: Playlist -->
  <section id="playlist" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2 class="cortitulo">Playlist Por Categoria</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.2s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5 class="cortitulo">Playlist Acústico</h5>
                <a href="musicas.php"class="subtitle">Ouça Agora...</a><br><br>
                <div class="avatar"><img src="img/my_img/gifviolao.gif" alt="" class="img-responsive img-circle" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.5s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5 class="cortitulo">Playlist Rock</h5>
                <a href="site_construcao.html"class="subtitle">Ouça Agora...</a><br><br>
                <div class="avatar"><img src="img/my_img/gifguitarra.gif" alt="" class="img-responsive img-circle" /></div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="0.8s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5 class="cortitulo">Playlist Clássico</h5>
                <a href="site_construcao.html"class="subtitle">Ouça Agora...</a><br><br>
                <div class="avatar"><img src="img/my_img/gifpiano.gif" alt="" class="img-responsive img-circle" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="wow bounceInUp" data-wow-delay="1s">
            <div class="team boxed-grey">
              <div class="inner">
                <h5 class="cortitulo">Playlist Samba</h5>
                <a href="site_construcao.html"class="subtitle">Ouça Agora...</a><br><br>
                <div class="avatar"><img src="img/my_img/gifsamba.gif" alt="" class="img-responsive img-circle" /></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Section: Playlist -->

  <!-- Section: História da Música -->
  <section id="service" class="home-section text-center bg-gray">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2 class="cortitulo">História da Música</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div id="box-toggle" style="text-align: justify;">
          <p>Podemos dizer que a “Música” é a arte de combinar os sons e o silêncio. Se pararmos para perceber os sons que estão a nossa volta, concluiremos que a música é parte integrante da nossa vida, ela é nossa criação quando cantamos, batucamos ou ligamos um rádio ou TV. Hoje a música se faz presente em todas as mídias, pois ela é uma linguagem de comunicação universal, é utilizada como forma de “sensibilizar” o outro para uma causa de terceiro, porém esta causa vai variar de acordo com a intenção de quem a pretende, seja ela para vender um produto, ajudar o próximo, para fins religiosos, para protestar, intensificar noticiário, etc.</p>
          <p>A música existe e sempre existiu como produção cultural, pois de acordo com estudos científicos, desde que o ser humano começou a se organizar em tribos primitivas pela África, a música era parte integrante do cotidiano dessas pessoas. Acredita-se que a música tenha surgido há 50.000 anos, onde as primeiras manifestações tenham sido feitas no continente africano, expandindo-se pelo mundo com o dispersar da raça humana pelo planeta. A música, ao ser produzida e/ou reproduzida, é influenciada diretamente pela organização sociocultural e econômica local, contando ainda com as características climáticas e o acesso tecnológico que envolvem toda a relação com a linguagem musical. A música possui a capacidade estética de traduzir os sentimentos, atitudes e valores culturais de um povo ou nação. A música é uma linguagem local e global.</p>
        </div>

        <div id="tgl" style="display: none; text-align: justify;">
          <p>Na pré-história o ser humano já produzia uma forma de música que lhe era essencial, pois sua produção cultural constituída de utensílios para serem utilizados no dia-a-dia, não lhe bastava, era na arte que o ser humano encontrava campo fértil para projetar seus desejos, medos, e outras sensações que fugiam a razão. Diferentes fontes arqueológicas, em pinturas, gravuras e esculturas, apresentam imagens de músicos, instrumentos e dançarinos em ação, no entanto não é conhecida a forma como esses instrumentos musicais eram produzidos.</p>
          <p>Das grandes civilizações do mundo antigo, foram encontrados vestígios da existência de instrumentos musicais em diferentes formas de documentos. Os sumérios, que tiveram o auge de sua cultura na bacia mesopotâmia a milhares de anos antes de Cristo, utilizavam em sua liturgia, hinos e cantos salmodiados, influenciando as culturas babilônica, caldéia, e judaica, que mais tarde se instalaram naquela região.</p>
          <p>A cultura egípcia, por volta de 4.000 anos a.C., alcançou um nível elevado de expressão musical, pois era um território que preservava a agricultura e este costume levava às cerimônias religiosas, onde as pessoas batiam espécies de discos e paus uns contra os outros, utilizavam harpas, percussão, diferentes formas de flautas e também cantavam. Os sacerdotes treinavam os coros para os rituais sagrados nos grandes templos. Era costume militar a utilização de trompetes e tambores nas solenidades oficiais.</p>
          <p>Na Ásia, a 3.000 a.C., a música se desenvolvia com expressividade nas culturas chinesa e indiana. Os chineses acreditavam no poder mágico da música, como um espelho fiel da ordem universal. A “cítara” era o instrumento mais utilizado pelos músicos chineses, este era formado por um conjunto de flautas e percussão. A música chinesa utilizava uma escala pentatônica (cinco sons). Já na Índia, por volta de 800 anos a.C., a música era considerada extremamente vital. Possuíam uma música sistematizada em tons e semitons, e não utilizavam notas musicais, cujo sistema denominava-se “ragas”, que permitiam o músico utilizar uma nota e exigia que omitisse outra.</p>
          <p>A teoria musical só começou a ser elaborada no século V a.C., na Antiguidade Clássica. São poucas as peças musicais que ainda existem deste período, e a maioria são gregas. Na Grécia a representação musical era feita com letras do alfabeto, formando “tetracordes” (quatro sons) com essas letras. Foram os filósofos gregos que criaram a teoria mais elaborada para a linguagem musical na Antiguidade. Pitágoras acreditava que a música e a matemática formavam a chave para os segredos do mundo, que o universo cantava, justificando a importância da música na dança, na tragédia e nos cultos gregos.</p>
          É de conhecimento histórico que os romanos se apropriaram da maioria das teorias e técnicas artísticas gregas e no âmbito da música não é diferente, mas nos deixaram de herança um instrumento denominado “trompete reto”, que eles chamavam de “tuba”. O uso do “hydraulis”, o primeiro órgão cujos tubos eram pressionado pela água, era freqüente.

          <p>Hoje é possível dividir a história da música em períodos específicos, principalmente quando pretendemos abordar a história da música ocidental, porém é preciso ficar claro que este processo de fragmentação da história não é tão simples, pois a passagem de um período para o outro é gradual, lento e com sobreposição. Por volta do século V, a igreja católica começava a dominar a Europa, investindo nas “Cruzadas Santas” e outras providências, que mais tarde veio denominar de “Idade das Trevas” (primeiro período da Idade Média) esse seu período de poder.</p>

          <p>A Igreja, durante a Idade Média, ditou as regras culturais, sociais e políticas de toda a Europa, com isto interferindo na produção musical daquele momento. A música “monofônica” (que possui uma única linha melódica), sacra ou profana, é a mais antiga que conhecemos, é denominada de “Cantochão”, porém a música utilizada nas cerimônias católicas era o “canto gregoriano”. O canto gregoriano foi criado antes do nascimento de Jesus Cristo, pois ele era cantado nas sinagogas e países do Oriente Médio. Por volta do século VI a Igreja Cristã fez do canto gregoriano elemento essencial para o culto. O nome é uma homenagem ao Papa Gregório I (540-604), que fez uma coleção de peças cantadas e as publicou em dois livros: Antiphonarium e as Graduale Romanum. No século IX começa a se desenvolver o “Organum”, que são as primeiras músicas polifônicas com duas ou mais linhas melódicas. Mais tarde, no século XII, um grupo de compositores da Escola de Notre Dame reelaboraram novas partituras de Organum, tendo chegado até nós os nomes de dois compositores: Léonin e Pérotin. He also began the “Schola Cantorum” that gave great development to the Gregorian chant.</p>

          <p>A música renascentista data do século XIV, período em que os artistas pretendiam compor uma música mais universal, buscando se distanciarem das práticas da igreja. Havia um encantamento pela sonoridade polifônica, pela possibilidade de variação melódica. A polifonia valorizava a técnica que era desenvolvida e aperfeiçoada, característica do Renascimento. Neste período, surgem as seguintes músicas vocais profanas: a “frótola”, o “Lied” alemão, o Villancico”, e o “Madrigal” italiano. O “Madrigal” é uma forma de composição que possui uma música para cada frase do texto, usando o contraponto e a imitação.</p>

          <p>Os compositores escreviam madrigais em sua própria língua, em vez de usar o latim. O madrigal é para ser cantado por duas, três ou quatro pessoas. Um dos maiores compositores de madrigal elisabetano foi Thomas Weelkes.</p>

          <p>Após a música renascentista, no século XVII, surgiu a “Música Barroca” e teve seu esplendor por todo o século XVIII. Era uma música de conteúdo dramático e muito elaborado. Neste período estava surgindo a ópera musical. Na França os principais compositores de ópera eram Lully, que trabalhava para Luis XIV, e Rameau. Na Itália, o compositor “Antonio Vivaldi” chega ao auge com suas obras barrocas, e na Inglaterra, “Haëndel” compõe vários gêneros de música, se dedicando ainda aos “oratórios” com brilhantismo. Na Alemanha, “Johann Sebastian Bach” torna-se o maior representante da música barroca.</p>

          <p>A “Música Clássica” é o estilo posterior ao Barroco. O termo “clássico” deriva do latim “classicus”, que significa cidadão da mais alta classe. Este período da música é marcado pelas composições de Haydn, Mozart e Beethoven (em suas composições iniciais). Neste momento surgem diversas novidades, como a orquestra que toma forma e começa a ser valorizada. As composições para instrumentos, pela primeira vez na história da música, passam a ser mais importantes que as compostas para canto, surgindo a “música para piano”. A “Sonata”, que vem do verbo sonare (soar) é uma obra em diversos movimentos para um ou dois instrumentos. A “Sinfonia” significa soar em conjunto, uma espécie de sonata para orquestra. A sinfonia clássica é dividida em movimentos. Os músicos que aperfeiçoaram e enriqueceram a sinfonia clássica foram Haydn e Mozart. O “Concerto” é outra forma de composição surgida no período clássico, ele apresenta uma espécie de luta entre o solo instrumental e a orquestra. No período Clássico da música, os maiores compositores de Óperas foram Gluck e Mozart.</p>

          <p>Enquanto os compositores clássicos buscavam um equilíbrio entre a estrutura formal e a expressividade, os compositores do “Romantismo” pretendem maior liberdade da estrutura da forma e de concepção musical, valorizando a intensidade e o vigor da emoção, revelando os pensamentos e sentimentos mais profundos. É neste período que a emoção humana é demonstrada de forma extrema. O Romantismo inicia pela figura de Beethoven e passa por compositores como Chopin, Schumann, Wagner, Verdi, Tchaikovsky, R. Strauss, entre outros. O romantismo rendeu frutos na música, como o “Nacionalismo” musical, estilo pelo qual os compositores buscavam expressar de diversas maneiras os sentimentos de seu povo, estudando a cultura popular de seu país e aproveitando música folclórica em suas composições. A valsa do estilo vienense de Johann Strauss é um típico exemplo da música nacionalista.</p>

          <p>O século XX é marcado por uma série de novas tendências e técnicas musicais, no entanto torna-se imprudente rotular criações que ainda encontra-se em curso. Porém algumas tendências e técnicas importantes já se estabeleceram no decorrer do século XX. São elas: Impressionismo, Nacionalismo do século XX, Influências jazzísticas, Politonalidade, Atonalidade, Expressionismo, Pontilhismo, Serialismo, Neoclassicismo, Microtonalidade, Música concreta, Música eletrônica, Serialismo total, e Música Aleatória. Isto sem contar na especificidade de cada cultura. Há também os músicos que criaram um estilo característico e pessoal, não se inserindo em classificações ou rótulos, restando-lhes apenas o adicional “tradicionalista”.</p>

          <p>Fontes
          BENNETT, Roy. Uma breve história da música.Rio de Janeiro: Zahar, 1986.
          COLL, César, TEBEROSKY, Ana. Aprendendo Arte. São Paulo: Ática, 2000.</p>
        </div>

        <a onclick='if(document.getElementById(&apos;tgl&apos;) .style.display==&apos;none&apos;) {document.getElementById(&apos;tgl&apos;) .style.display=&apos;&apos;}else{document.getElementById(&apos;tgl&apos;) .style.display=&apos;none&apos;}'><font style="color: red;">Mostrar/Ocultar</font></a>
      </div><!--fim-->
    </div>
  </section>
  <footer id="rodape">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
              <i class="fa fa-angle-double-up animated"></i>
            </a>
            </div>
          </div>
          <p>&copy;Desenvolvido por Renan Fabiano Paes | Todos os Direitos Reservados.</p>
          <div class="credits">
            UMC - UNIVERSIDADE DE MOGI DAS CRUZES
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
