<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["id"]);

if($form){
  $id = $_GET["id"];
  $ie = get_inovacao_especifica($id);

  $form_2 = !empty($_GET["titulo"]) && !empty($_GET["texto"]);
  if($form_2){
    $titulo = $_GET["titulo"];
    $texto = $_GET["texto"];
    editar_inovacao($titulo, $texto, $id);
    header("Location: inovacao.php");
  }
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Editar - Menu Inovações e Tecnologia</h2>
        <br>
        <form action="">
          <input type="hidden" name="id" value="<?= $ie["id"] ?>" >
          <input type="text" name="titulo" placeholder="Título" value="<?= $ie["titulo"] ?>" required autofocus>
          <br><br>
          <textarea id="texto" name="texto" placeholder="Texto" ><?= $ie["texto"] ?></textarea>
          <script>tinymce.init({selector: '#texto'});</script>
          <br><br>
          <input type="submit" class="btn btn-warning" value="Editar Menu">
        </form>
      </div>
    </div>

  </main>