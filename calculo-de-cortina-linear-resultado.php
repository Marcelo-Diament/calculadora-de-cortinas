<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt-br" dir="ltr">
  <head>
    <!-- SCRIPTS E INCLUDES (PHP, JQUERY E ENTÃO JS) -->
    <?php include_once("assets/php/functions.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--<script src="assets/js/script.js"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- DADOS ESTRUTURADOS - SCHEMA.ORG -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "https://calculadora-de-corti.websiteseguro.com",
        "logo": "https://calculadora-de-corti.websiteseguro.com/assets/img/logo.png",
        "description": "Calcule a quantidade de tecidos para sua cortina linear - tanto para corte quanto para orçamento",
        "additionalType": "http://www.productontology.org/doc/Web_design",
        "telephone" : "+55-11-97605-2723",
        "email" : "contato@djament.com.br",
        "address" : {
          "@type" : "PostalAddress",
          "streetAddress" : "Rua Guaipá, 223, Vila Leopoldina",
          "addressLocality" : "São Paulo",
          "addressRegion" : "São Paulo",
          "postalCode" : "05089-001"
        },
        "sameAs" : [ "https://www.facebook.com/djamentcomunicacao", "https://www.youtube.com/channel/djamentcomunicacao", "https://pinterest.com/djamentcomunicacao/", "https://twitter.com/djamentcomunicacao", "https://vimeo.com/djamentcomunicacao" ]
      }
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+55-11-97605-2723",
          "contactType": "customer service"
        }]
      }
    </script>
    <!-- INFORMAÇÕES GERAIS BÁSICAS -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1,width=device-width,user-scalable=no">
    <title><?php echo $titulo ?></title>
    <!-- ESTILOS, FONTES... -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="icon" type="image/png" sizes="96x96" href="https://calculadora-de-corti.websiteseguro.com/assets/img/logo.png">
    <meta name="theme-color" content="#de584d">
    <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Catamaran|Fredoka+One|Poiret+One|Satisfy" rel="stylesheet">
    <!-- META DATA (SEO) / OG -->
    <meta name="title" content="<?php echo $metaTitle ?>">
    <meta name="author" content="<?php echo $autores ?>">
    <meta name="description" content="<?php echo $metaDesc ?>">
    <meta name="keywords" content="<?php echo $metaKeyWords ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:site_name" content="<?php echo $metaOgSiteName ?>" />
    <meta property="og:title" content="<?php echo $metaOgTitle ?>" />
    <meta property="og:description" content="<?php echo $metaOgDesc ?>" />
    <meta property="og:url" content="<?php echo $metaOgUrl ?>" />
    <meta property="og:locale" content="<?php echo $metaOgLocal ?>" />
    <meta property="og:type" content="<?php echo $metaOgType ?>" />
    <meta property="og:image" content="<?php echo $metaOgImage ?>" />
    <meta property="og:image:alt" content="<?php echo $metaOgImageAlt ?>" />
    <meta property="og:image:url" content="<?php echo $metaOgImageUrl ?>" />
    <meta property="og:image:type" content="<?php echo $metaOgImageType ?>" />
  </head>
  <body>
    <!-- HEADER -->
    <?php
    include_once ("inc/header.php");
    ?>
    <!-- PÁGINA INICIAL - BANNER 01 -->
    <main class="container-fluid">
      <section class="row">
        <article class="outputFormDiv" id="outputformdiv">
          <div>
            <?php
              if (!isset($_GET['largcortina'])){
                echo "
                  <h1>Ops! Parece que algo deu errado...<br/>Por favor, tente calcular sua cortina novamente</h1>
                  <p class='offset-1 col-10 erro'>
                    <a href='calculo-de-cortina-linear.php#inputform' title='Clique aqui para tentar calcular sua cortina novamente'>
                      Tentar novamente
                    </a>
                  </p>
                ";
                exit;
              }
            ?>
            <h1>Prontinho!<br/>Já calculamos sua cortina!</h1>
            <!--<h3>Vamos ver os resultados?</h3>-->
            <p class="offset-1 col-10">
              <a href="#outputform" title="Clique, preencha as informações e deixe que a gente calcula as medidas da sua cortina">
                Ver medidas
              </a>
            </p>
          </div>
        </article>
      </section>
      <!-- RESULTADO -->
      <section class="row">
        <article class="outputForm col-12" id="outputform">
          <?php
            if (isset($_GET)){
              if (isset($_GET["largcortina"])){
                $largcortina = $_GET["largcortina"];
              }else {
                echo "<h2 style='color:#000'>Largura da cortina não capturada</h2>";
              }
              if (isset($_GET["altcortina"])){
                $altcortina = $_GET["altcortina"];
              }else {
                echo "<h2 style='color:#000'>Altura da cortina não capturada</h2>";
              }
              if (isset($_GET["largrolo"])){
                $largrolo = $_GET["largrolo"];
              }else {
                echo "<h2 style='color:#000'>Largura do rolo não capturada</h2>";
              }
              if (isset($_GET["emenda"])){
                $emenda = $_GET["emenda"];
              }else {
                echo "<h2 style='color:#000'>Largura da emenda não capturada</h2>";
              }
              if (isset($_GET["fechamento"])){
                $fechamento = $_GET["fechamento"];
              }else {
                echo "<h2 style='color:#000'>Largura do fechamento não capturada</h2>";
              }
              if (isset($_GET["rodateto"])){
                $rodateto = $_GET["rodateto"];
              }else {
                echo "<h2 style='color:#000'>Altura da barra superior não capturada</h2>";
              }
              if (isset($_GET["rodape"])){
                $rodape = $_GET["rodape"];
              }else {
                echo "<h2 style='color:#000'>Altura da barra inferior não capturada</h2>";
              }
            } else {
              echo "
                <h4>Ops! Parece que houve algum probleminha...</h4>
                <br/>
                <p>Por favor, tente novamente!</p>
              ";
            }



          ?>
          <div>          
            <h4>Resultados</h4>
            <p>Confira abaixo os resultados da sua cortina.</p>
            <div class="row">
              <table>
                <tr class="col-12 offset-md-4 col-md-4">
                  <th class="col-6">Item</th>
                  <th class="col-6">Medida</th>
                </tr>
                <tr class="col-12 offset-md-4 col-md-4">
                  <td class="col-6"></td>
                  <td class="col-6"></td>
                </tr>
              </table>
              <ul class="col-12">
                <li class="offset-3 col-3">Medidas</li>
                <li class="col-3">Valores (mm)</li>
                <li class="col-3">Observações</li>
              </ul>
              <ul class="col-12">
                <li colspan="3"><b>Medidas inseridas</b></li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Largura da Cortina</li>
                <li class="col-3"><?php echo $largcortina; ?> mm</li>
                <li class="col-3">Largura final desejada da cortina (projeto)</li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Altura da Cortina</li>
                <li class="col-3"><?php echo $altcortina; ?> mm</li>
                <li class="col-3">Altura final desejada da cortina (projeto)</li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Largura do Rolo de Tecido</li>
                <li class="col-3"><?php echo $largrolo; ?> mm</li>
                <li class="col-3">Largura padrão do mercado (de acordo com cada tecido)</li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Largura da Emenda (enule cada faixa de tecido)</li>
                <li class="col-3"><?php echo $emenda; ?> mm</li>
                <li class="col-3">Definida pelo projeto ou por quem vai costurar</li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Largura do Acabamento Lateral (pontas da cortina)</li>
                <li class="col-3"><?php echo $fechamento; ?> mm</li>
                <li class="col-3">Definida pelo projeto ou por quem vai costurar</li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Altura da Cabeça da Cortina (barra superior)</li>
                <li class="col-3"><?php echo $rodateto; ?> mm</li>
                <li class="col-3">Definida pelo projeto ou por quem vai costurar</li>
              </ul>
              <ul class="col-12">
                <li class="offset-3 col-3">Altura da Barra da Cortina (rodapé)</li>
                <li class="col-3"><?php echo $rodape; ?> mm</li>
                <li class="col-3">Definida pelo projeto ou por quem vai costurar</li>
              </ul>
            </div>

            <!--<form class="form-horizontal" action="/calculo-de-cortina-linear-resultados.php" method="post">
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="largcortina">Largura da cortina</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="largcortina" name="largcortina" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="altcortina">Altura da cortina</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="altcortina" name="altcortina" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="largrolo">Largura do rolo de tecido</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="largrolo" name="largrolo" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="emenda">Largura da Emenda (de cada lado de cada tecido)</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="emenda" name="emenda" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="fechamento">Largura do Acabamento Lateral (cada ponta da cortina)</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="fechamento" name="fechamento" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="rodateto">Altura da Cabeça da Cortina (barra superior)</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="rodateto" name="rodateto" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="rodape">Altura da Barra da Cortina (rodapé)</label>
                <div class="offset-sm-3 col-sm-6">
                  <input type="number" class="form-control" id="rodape" name="rodape" placeholder="Insira a medida em mm">
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-12 submit">
                  <button type="submit" name="submit" class="cta btn btn-default">Calcular</button>
                </div>
              </div>
            </form>-->
          </div>
        </article>
      </section>
    </main>
    <!-- FOOTER -->
    <!--<?php
      //include ("inc/footer.php");
    ?>-->
  </body>
</html>