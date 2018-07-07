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
    <!-- PÁGINA DE TESTES -->
    <main class="container-fluid">

      <section class="row outputFormRow">
        <article class="outputForm col-12" id="outputform">
          <div>
          
          <!-- VARIÁVEIS -->
          <?php
          echo "<br/><br/><br/><br/><br/><h4>Variáveis Inputadas</h4>";

          // VARIÁVEIS INPUTADAS PELO USUÁRIO
          $altcortina = 8500;
          echo "<p>Altura da Cortina (input): ".$altcortina." mm<br/>";
          $largcortina = 5500;
          echo "Largura da Cortina (input): ".$largcortina." mm<br/>";
          $largrolo = 1400;
          echo "Largura do Rolo (input): ".$largrolo." mm<br/>";
          $emenda = 10;
          echo "Emenda (input): ".$emenda." mm<br/>";
          $fechamento = 50;
          echo "Fechamento Lateral: ".$fechamento." mm<br/>";
          $fechamentoTipoInput = 2;
          echo "Tipo de Fechamento: ".$fechamentoTipoInput."</br>";
          $rodateto = 120;
          echo "Cabeça: ".$rodateto." mm<br/>";
          $rodape = 200;
          echo "Barra: ".$rodape." mm<br/>";
          $franzimento = 1;
          echo "Grau de Franzimento (normal, médio ou alto): ".$franzimento."</p><br/>";

          echo "<h4>Variáveis calculadas</h4>";

          // VARIÁVEIS CALCULADAS


          // ALTURAS
          echo "<h2 style='font-size:22px !important;margin:-25px;color:purple!important;'>Alturas</h2>";
          echo "<p>";
          // Altura total do tecido (soma da altura da cortina, barras superiores e inferiores)
          $altSub = ($altcortina + $rodape + $rodateto)/1000;
          echo "Altura Subtotal (sem margem) ".$altSub." m.<br/>";

          // Adicionando margem de 10% à altura final do tecido e arredondando para cima (para imperfeições no tecido e erros de corte no rolo)
          $altTotal = round($altSub * 1.1,0,PHP_ROUND_HALF_UP);
          echo "Altura Final (com margem): ".$altTotal." m.<br/>";
          echo "</p>";


          // LARGURAS
          echo "<h2 style='font-size:22px !important;margin:-25px;color:purple!important;'>Larguras</h2>";
          echo "<p>";
          // Quantidade de tecido (largura) para as emendas de cada faixa (2 emendas/faixa)
          $emendasPorFaixa = $emenda*2;
          echo "Largura de tecido em emendas por faixa (2 emendas por faixa): ".$emendasPorFaixa." mm.<br/>";
          // Tipo de Fechamento/Acabamento Lateral (simples ou duplo)
          $fechamentoTipo = array(
            "simples" => "1",
            "duplo" => "2",
          );
          $fechamentoTipoInput = $fechamentoTipo['simples'];
          echo "Tipo de Fechamento Lateral Simples: ".$fechamentoTipoInput."<br/>";
          $fechamentoTipoInput = $fechamentoTipo['duplo'];
          echo "Tipo de Fechamento Lateral Duplo: ".$fechamentoTipoInput."<br/>";
          //Quantidade de tecido (largura) para o fechamento de cada ponta da cortina
          $fechamento = 50;
          $fechamentoTipoInput = 1;
          $fechamentoSub = $fechamento * $fechamentoTipoInput;
          echo "Largura de tecido do fechamento (simples, no exemplo) de cada ponta: ". $fechamentoSub ." mm</br>";
          // Quantidade de tecido (largura) para o fechamento das duas pontas da cortina
          $fechamentoTotal = $fechamentoSub * 2;
          echo "Largura de tecido do fechamento (simples, no exemplo) de toda cortina: ". $fechamentoTotal ." mm</br>";
          // Graus de Franzimento (multiplicam a largura)
          $nivelFranzimento = array(
            "normal" => "1",
            "medio" => "2",
            "alto" => "3"
          );
          $franzimento = $nivelFranzimento['normal'];
          echo "Franzimento Normal: ".$franzimento."<br/>";
          $franzimento = $nivelFranzimento['medio'];
          echo "Franzimento Médio: ".$franzimento."<br/>";
          $franzimento = $nivelFranzimento['alto'];
          echo "Franzimento Alto: ".$franzimento."<br/>";
          //Largura linear (visível, de acordo com projeto e tipo de franzimento). Somado às emendas e acabamentos laterais dará o total real da largura em tecidos.
          $franzimento = 1;
          $largcortinaSub = $franzimento * $largcortina;
          echo "Largura linear da cortina final (de acordo com largura de projeto e franzimento - normal no caso): ". $largcortinaSub/1000 ." m</br>";
          echo "</p>";


          echo "<h4>Cálculos</h4>";
          // VARIÁVEIS CALCULADAS
          // CÁLCULOS DE APOIO
          echo "<h2 style='font-size:22px !important;margin:-25px;color:purple!important;'>Cálculos de Apoio</h2>";
          echo "<p>";

          // FAIXAS
          // Número de Faixas Inicial - largura da cortina dividida pela largura do rolo e arredondado para cima.
          $nFaixasInicial = round($largcortinaSub / $largrolo, 0, PHP_ROUND_HALF_UP);
          echo "<i>Número de Faixas Inicial (largura cortina / largura rolo): ".$nFaixasInicial." rolo(s)</i><br/>";
          // Quantidade de Emendas
          $nFaixas = $nFaixasInicial +1;
          echo "Número de Total de Faixas da cortina: ".$nFaixas."<br/>";
          
          // LARGURAS
          // Largura de tecido das emendas todas
          $emendaTotal = $nFaixas * $emendasPorFaixa;
          echo "Largura total de emendas na cortina: ".$emendaTotal." mm<br/>";
          // Largura final da cortina
          $largCortinaTotal = $largcortinaSub + $fechamentoTotal + $emendaTotal;
          echo "Largura final da cortina (com emendas, fechamentos e franzimento): ".$largCortinaTotal/1000 . " m<br/>";

          // FAIXAS II
          // Largura da faixa do miolo (entre as duas das pontas)
          $largFaixaMiolo = $largrolo - $emendasPorFaixa;
          echo "Largura da faixa (miolo): ".$largFaixaMiolo." mm<br/>";
          // Largura de cada uma das faixas das pontas
          $largFaixaPonta = $largrolo - $emenda - $fechamentoSub;
          echo "Largura da faixa (ponta): ".$largFaixaPonta." mm<br/>";

          // Largura da costura de todas as faixas
          $largFaixasTodas = ($largFaixaMiolo * ($nFaixas - 2)) + (2 * $largFaixaPonta);
          echo "Largura das Faixas dos miolos x Faixas (-2) + 2 Faixas das pontas: ".$largFaixasTodas." mm<br/>";
          // Sobra de tecido (largura)
          $sobraLargura = $largFaixasTodas - $largCortinaTotal;
          echo "Sobra da largura da cortina (total das faixas - total desejado da cortina): ".$sobraLargura." mm<br/>";

          


          echo "</p>";


          ?>
          <div>          
            <h4>Resultados</h4>
            <?php/*
              if ((($nFaixasInicial * $largrolo) < $largcortina) && ($restoLargura * -1 < 200)){
                echo "<p>Com ".$nFaixasInicial." faixa(s) de tecido faltam ".$restoLargura." mm para os ".$largcortina." mm da cortina. Será que não vale a pena reduzir um pouco as medidas da cortina?</p>";
              }
              echo "<p>Você precisará de <strong>".($nFaixasInicial + 1)." faixas de ".($largrolo/1000)." x ".($altSub/1000)." m</strong> para fazer sua cortina de ".($largcortina/1000)." x ".($altcortina/1000)." m.<br/>No total (com margem), serão <strong>".(($nFaixasInicial + 1) * $altTotal)." m lineares</strong> (".(round($altTotal * ($nFaixasInicial + 1) * $largrolo/1000,2,PHP_ROUND_HALF_UP)) . " m²) de tecido.</p>
              ";     
              */?>
            <!--<h4>Medidas</h4>
            <p>Confira abaixo as medidas do tecido da sua cortina.</p>
            <div class="tabela">
              <table class="table table-hover">
                <caption>As medidas reais podem variar de acordo com a forma de costura.</caption>
                <thead>
                  <tr class="">
                    <th class="">Medida</th>
                    <th class="">Valor</th>
                    <th class="">Notas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <th class="">Altura Total da Cortina</td>
                    <td class=""><?php //echo $altSub; ?> mm</td>
                    <td class="">Corte (sem margem)</td>
                  </tr>
                  <tr class="">
                    <th class="">Altura Total do Tecido (por faixa)</td>
                    <td class=""><?php //echo $altTotal//*1000; ?> mm</td>
                    <td class="">Compra/Orçamento (com margem)</td>
                  </tr>
                  <tr class="">
                    <th class="">Número de Faixas</td>
                    <td class=""><?php //echo ($nFaixasInicial //+ 1); ?> faixas</td>
                    <td class="">Cada faixa com <?php //echo $largrolo//." x ".$altSub." mm"; ?></td>
                  </tr>
                  <tr class="">
                    <th class="">Emenda</td>
                    <td class=""><?php //echo $emenda; ?> mm</td>
                    <td class="">Projeto (sugestão: 10 m)</td>
                  </tr>
                  <tr class="">
                    <th class="">Acabamento Lateral</td>
                    <td class=""><?php //echo $fechamento; ?> mm</td>
                    <td class="">Projeto (sugestão: 50m)</td>
                  </tr>
                  <tr class="">
                    <th class="">Cabeça (barra superior)</td>
                    <td class=""><?php //echo $rodateto; ?> mm</td>
                    <td class="">Projeto (sugestão: 120 m)</td>
                  </tr>
                  <tr class="">
                    <th class="">Barra (rodapé)</th>
                    <td class=""><?php //echo $rodape; ?> mm</td>
                    <td class="">Projeto (sugestão: 200 m)</td>
                  </tr>
                </tbody>
              </table>
              <h4>Informações Enviadas</h4>
            <p>Essas foram as medidas usadas no cálculo do tecido</p>
            <div class="tabela">
              <table class="table table-hover">
                <caption>Informações enviadas pelo formulário.</caption>
                <thead>
                  <tr class="">
                    <th class="">Medida</th>
                    <th class="">Valor (mm)</th>
                    <th class="">Notas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="">
                    <th class="">Largura da Cortina</td>
                    <td class=""><?php //echo $largcortina; ?> mm</td>
                    <td class="">Projeto (cortina final)</td>
                  </tr>
                  <tr class="">
                    <th class="">Altura da Cortina</td>
                    <td class=""><?php //echo $altcortina; ?> mm</td>
                    <td class="">Projeto (cortina final)</td>
                  </tr>
                  <tr class="">
                    <th class="">Largura do Rolo de Tecido</td>
                    <td class=""><?php //echo $largrolo; ?> mm</td>
                    <td class="">Padrão (de acordo com o tecido)</td>
                  </tr>
                  <tr class="">
                    <th class="">Emenda</td>
                    <td class=""><?php //echo $emenda; ?> mm</td>
                    <td class="">Projeto (sugestão: 10 mm)</td>
                  </tr>
                  <tr class="">
                    <th class="">Acabamento Lateral</td>
                    <td class=""><?php //echo $fechamento; ?> mm</td>
                    <td class="">Projeto (sugestão: 50mm)</td>
                  </tr>
                  <tr class="">
                    <th class="">Cabeça (barra superior)</td>
                    <td class=""><?php //echo $rodateto; ?> mm</td>
                    <td class="">Projeto (sugestão: 120 mm)</td>
                  </tr>
                  <tr class="">
                    <th class="">Barra (rodapé)</th>
                    <td class=""><?php //echo $rodape; ?> mm</td>
                    <td class="">Projeto (sugestão: 200 mm)</td>
                  </tr>
                </tbody>
              </table>
            </div>-->

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