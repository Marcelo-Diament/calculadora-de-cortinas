<?php

	// # INFORMAÇÕES SOBRE O DESENVOLVEDOR
	$autores = "Marcelo Diament, Djament Comunicação";


	// # INFORMAÇÕES SOBRE AS PÁGINAS (PARA O TOPO DAS PÁGINAS, TÍTULOS, SUBTÍTULOS E BREAD CRUMBS)
	$nomeNegocio = "Cálculo de Tecidos para Cortinas";
	$siteNegocio = "https://calculadora-de-corti.websiteseguro.com";
	$metaOgSiteName = $nomeNegocio;

	// # TELEFONES / WHATSAPP
	$telefoneCelular = "(11) 97605 2723";

	// # EMAILS
	$emailContato = "contato@djament.com.br";

   	// # REDES SOCIAIS
	$instaUser = "@djamentcomunicacao";
	$instaUrl = "https://instagram.com/djamentcomunicacao";
	$googlePlusUrl = "https://plus.google.com/djamentcomunicacao";
	$fanpageUrl = "http://www.facebook.com/djamentcomunicacao";
	//$pinterestUrl = "https://pinterest.com/djamentcomunicacao";

	// # DADOS DA PÁGINA
	$titulo = "Calculadora de Tecidos para Cortinas";
	$subtitulo = "Calcule a quantidade necessária de tecido para sua cortina (tanto para corte quanto para orçamento)";
	$metaTitle = $titulo;
	$metaDesc = "Calculadora de tecidos para cortinas - Calcule a quantidade de tecido necessária tanto para o corte quanto para o orçamento de sua cortina";
	$metaKeyWords ="calculadora de tecido, cálculo de tecido, conta de tecido, cálculo para cortina, conta para cortina, calculadora para cortina, quantidade de tecido para cortina, quantidade de tecido para corte de cortina, quantidade de tecido para orçamento, orçar cortina, orçar tecido para cortina";
	$metaOgTitle = $titulo;
	$metaOgDesc = $metaDesc;
	$metaOgUrl = "https://calculadora-de-corti.websiteseguro.com/calculo-de-cortina-linear.php";
	$metaOgLocal = "pt-BR";
	$metaOgType = "website";
	$metaOgImage = "https://calculadora-de-corti.websiteseguro.com/assets/img/logo.jpg";
	$metaOgImageAlt = "Calculadora de Tecidos de Cortinas";
	$metaOgImageUrl = $metaOgImage;
	$metaOgImageType = "image/jpg";

	// # TIPOS DE CORTINAS
	$tiposdecortinas = array(
		'Cortina Linear'=> array(
		'idcategoria' => '1',
		'url' => 'https://calculadora-de-corti.websiteseguro.com/calculo-de-cortina-linear.php',
		'titulo' => 'Calculadora de Tecidos para Cortina Linear',
		'subtitulo' => 'Calcule a quantidade de tecidos para sua cortina linear - tanto para corte quanto para orçamento',
			'metaTitle' => 'Calculadora de Tecidos para Cortina Linear',
			'metaDesc' => 'Calcule a quantidade de tecidos para sua cortina linear - tanto para corte quanto para orçamento',
			'metaKeyWords' => 'calculadora de tecido, cálculo de tecido, conta de tecido, cálculo para cortina, conta para cortina, calculadora para cortina, quantidade de tecido para cortina, quantidade de tecido para corte de cortina, quantidade de tecido para orçamento, orçar cortina, orçar tecido para cortina, cálculo para cortina linear, conta para cortina linear, calculadora para cortina linear, quantidade de tecido para cortina linear, quantidade de tecido para corte de cortina linear, orçar cortina linear, orçar tecido para cortina linear',
			'metaOgTitle' => 'Calculadora de Tecidos para Cortina Linear',
			'metaOgDesc' => 'Calcule a quantidade de tecidos para sua cortina linear - tanto para corte quanto para orçamento',
			'metaOgUrl' => 'https://calculadora-de-corti.websiteseguro.com/calculo-de-cortina-linear.php',
			'metaOgLocal' => 'pt-BR',
			'metaOgType' => 'website',
			'metaOgImage' => 'https://calculadora-de-corti.websiteseguro.com/assets/img/logo.jpg',
			'metaOgImageAlt' => 'Calculadora de Tecido para Cortinas Lineares',
			'metaOgImageUrl' => 'https://calculadora-de-corti.websiteseguro.com/assets/img/logo.jpg',
			'metaOgImageType' => 'image/jpg'
		)
	);

	// # VARIÁVEIS E VALORES DO FORMULÁRIO DE CÁLCULO

		

	// # FUNÇÕES
		
		// ## CORTINA LINEAR
		/*if (isset($_GET)){
			// ### ALTURA
			// Soma da altura total
			$altTecido = $_GET["altcortina"] + $_GET["rodape"] + $_GET["rodateto"];
			// Incluindo margem de pouco mais de 10%
			$altTecidoCompra = round($altTecido * 1.1,-3,PHP_ROUND_HALF_UP)/1000;
		}*/
?>