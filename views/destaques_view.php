<?php

$pagina = $_GET["pagina"] ?? 1;
$total_paginas = get_destaques_total_paginas();
if($pagina < 1){$pagina = 1;}
elseif($pagina >= $total_paginas){$pagina = $total_paginas;}

$destaques = get_destaques_pagina($pagina);

?>

  <main>
    <div class="container-fluid desktop"> <!-- MAIN DESKTOP -->

      <div class="row mt-5 pt-2">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">

            <div class="row"> <!-- Titulo -->
              <div class="col-12 text-center titulo-sec">
                Destaques
              </div>
            </div>

            <div class="row mt-5 gy-5"> <!-- Cards -->

              <?php foreach($destaques as $d): ?>
                <div class="col-10 col-xl-6 mx-auto px-3 caixa">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12 px-0">
                        <img src="<?= $d["imagem"] ?>" alt="<?= $d["imagem"] ?>" class="w-100 img-destaques">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-11 mx-auto caixa-branca p-4">
                        <div class="titulo"><?= $d["titulo"] ?></div>
                        <div class="data"><?= $d["data"] ?></div>
                        <div class="texto"><?= abreviar($d["texto"], 400) ?></div>
                        <div class="text-center mt-4">
                          <a href="destaque_especifico.php?id=<?= $d["id"] ?>" class="botao-vermais">Ver Mais</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>

            </div>

            <div class="row mt-5"> <!-- Paginação -->
              <div class="col-12 px-0 paginacao d-flex justify-content-center align-items-center gap-2">
                
                <a href="destaques.php?pagina=<?= $pagina - 1 ?>" class="voltar"></a>
                  <?php for($i=1; $i<=$total_paginas; $i++): ?> 
                    <a href="destaques.php?pagina=<?= $i ?>" class="numero <?= ($pagina == $i) ? "active" : "" ?>"><?= $i ?></a>
                  <?php endfor ?>
                <a href="destaques.php?pagina=<?= $pagina + 1 ?>" class="proximo"></a>
                
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid mobile mt-5"> <!-- MAIN MOBILE -->

      <div class="row"> <!-- Titulo -->
        <div class="col-12 text-center titulo-sec">
          Destaques
        </div>
      </div>

      <div class="row mt-0 gy-5"> <!-- Cards -->

        <?php foreach($destaques as $d): ?>
          <div class="col-12 col-sm-9 col-xl-6 mx-0 mx-sm-auto caixa">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-12 px-0">
                  <img src="<?= $d["imagem"] ?>" alt="<?= $d["imagem"] ?>" class="w-100">
                </div>
              </div>
              <div class="row">
                <div class="col-11 mx-auto caixa-branca p-4">
                  <div class="titulo"><?= $d["titulo"] ?>.</div>
                  <div class="data"><?= $d["data"] ?></div>
                  <div class="texto mt-2"><?= abreviar($d["texto"], 400) ?></div>
                  <div class="text-center mt-4">
                    <a href="destaque_especifico.php?id=<?= $d["id"] ?>" class="botao-vermais">Ver Mais</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>

      </div>

      <div class="row mt-5 pb-4"> <!-- Paginação -->
        <div class="col-12 px-0 paginacao d-flex justify-content-center align-items-center gap-2">

          <a href="destaques.php?pagina=<?= $pagina - 1 ?>" class="voltar"></a>
            <?php for($i=1; $i<=$total_paginas; $i++): ?> 
              <a href="destaques.php?pagina=<?= $i ?>" class="numero <?= ($pagina == $i) ? "active" : "" ?>"><?= $i ?></a>
            <?php endfor ?>
          <a href="destaques.php?pagina=<?= $pagina + 1 ?>" class="proximo"></a>

        </div>
      </div>
      
    </div>

  </main>

