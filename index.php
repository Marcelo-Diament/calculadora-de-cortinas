<!DOCTYPE html prefix="og: http://ogp.me/ns#">
<html lang="pt-br" dir="ltr">
  <head>
    <!-- ESTILOS, FONTES... -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="icon" type="image/png" sizes="96x96" href="http://calculadora-de-cortina.com.br/assets/img/logo-96.png">
    <meta name="theme-color" content="#de584d">
    <!--<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Catamaran|Fredoka+One|Poiret+One|Satisfy" rel="stylesheet">-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121973699-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121973699-1');
    </script>
    <!-- SCRIPTS E INCLUDES (PHP, JQUERY E ENTÃO JS) -->
    <?php include_once("assets/php/functions.php") ?>
    <?php header('Content-type: text/html; charset=utf-8'); ?>
    <!-- DADOS ESTRUTURADOS - SCHEMA.ORG -->
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "http://calculadora-de-cortina.com.br",
        "logo": "http://calculadora-de-cortina.com.br/assets/img/logo.png",
        "description": "A Calculadora de Cortina calcula a quantia de tecido necessáiria para sua cortina e as medidas para o corte do tecido da cortina, além de prever  sobra de tecido da sua cortina.",
        "additionalType": "http://www.productontology.org/doc/Web_design",
        "telephone" : "+55-11-97605-2723",
        "email" : "contato@djament.com.br",
        "name" : "Calculadora de Cortina",
        "alternateName" : "Calculadora de Cortina",
        "address" : {
          "@type" : "PostalAddress",
          "streetAddress" : "Rua Guaipá, Vila Leopoldina",
          "addressLocality" : "São Paulo",
          "addressRegion" : "São Paulo",
          "postalCode" : "05089-001"
        },
        "sameAs" : [ "https://www.facebook.com/djamentcomunicacao" ]
      }
        "contactPoint": [{
          "@type": "ContactPoint",
          "telephone": "+55-11-97605-2723",
          "contactType": "customer service"
        }]
      }
    </script>
    <!-- INFORMAÇÕES GERAIS BÁSICAS -->
    <!--<meta charset="utf-8">-->
    <meta name="viewport" content="initial-scale=1, maximum-scale=5,width=device-width">
    <title><?php echo $titulo ?></title>
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
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="/assets/img/icon-152.png">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="/assets/img/icon-196.png">
  </head>
  <body>
    <!-- HEADER -->
    <?php
    include_once ("inc/header.php");
    ?>
    <!-- PÁGINA INICIAL - BANNER 01 -->
    <main class="container-fluid">
      <section class="row">
        <article class="banner col-12" id="banner01">
          <div>
            <h1>Calculadora de Cortina</h1>
            <h2>CALCULE TODAS AS MEDIDAS DE SUA CORTINA RAPIDINHO</h2>
            <p>
              <a href="http://calculadora-de-cortina.com.br/#banner02" title="Saiba como medir sua cortina rapidinho!" alt="Saiba como medir sua cortina rapidinho!">
                <i class="fa fa-chevron-circle-down"></i>
              </a>
            </p>
          </div>
        </article>
      </section>
      <!-- PÁGINA INICIAL - BANNER 02 -->
      <section class="row bannerDoisHome">
        <article class="banner col-12" id="banner02">
          <div>          
            <h3>É muito simples!<br/>É só preencher as medidas e clicar em 'Calcular!'</h3>
            <p>
              <a href="http://calculadora-de-cortina.com.br/calculo-de-cortina-linear.php" title="Calcule agora mesmo as medidas do tecido de sua cortina!" alt="Saiba como medir sua cortina rapidinho!">Medir agora!
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
    <!--<script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>-->
    <!--<script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>-->
    <!--<script defer="defer" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="assets/js/jquerycloudflare.js"></script>
    <script defer="defer" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script defer="defer" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script defer="defer" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
