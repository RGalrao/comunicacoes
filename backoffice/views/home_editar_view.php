<?php

require_once "../requisitos.php";

verificar_logado();
$h = get_home();
$form = !empty($_GET["titulo"]) && !empty($_GET["subtitulo"]) && !empty($_GET["texto"]);
if($form){
  $titulo = $_GET["titulo"];
  $subtitulo = $_GET["subtitulo"];
  $texto = $_GET["texto"];
  editar_home($titulo, $subtitulo, $texto);
  header("Location: home.php");
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Editar - Menu Home</h2>
        <br>
        <form action="">
          <input type="text" name="titulo" placeholder="Título" value="<?= $h["titulo"] ?>" class="w-25 text-center" required autofocus>
          <br><br>
          <input type="text" name="subtitulo" placeholder="Subtítulo" value="<?= $h["subtitulo"] ?>" class="w-50 text-center" required autofocus>
          <br><br>
          <textarea id="texto" name="texto" placeholder="Texto" ><?= $h["texto"] ?></textarea>
          <script>tinymce.init({selector: '#texto'});</script>
          <br><br>
          <input type="submit" class="btn btn-warning" value="Editar">
        </form>
      </div>
    </div>

  </main>