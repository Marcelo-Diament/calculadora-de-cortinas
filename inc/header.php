  <nav class="navbar navbar-expand-lg navbar-light bg-light text-black fixed-top">
    <a title="Clique para acessar a página inicial" alt="Clique para a acessar a página inicial" class="navbar-brand" href="https://calculadora-de-cortina.com.br"><img src="https://calculadora-de-cortina.com.br/assets/img/logo-50.png" alt="Logo da Calculadora de Cortina" title="Clique para acessar a página inicial da Calculadora de Cortina" height="50px" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse bg-light" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto text-white d-flex justify-content-around">
        <li class="nav-item active">
          <a title="Acessar página inicial da Calculadora de Cortina" alt="Acessar página inicial da calculadora de cortinas" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a title="Selecione o tipo de cortina que deseja calcular" alt="Selecione o tipo de cortina que deseja calcular" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tipos de Cortinas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            
            <?php
              foreach ($tiposdecortinas as $tipodecortina) {
                echo "<a class='dropdown-item' href='".$tipodecortina['url']."' title='Clique para escolher qual seu ".$tipodecortina['titulo']."' alt='Clique para escolher qual seu ".$tipodecortina['titulo']."'>".$tipodecortina['titulo']."</a>";
              }
            ?>

            <div class="dropdown-divider"></div>
            <a title="Enviar um email para o desenvolvedor da calculadora de cortinas" alt="Enviar um email para o desenvolvedor da calculadora de cortinas" class="dropdown-item" href="mailto:contato@djament.com.br?Subject=Contato através da calculadora de cortinas">Entre em contato</a>
            <a title="Em breve, novos tipos de cortinas" alt="Em breve, novos tipos de cortinas" class="dropdown-item disabled" href="#">Em breve, novos tipos de cortinas</a>
          </div>
        </li>
      </ul>
  </div>
</nav>
