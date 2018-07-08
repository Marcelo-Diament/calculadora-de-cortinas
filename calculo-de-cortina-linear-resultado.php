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
              if (!isset($_GET)){
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
      <section class="row outputFormRow">
        <article class="outputForm col-12" id="outputform">
          <?php
          // ## CORTINA LINEAR

              // Validando recebimento de inputs e gerando variáveis
              if (isset($_GET)){
                if (isset($_GET["altcortina"])){
                  $altcortina = $_GET["altcortina"];
                }else {
                  echo "<h2 style='color:#000'>Altura da cortina não capturada</h2>";
                }
                if (isset($_GET["largcortina"])){
                  $largcortina = $_GET["largcortina"];
                }else {
                  echo "<h2 style='color:#000'>Largura da cortina não capturada</h2>";
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
                if (isset($_GET["fechamentoTipoInput"])){
                  $fechamentoTipoInput = $_GET["fechamentoTipoInput"];
                } else {$fechamentoTipoInput = 1;}
                if(isset($_GET["rodateto"])){
                  $rodateto = $_GET["rodateto"];
                }else {
                  echo "<h2 style='color:#000'>Altura da barra superior não capturada</h2>";
                }
                if (isset($_GET["rodape"])){
                  $rodape = $_GET["rodape"];
                }else {
                  echo "<h2 style='color:#000'>Altura da barra inferior não capturada</h2>";
                }
                if (isset($_GET["franzimento"])){
                  $franzimento = $_GET["franzimento"];
                } else {$franzimento = 1;}
              }
              
              // CALCULOS
              /*// Soma da altura total
              $altTecido = $altcortina + $rodape + $rodateto;
              // Incluindo margem de pouco mais de 10%
              $altTecidoCompra = round($altTecido * 1.1,-3,PHP_ROUND_HALF_UP)/1000;
              // Largura da cortina dividida pela largura do rolo e arredondado para cima.
              $nFaixasInicial = round($largcortina / $largrolo, 0, PHP_ROUND_HALF_UP);
              $restoLargura = $largcortina % $largrolo; */
              
          // VARIÁVEIS CALCULADAS


          // ALTURAS

          // Altura total do tecido (soma da altura da cortina, barras superiores e inferiores)
          $altSub = ($altcortina + $rodape + $rodateto)/1000;
          // Adicionando margem de 10% à altura final do tecido e arredondando para cima (para imperfeições no tecido e erros de corte no rolo)
          $altTotal = round($altSub * 1.1,0,PHP_ROUND_HALF_UP);


          // LARGURAS

          // Quantidade de tecido (largura) para as emendas de cada faixa (2 emendas/faixa)
          $emendasPorFaixa = $emenda*2;
          // Tipo de Fechamento/Acabamento Lateral (simples ou duplo)
          $fechamentoTipo = array(
            "simples" => "1",
            "duplo" => "2",
          );
          //Quantidade de tecido (largura) para o fechamento de cada ponta da cortina
          $fechamentoSub = $fechamento * $fechamentoTipoInput;
          // Quantidade de tecido (largura) para o fechamento das duas pontas da cortina
          $fechamentoTotal = $fechamentoSub * 2;
          // Graus de Franzimento (multiplicam a largura)
          $nivelFranzimento = array(
            "normal" => "1",
            "medio" => "2",
            "alto" => "3"
          );
          //Largura linear (visível, de acordo com projeto e tipo de franzimento). Somado às emendas e acabamentos laterais dará o total real da largura em tecidos.
          $largcortinaSub = $franzimento * $largcortina;
          

          // CÁLCULOS DE APOIO
          
          
          // FAIXAS
          
          // Número de Faixas Inicial - largura da cortina dividida pela largura do rolo e arredondado para cima.
          $nFaixasInicial = round($largcortinaSub / $largrolo, 0, PHP_ROUND_HALF_UP);
          // Quantidade de Emendas
          $nFaixas = $nFaixasInicial +1;
          

          // LARGURAS
          
          // Largura de tecido das emendas todas
          $emendaTotal = $nFaixasInicial * $emendasPorFaixa;
          // Largura final da cortina
          $largCortinaTotal = $largcortinaSub + $fechamentoTotal + $emendaTotal;

          // FAIXAS II

          // Largura de todas as faixas de tecido (com margem e tudo)
          $largFaixasTodasSemCorte = $nFaixas*$largrolo;
          // Sobra de tecido (largura)
          $sobraLargura = $largFaixasTodasSemCorte - $largCortinaTotal;
          // Largura da faixa do miolo (entre as duas das pontas)
          $largFaixaMiolo = $largrolo - $emendasPorFaixa;
          // Largura de cada uma das faixas das pontas
          $largFaixaPonta = ($largrolo - ($sobraLargura/2)) - $emenda - $fechamentoSub;
          // Largura da costura de todas as faixas
          $largFaixasTodas = ($largFaixaMiolo * ($nFaixas - 2)) + (2 * $largFaixaPonta);
          // Largura do tecido das faixas das pontas
          $largTecidoPonta = $largrolo-($sobraLargura/2);

          // Fusorário Brasil (SP)
          $timezone  = -3;

          ?>
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
            <h4>Resultados</h4>
            <h2>Medidas para a Compra do Tecido</h2>
            <p>Dependendo do tecido pode ser que seja vendido por kg.</p>
            <div class="tabela">
              <table class="table table-hover">
                <caption>Dica: verifique se há imperfeições no tecido.</caption>
                <thead>
                  <tr>
                    <th>Medida</th>
                    <th></th>
                    <th>Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Largura do rolo</td>
                    <td></td>
                    <td><?php echo $largrolo; ?> mm</td>
                  </tr>
                  <tr>
                    <th>Metragem linear de tecido</td>
                    <td></td>
                    <td><?php echo $altTotal * $nFaixas; ?> m</td>
                  </tr>
                  <tr>
                    <th>Área de Tecido</td>
                    <td></td>
                    <td><?php echo round(($altTotal * $nFaixas * $largrolo/1000),2,PHP_ROUND_HALF_UP); ?> m²</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br/>
            <h2>Corte do Tecido</h2>
            <p>Confira abaixo as medidas para cortar o tecido.</p>
            <div class="tabela">
              <table class="table table-hover">
                <caption>Dica: use as sobras para criar adereços.</caption>
                <thead>
                  <tr>
                    <th>Medida</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Número de Faixas</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $nFaixas; ?></td>
                  </tr>
                  <tr>
                    <th>Altura de cada Faixa</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo $altSub; ?> m</td>
                  </tr>
                  <?php
                    if ($nFaixas > 2) {
                      echo "
                        <tr>
                          <th>Largura de " . ($nFaixas - 2) . " Faixas (miolos)</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>".($largrolo/1000)." m</td>
                        </tr>
                      ";
                    }
                  ?>
                  <tr>
                    <th>Largura de 2 Faixas (pontas)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><?php echo ($largTecidoPonta)/1000; ?> m</td>
                  </tr>
                  <?php
                    if ($sobraLargura > 0){
                      echo "
                        <tr>
                          <th>Sobra de Tecido (pedaços)</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>2x de " . ($sobraLargura/1000/2) . " x " . $altSub . " m</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <br/>
            <h2>Costura da Cortina</h2>
            <p>As medidas já estão na ordem do processo de costura.</p>
            <div class="tabela">
              <table class="table table-hover">
                <caption>Atenção: as pontas são as faixas com medidas menores.</caption>
                <thead>
                  <tr>
                    <th class="colspan-5">Passo 1 | Emendas</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                  <tr>
                    <th>Faixa</th>
                    <th>Valores</th>
                    <th>Largura Final</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Pontas (1 emenda por ponta)</td>
                    <td><?php echo $emenda; ?> mm</td>
                    <td><?php echo $largTecidoPonta - $emenda; ?> mm</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <?php
                    if ($nFaixas > 2) {
                      echo "
                      <tr>
                        <th>Miolos (".($nFaixas - 2).")</td>
                        <td>".$emenda." mm x 2</td>
                        <td>".($largrolo - (2 * $emenda))." mm</td>
                        <td></td>
                        <td></td>
                      </tr>
                        
                      ";
                    }
                  ?>
                </tbody>
              </table>
              <br/>
              <table class="table table-hover">
                <caption>Deixe todas as faixas no mesmo sentido vertical.</caption>
                <thead>
                  <tr>
                    <th class="colspan-5">Passo 2 | Cabeça e Barra</th>
                    <th></th>
                    <th></th>
                  </tr>
                  <tr>
                    <th>Cabeça (barra superior)</th>
                    <th>Barra</th>
                    <th>Altura Final</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $rodateto; ?> mm</td>
                    <td><?php echo $rodape; ?> mm</td>
                    <td><?php echo (($altSub*1000) - ($rodape + $rodateto)); ?> mm</td>
                  </tr>
                </tbody>
              </table>
              <br/>
              <div class="tabela">
              <table class="table table-hover">
                <caption>Em cada ponta o acabamento fica de um lado.</caption>
                <thead>
                  <tr>
                    <th class="colspan-5">Passo 3 | Laterais</th>
                    <th></th>
                    <th></th>
                  </tr>
                  <tr>
                    <th>Faixa</th>
                    <th>Valores</th>
                    <th>Largura Final</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Pontas</td>
                    <td><?php echo $fechamentoSub; ?> mm</td>
                    <td><?php echo $largTecidoPonta - $emenda - $fechamentoSub; ?> mm</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br/>
            
            <h4>Resultado Final</h4>
            <!--<h2>Aproveitamento</h2>-->
            <p>Medidas Finais: <?php echo ($largcortina / 1000)." x ".($altcortina / 1000)." m"; ?></p>
            <div class="tabela">
              <table class="table table-hover">
                <!--<caption>Em cada ponta o acabamento fica de um lado.</caption>-->
                <thead>
                  <tr>
                    <th>Faixa</th>
                    <th>Largura</th>
                    <th>Altura</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>Faixa Ponta 1</td>
                    <td><?php echo $largFaixaPonta; ?> mm</td>
                    <td><?php echo $altcortina; ?> mm</td>
                  </tr>
                  <?php
                    if ($nFaixas > 2) {
                      echo "
                      <tr>
                        <th>".($nFaixas - 2)." Faixas</td>
                        <td>".($nFaixas - 2)." x ".$largFaixaMiolo." mm</td>
                        <td>".$altcortina." mm</td>
                        <td></td>
                        <td></td>
                      </tr>
                        
                      ";
                    }
                  ?>
                  <tr>
                    <th>Faixa Ponta 2</td>
                    <td><?php echo $largFaixaPonta; ?> mm</td>
                    <td><?php echo $altcortina; ?> mm</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <br/>

            <h4>Dicas</h4>
            <h2>Aproveitamento</h2>
            <p>Use 100% do tecido ajustando a largura da cortina para <?php echo ($largcortina - $sobraLargura) / 1000 ?> m (ou para <?php echo ($largcortina + $sobraLargura)/1000; ?> m).
            <br/><br/>
            Aproveite as sobras para fazer adereços que combinem com sua nova cortina.</p>
            <br/>

            <h4>Informações Enviadas</h4>
            <p>Essas foram as medidas usadas no cálculo do tecido</p>
            <div class="tabela">
              <table class="table table-hover">
                <caption>Informações enviadas pelo formulário em <?php echo date("d/m") . " às ". gmdate("H:i", time() + 3600 * $timezone); ?>.</caption>
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
                    <td class=""><?php echo $largcortina; ?> mm</td>
                    <td class="">Projeto (cortina final)</td>
                  </tr>
                  <tr class="">
                    <th class="">Altura da Cortina</td>
                    <td class=""><?php echo $altcortina; ?> mm</td>
                    <td class="">Projeto (cortina final)</td>
                  </tr>
                  <tr class="">
                    <th class="">Largura do Rolo de Tecido</td>
                    <td class=""><?php echo $largrolo; ?> mm</td>
                    <td class="">Padrão (de acordo com o tecido)</td>
                  </tr>
                  <tr class="">
                    <th class="">Emenda</td>
                    <td class=""><?php echo $emenda; ?> mm</td>
                    <td class="">Projeto (sugestão: 10 mm)</td>
                  </tr>
                  <tr class="">
                    <th class="">Acabamento Lateral</td>
                    <td class=""><?php echo $fechamento; ?> mm</td>
                    <td class="">Projeto (sugestão: 50mm)</td>
                  </tr>
                  <tr class="">
                    <th class="">Cabeça (barra superior)</td>
                    <td class=""><?php echo $rodateto; ?> mm</td>
                    <td class="">Projeto (sugestão: 120 mm)</td>
                  </tr>
                  <tr class="">
                    <th class="">Barra (rodapé)</th>
                    <td class=""><?php echo $rodape; ?> mm</td>
                    <td class="">Projeto (sugestão: 200 mm)</td>
                  </tr>
                </tbody>
              </table>
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