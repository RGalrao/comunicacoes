<?php

$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $ne = get_noticia_especifica($id);
}

?>

  <main>
    <div class="container-fluid desktop"> <!-- MAIN DESKTOP -->
      <div class="row mt-5 pt-2">
        <div class="col-11 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row"> <!-- Titulo -->
              <div class="col-12 text-end titulo-sec">
                <?= $ne["titulo"] ?>
              </div>
            </div>
            <div class="row mt-5"> <!-- Texto -->
              <div class="col-12 text-justify texto">
                <?= $ne["texto"] ?>
              </div>
            </div>
            <div class="row"> <!-- Botão Voltar -->
              <div class="col-12 text-end">
                <a href="noticias.php?>" class="botao-vermais">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid mobile"> <!-- MAIN MOBILE -->
      
      <div class="row mt-4"> <!-- Titulo -->
        <div class="col-12 text-center titulo-sec">
          <?= $ne["titulo"] ?>
        </div>
      </div>
      <div class="row mt-4"> <!-- Texto -->
        <div class="col-12 text-justify texto">
          <?= $ne["texto"] ?>
        </div>
      </div>
      <div class="row"> <!-- Botão Voltar -->
        <div class="col-12 text-end">
          <a href="noticias.php?>" class="botao-vermais">Voltar</a>
        </div>
      </div>
    </div>

  </main>
