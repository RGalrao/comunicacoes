<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["menu"]);

if($form){
  $menu= $_GET["menu"];
  $banner = get_banner($menu);

  $form_2 = !empty($_GET["imagem"]) && !empty($_GET["menu"]);
  if($form_2){
    $imagem = $_GET["imagem"];
    $menu = $_GET["menu"];
      editar_banner($imagem, $menu);
      header("Location: inicio.php");
  }
}
?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Editar Banner - Menu <?= $menu ?></h2>
        <br>
        <form action="">

          <input type="hidden" name="menu" value="<?= $menu ?>">
          <input type="text" name="imagem" placeholder="Imagem" value="<?= get_banner($menu) ?>" class="w-50 text-center" required>
          <br>
          <a href="../tinyfilemanager-master/tinyfilemanager.php" target="_blank" class="mt-1 btn btn-dark">Gestor de ficheiros</a>
          <br><br>

          <input type="submit" class="btn btn-warning" value="Editar Banner">
        </form>
      </div>
    </div>

  </main>
<!-- 


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
} -->