<?php

$home = get_home();
$destaques = get_destaques_home();

?>

  <main>
    <div class="container-fluid desktop"> <!-- MAIN DESKTOP -->
      <div class="row mt-5 pt-5">
        <div class="col-11 col-lg-9 px-0 mx-auto">

          <div class="container-fluid">
            <div class="row"> <!-- Titulo Bem Vindo -->
              <div class="col-12 text-center titulo">
                <?= $home["titulo"] ?>
              </div>
            </div>            
            <div class="row"> <!-- Subtitulo -->
              <div class="col-12 text-center subtitulo">
                <?= $home["subtitulo"] ?>
              </div>
            </div>
            <div class="row"> <!-- Texto -->
              <div class="col-12 text-center texto mt-3">
                <?= $home["texto"] ?>
              </div>
            </div>
            <div class="row mt-5 pt-2"> <!-- Titulo Destaques -->
              <div class="col-12 text-center titulo">
                Destaques
              </div>
            </div>
            <div class="row mt-5 pt-4"> <!-- Separador Destaques -->
              <div class="col-12 px-0">
                <div class="separador-grande"></div>
              </div>
            </div>
            <div class="row mt-5 mb-5"> <!-- Carousel Destaques DESKTOP-->
              <div class="col-12 px-0">
                <div id="carousel-destaques-desktop" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php foreach($destaques as $i => $d): ?>
                      <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-auto px-0">
                              <img src="<?= $d["imagem"] ?>" class="d-block" alt="<?= $d["imagem"] ?>">
                            </div>
                            <div class="col px-0 ms-2 ps-3 ps-xl-5 d-flex flex-column justify-content-between">
                              <div>
                                <div class="titulo"><?= $d["titulo"] ?></div>
                                <div class="data"><?= $d["data"] ?></div>
                                <div class="texto mt-1"><?= abreviar($d["texto"], 650) ?></div> 
                              </div>
                              <div class="text-end">
                                <a href="destaque_especifico.php?id=<?= $d["id"] ?>" class="botao-vermais">Ver Mais</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach ?>
                  </div>
                  <div class="carousel-indicators justify-content-end pe-0 pt-3 gap-1 gap-xl-2">
                    <?php foreach($destaques as $i => $d): ?>
                      <button type="button" class="<?= ($i == 0) ? "active" : "" ?>" data-bs-target="#carousel-destaques-desktop" data-bs-slide-to="<?= $i ?>"  aria-current="true" aria-label="Slide <?= $i+1 ?>"></button>
                    <?php endforeach ?>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-destaques-desktop" data-bs-slide="prev">
                    <img src="public/imgs/destaques/seta_azul_esquerda.svg" alt="Seta esquerda">
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carousel-destaques-desktop" data-bs-slide="next">
                    <img src="public/imgs/destaques/seta_azul_direita.svg" alt="Seta direita">
                  </button>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container-fluid mobile"> <!-- MAIN MOBILE -->

      <div class="row mt-5"> <!-- Main TEXTOS -->
        <div class="col-11 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row"> <!-- Titulo Bem Vindo -->
              <div class="col-12 text-center titulo">
                <?= $home["titulo"] ?>
              </div>
            </div>
            <div class="row"> <!-- Texto -->
              <div class="col-12 texto mt-3">
                <?= $home["texto"] ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4"> <!-- Titulo Destaques MOBILE -->
        <div class="col-12 text-center titulo">
          Destaques
        </div>
      </div>
      <div class="row mt-4 pt-2"> <!--Separador MOBILE -->
        <div class="col-12">
          <div class="separador-mobile"></div>
        </div>
      </div>
      <div class="row mt-3"> <!-- Carousel Destaques MOBILE-->
        <div class="col-9 mx-auto px-0">
          <div id="carousel-destaques-mobile" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php foreach($destaques as $i => $d): ?>
                <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12 px-0">
                        <img src="<?= $d["imagem"] ?>" class="d-block w-100" alt="<?= $d["imagem"] ?>">
                      </div>
                      <div class="col-12 px-0 d-flex flex-column justify-content-between">
                        <div>
                          <div class="titulo mt-3"><?= $d["titulo"] ?></div>
                          <div class="data mt-1"><?= $d["data"] ?></div>
                          <div class="texto mt-1"><?= abreviar($d["texto"], 400) ?></div> 
                        </div>
                        <div >
                          <a href="destaque_especifico.php?id=<?= $d["id"] ?>" class="botao-vermais">Ver Mais</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            </div>

            <div class="carousel-indicators justify-content-end pe-0 pt-3 gap-1">
              <?php foreach($destaques as $i => $d): ?>
                <button type="button" data-bs-target="#carousel-destaques-mobile" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? "active" : "" ?>" aria-current="true" aria-label="Slide <?= $i+1 ?>"></button>
              <?php endforeach ?>
            </div>

          </div>
        </div>
      </div>
    </div>

  </main>