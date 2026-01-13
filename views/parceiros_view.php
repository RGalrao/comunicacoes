<?php

$parceiros = get_parceiros();

?>

  <main>
    <div class="container-fluid desktop"> <!-- MAIN DESKTOP -->
      <div class="row mt-5 pt-2">
        <div class="col-11 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row"> <!-- Titulo -->
              <div class="col-12 text-center titulo-sec">
                Os Nossos Parceiros
              </div>
            </div>
            <div class="row mt-5 "> <!-- IMGs -->
              <?php foreach($parceiros as $p): ?>
                <div class="<?= ($p["tamanho"] === 1) ? "col-12" : "col-6" ?> m-auto d-flex justify-content-center align-items-center">
                  <img src="<?= $p["logo"] ?>" alt="<?= $p["logo"] ?>" class="parceiro">
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid mobile"> <!-- MAIN MOBILE -->
      <div class="row mt-5 pt-2">
        <div class="col-11 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row"> <!-- Titulo -->
              <div class="col-12 text-center titulo-sec">
                Os Nossos Parceiros
              </div>
            </div>
            <div class="row mt-5 mb-3 d-flex justify-content-center align-items-center gap-5"> <!-- IMGs -->
              <?php foreach($parceiros as $p): ?>
                <div class="col-12 m-auto parceiro">
                  <img src="<?= $p["logo"] ?>" alt="<?= $p["logo"] ?>" class="parceiro">
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
