<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["id"]);

if($form){
  $id = $_GET["id"];
  $de = get_destaque_especifico($id);

  $form_2 = isset($_GET["mostrar_na_home"]) && !empty($_GET["imagem"]) && !empty($_GET["titulo"]) && !empty($_GET["data"]) && !empty($_GET["texto"]);
  if($form_2){
  $mostrar_na_home = $_GET["mostrar_na_home"];
  $imagem = $_GET["imagem"];
  $titulo = $_GET["titulo"];
  $data = $_GET["data"];
  $texto = $_GET["texto"];
    editar_destaque($mostrar_na_home, $imagem, $titulo, $data, $texto, $id);
    header("Location: destaques.php");
  }
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Editar - Menu Destaques</h2>
        <br>
        <form action="">
          <input type="hidden" name="id" value="<?= $de["id"] ?>">

          <label for="mostrar_na_home">Mostrar na Home:</label>
          <select name="mostrar_na_home" id="mostrar_na_home" required>
            <option value="1" <?= ($de["mostrar_na_home"]) ? "selected" : "" ?>>Sim</option>
            <option value="0" <?= (!$de["mostrar_na_home"]) ? "selected" : "" ?>>Não</option>
          </select>
          <br><br>

          <input type="text" name="imagem" placeholder="Imagem" required value="<?= $de["imagem"] ?>">
          <br>
          <a href="../tinyfilemanager-master/tinyfilemanager.php" target="_blank" class="mt-1 btn btn-dark">Gestor de ficheiros</a>
          <br><br>

          <input type="text" name="titulo" placeholder="Título" required value="<?= $de["titulo"] ?>">
          <br><br>

          <input type="text" name="data" placeholder="Data" required value="<?= $de["data"] ?>">
          <br><br>

          <textarea id="texto" name="texto" placeholder="Texto"><?= $de["texto"] ?></textarea>
          <script>tinymce.init({selector: '#texto'});</script>
          <br><br>

          <input type="submit" class="btn btn-warning" value="Editar Destaque">
        </form>
      </div>
    </div>

  </main>