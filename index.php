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
    <link rel="icon" type="image/png" sizes="96x96" href="https://djament.com.br/assets-cortinas/img/logo.png">
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
    <div class="row abertura">
      <img id="img-cortina-esq" src="assets/img/cortina-esquerda.png" alt="Cortina esquerda" title="Cortina esquerda">
      <img id="img-cortina-dir" src="assets/img/cortina-direita.png" alt="Cortina direita" title="Cortina direita">
    </div>
    <!-- PÁGINA INICIAL - BANNER 01 -->
    <main class="container-fluid">
      <section class="row">
        <article class="banner col-12" id="banner01">
          <div>
            <h1>Calculadora de Cortinas</h1>
            <h3>CALCULE RAPIDINHO TODAS AS MEDIDAS DO TECIDO DE SUA CORTINA</h3>
            <p>
              <a href="#banner02" title="Saiba como medir sua cortina rapidinho!" alt="Saiba como medir sua cortina rapidinho!">
                <i class="fa fa-chevron-circle-down"></i>
              </a>
            </p>
          </div>
        </article>
      </section>
      <!-- PÁGINA INICIAL - BANNER 02 -->
      <section class="row">
        <article class="banner col-12" id="banner02">
          <div>          
            <h3>É muito simples!<br/>É só preencher e clicar em 'Medir!'</h3>
            <p>
              <a href="https://calculadora-de-corti.websiteseguro.com/calculo-de-cortina-linear.php" title="Calcule agora mesmo as medidas do tecido de sua cortina!" alt="Saiba como medir sua cortina rapidinho!">Medir agora!
                <i class="fa fa-chevron-circle-right"></i>
              </a>
            </p>
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