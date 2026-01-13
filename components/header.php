<?php

require_once "requisitos.php";

$carousel = get_carousel_a_mostrar();
$empresa = get_empresa_menu();
$solucoes = get_solucoes_menu();
$inovacoes = get_inovacoes_menu();
$contactos = get_contactos();

?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>rodrigo_galrao_trabalho_final</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/fonts/fonts.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- JS -->
  <script src="js/funcoes.js" defer></script>
  <script src="js/main.js" defer></script>
  
  <!-- RECAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    var menu_atual = "<?= $menu_atual ?>";
  </script>
</head>

<body>

  <header>

    <div class="container-fluid desktop"> <!-- HEADER DESKTOP -->

      <div class="row mt-4"> <!-- img LOGO DESKTOP-->
        <div class="col-12 text-center">
          <a href="index.php"><img src="public/imgs/Logo.png" alt="Logotipo Comunicacoes" class="logo-topo">
          </a>
        </div>
      </div>

      <div class="row pe-5"><!-- icones socials DESKTOP-->
        <div class="col-12 d-flex justify-content-end pe-5 icones">
          <a href="contactos.php">
            <img src="public/imgs/icones/Contactos.svg" alt="Contactos" class="icone">
          </a>
          <div class="separador-icones-topo"></div>
          <a href="<?= $contactos["linkedin"] ?>" target="_blank">
            <img src="public/imgs/icones/LinkedIn.svg" alt="LinkedIn" class="icone">
          </a>
          <a href="<?= $contactos["instagram"] ?>" target="_blank">
            <img src="public/imgs/icones/Instagram.svg" alt="Instagram" class="icone">
          </a>
          <a href="<?= $contactos["facebook"] ?>" target="_blank">
            <img src="public/imgs/icones/Facebook.svg" alt="Facebook" class="icone">
          </a>
        </div>
      </div>

      <?php if ($menu_atual == "index"): ?>
        <div class="row mt-4"> <!-- Carousel Header DESKTOP-->
          <div class="col-12 px-0">
            <div id="carousel-topo-desktop" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators pe-5">
                <?php foreach ($carousel as $i => $c): ?>
                  <button type="button" class="<?= ($i == 0) ? "active" : "" ?>" data-bs-target="#carousel-topo-desktop" data-bs-slide-to="<?= $i ?>" aria-current="true" aria-label="Slide <?= $i + 1 ?>"></button>
                <?php endforeach ?>
              </div>

              <div class="carousel-inner">
                <?php foreach ($carousel as $i => $c): ?>
                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $c["imagem"] ?>" class="d-block w-100" alt="<?= $c["imagem"] ?>">
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="row mt-4"> <!-- Banner Header DESKTOP-->
          <div class="col-12 px-0">
            <div id="carousel-topo-desktop">
              <img src="<?= get_banner($menu_atual) ?>" alt="<?= get_banner($menu_atual) ?>" class="w-100">
            </div>
          </div>
        </div>
      <?php endif ?>

      <div class="row"> <!-- Nav Header DESKTOP-->
        <div class="col-xl-11 col-xxl-10 mx-auto">
          <nav class="navbar navbar-expand p-0" id="navbar-topo-desktop">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-0 mx-auto justify-content-evenly">

                  <li class="nav-item dropdown">
                    <a id="empresa" onmouseenter="empresa.click()" class="nav-link <?= ($menu_atual == "empresa") ? "nav-active" : "" ?>" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Empresa
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach ($empresa as $e): ?>
                        <li><a class="dropdown-item <?= ($menu_atual == "empresa" && $e["id"] == $_GET["id"]) ? "active" : "" ?>" href="empresa.php?id=<?= $e["id"] ?>"><?= $e["titulo"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "nav-active" : "" ?>" aria-current="page" href="destaques.php">Destaques</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "noticias" || $menu_atual == "noticia_especifica") ? "nav-active" : "" ?>" aria-current="page" href="noticias.php">Noticias e Eventos</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="solucoes" onmouseenter="solucoes.click()" class="nav-link <?= ($menu_atual == "solucoes") ? "nav-active" : "" ?>" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Soluções
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach ($solucoes as $s): ?>
                        <li><a class="dropdown-item <?= ($menu_atual == "solucoes" && $s["id"] == $_GET["id"]) ? "active" : "" ?>" href="solucoes.php?id=<?= $s["id"] ?>"><?= $s["titulo"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="inovacoes" onmouseenter="inovacoes.click()" class="nav-link <?= ($menu_atual == "inovacoes") ? "nav-active" : "" ?>" href="index.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Inovação e Tecnologia
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach ($inovacoes as $i): ?>
                        <li><a class="dropdown-item <?= ($menu_atual == "inovacoes" && $i["id"] == $_GET["id"]) ? "active" : "" ?>" href="inovacoes.php?id=<?= $i["id"] ?>"><?= $i["titulo"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "parceiros") ? "nav-active" : "" ?>" aria-current="page" href="parceiros.php">Os Nossos Parceiros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "contactos") ? "nav-active" : "" ?>" aria-current="page" href="contactos.php">Contactos</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="container-fluid mobile"> <!-- HEADER MOBILE -->
      <div class="row mt-3 pe-2"> <!-- BOTÂO Nav Header MOBILE-->
        <div class="col-12 d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="public/imgs/icones/menu-sanduiche.svg" alt="Menu" width="45" height="25" onclick="mudar_icone(this)">
          </button>
        </div>
      </div>
      <div class="row" id="inicio-mobile"> <!-- img LOGO MOBILE-->
        <div class="col-6 text-center">
          <a href="index.php"><img src="public/imgs/Logo.png" alt="Logotipo Comunicacoes" class="logo-topo" >
          </a>
        </div>

        <div class="col-6 d-flex justify-content-end align-items-end gap-2 icones">
          <a href="contactos.php">
            <img src="public/imgs/icones/Contactos.svg" alt="Contactos" class="icone">
          </a>
          <div class="separador-icones-topo"></div>
          <a href="<?= $contactos["linkedin"] ?>" target="_blank">
            <img src="public/imgs/icones/LinkedIn.svg" alt="LinkedIn" class="icone">
          </a>
          <a href="<?= $contactos["instagram"] ?>" target="_blank">
            <img src="public/imgs/icones/Instagram.svg" alt="Instagram" class="icone">
          </a>
          <a href="<?= $contactos["facebook"] ?>" target="_blank">
            <img src="public/imgs/icones/Facebook.svg" alt="Facebook" class="icone">
          </a>
        </div>
      </div>
      <div class="row mt-3"> <!-- Nav Header MOBILE-->
        <div class="col-12 px-0">
          <nav class="navbar" id="navbar-topo-mobile">
            <div class="container-fluid px-0">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($menu_atual == "empresa") ? "active" : "" ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Empresa
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach ($empresa as $e): ?>
                        <li><a class="dropdown-item <?= ($menu_atual == "empresa" && $e["id"] == $_GET["id"]) ? "active" : "" ?>" href="empresa.php?id=<?= $e["id"] ?>"><?= $e["titulo"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "active" : "" ?>" aria-current="page" href="destaques.php">Destaques</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "noticias" || $menu_atual == "noticia_especifica") ? "active" : "" ?>" href="noticias.php">Noticias e Eventos</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($menu_atual == "solucoes") ? "active" : "" ?>" href="solucoes.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Soluções
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach ($solucoes as $s): ?>
                        <li><a class="dropdown-item <?= ($menu_atual == "solucoes" && $s["id"] == $_GET["id"]) ? "active" : "" ?>" href="solucoes.php?id=<?= $s["id"] ?>"><?= $s["titulo"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($menu_atual == "inovacoes") ? "active" : "" ?>" href="inovacao.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Inovação e Tecnologia
                    </a>
                    <ul class="dropdown-menu">
                      <?php foreach ($inovacoes as $i): ?>
                        <li><a class="dropdown-item <?= ($menu_atual == "inovacoes" && $i["id"] == $_GET["id"]) ? "active" : "" ?>" href="inovacoes.php?id=<?= $i["id"] ?>"><?= $i["titulo"] ?></a></li>
                      <?php endforeach ?>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "parceiros") ? "active" : "" ?>" aria-current="page" href="parceiros.php">Os nossos parceiros</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($menu_atual == "contactos") ? "active" : "" ?>" aria-current="page" href="contactos.php">Contactos</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <?php if ($menu_atual == "index"): ?>
        <div class="row"> <!-- Carousel Header MOBILE-->
          <div class="col-12 px-0">
            <div id="carousel-topo-mobile" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php foreach ($carousel as $i => $c): ?>
                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $c["imagem"] ?>" class="d-block w-100" alt="<?= $c["imagem"] ?>">
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="row"> <!-- Banner Header MOBILE-->
          <div class="col-12 px-0">
            <div id="carousel-topo-mobile">
              <div class="banner">
                <img src="<?= get_banner($menu_atual) ?>" alt="<?= get_banner($menu_atual) ?>" class="w-100">
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
    </div>

  </header>