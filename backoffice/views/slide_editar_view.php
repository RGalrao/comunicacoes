<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["id"]);

if($form){
  $id = $_GET["id"];
  $ce = get_carousel_especifico($id);

  $form_2 = !empty($_GET["imagem"]) && isset($_GET["mostrar_na_home"]);
  if($form_2){
  $imagem = $_GET["imagem"];  
  $mostrar_na_home = $_GET["mostrar_na_home"];
    editar_carousel($imagem, $mostrar_na_home, $id);
    header("Location: home.php");
  }
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Editar Slide (<?= $ce["id"] ?>) - Menu Home</h2>
        <br>
        <form action="">
          <input type="hidden" name="id" value="<?= $ce["id"] ?>">

          <input type="text" name="imagem" placeholder="Imagem" value="<?= $ce["imagem"] ?>" class="w-50 text-center" required>
          <br>
          <a href="../tinyfilemanager-master/tinyfilemanager.php" target="_blank" class="mt-1 btn btn-dark">Gestor de ficheiros</a>
          <br><br>

          <label for="mostrar_na_home">Mostrar na Home:</label>
          <select name="mostrar_na_home" id="mostrar_na_home" required>
            <option value="1" <?= ($ce["mostrar_na_home"]) ? "selected" : "" ?>>Sim</option>
            <option value="0" <?= (!$ce["mostrar_na_home"]) ? "selected" : "" ?>>Não</option>
          </select>
          <br><br>


          <input type="submit" class="btn btn-warning" value="Editar Slide">
        </form>
      </div>
    </div>

  </main>