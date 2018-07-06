<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt-br" dir="ltr">
  <head>
    <!-- SCRIPTS E INCLUDES (PHP, JQUERY E ENTÃO JS) -->
    <?php include_once("assets/php/functions.php") ?>
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
        <article class="inputFormDiv" id="inputformdiv">
          <div>
            <h1>Tenha em mãos as medidas da sua cortina final</h1>
            <h3>Podemos começar?</h3>
            <p class="offset-1 col-10">
              <a href="#inputform" title="Clique, preencha as informações e deixe que a gente calcula as medidas da sua cortina">
                Sim, vamos lá!
              </a>
            </p>
          </div>
        </article>
      </section>
      <!-- FORMULÁRIO -->
      <section class="row inputFormRow">
        <article class="inputForm col-12" id="inputform">
          <div>          
            <h4>Prencha as informações a seguir</h4>
            <form id="formMedidas" class="form-horizontal" action="calculo-de-cortina-linear-resultado.php" method="GET">
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="largcortina">Largura da cortina*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="largcortina" id="largcortina" name="largcortina" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Conforme projeto. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="altcortina">Altura da cortina*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="altcortina" id="altcortina" name="altcortina" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Conforme projeto. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="largrolo">Largura do rolo de tecido*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="largrolo" id="largrolo" name="largrolo" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Conforme padrão de mercado. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="emenda">Largura da Emenda*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="emenda" id="emenda" name="emenda" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Emenda: junção entre os tecidos. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="fechamento">Largura do Acabamento Lateral*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="fechamento" id="fechamento" name="fechamento" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Se não tiver acabamento, insira 0. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="rodateto">Altura da Cabeça da Cortina (barra superior)*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="rodateto" id="rodateto" name="rodateto" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Se não tiver acabamento, insira 0. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label offset-sm-3 col-sm-6" for="rodape">Altura da Barra da Cortina (rodapé)*</label>
                <div class="offset-sm-3 col-sm-6">
                  <input required type="number" class="form-control" value="rodape" id="rodape" name="rodape" placeholder="Insira a medida em mm">
                  <small id="emailHelp" class="form-text">* Se não tiver acabamento, insira 0. Campo obrigatório.</small>
                </div>
              </div>
              <div class="form-group"> 
                <div class="col-12 submit">
                  <button type="submit" name="submit" value="submit" class="cta btn btn-default">Calcular</button>
                </div>
              </div>
            </form>
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