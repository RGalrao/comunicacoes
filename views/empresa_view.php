<?php

$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $ee = get_empresa_especifica($id);
}

?>

  <main>
    <div class="container-fluid desktop"> <!-- MAIN DESKTOP -->
      <div class="row mt-5 pt-2">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row"> <!-- Titulo -->
              <div class="col-12 text-end titulo-sec">
                Empresa - <?= $ee["titulo"] ?>
              </div>
            </div>
            <div class="row mt-5"> <!-- Texto -->
              <div class="col-12 text-justify texto">
                <?= $ee["texto"] ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mobile"> <!-- MAIN MOBILE -->
      
      <div class="row mt-4"> <!-- Titulo -->
        <div class="col-12 text-center titulo-sec">
          Empresa - <?= $ee["titulo"] ?>
        </div>
      </div>
      <div class="row mt-4"> <!-- Texto -->
        <div class="col-12 text-justify texto">
          <?= $ee["texto"] ?>
        </div>
      </div>
    </div>

  </main>
