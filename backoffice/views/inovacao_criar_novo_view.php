<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["titulo"]) && !empty($_GET["texto"]);

if($form){
  $titulo = $_GET["titulo"];
  $texto = $_GET["texto"];
  criar_nova_inovacao($titulo, $texto);

  header("Location: inovacao.php");
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Criar Novo - Menu Inovação e Tecnologia</h2>
        <br>
        <form action="">
          <input type="text" name="titulo" placeholder="Título" required autofocus>
          <br><br>
          <textarea id="texto" name="texto" placeholder="Texto"></textarea>
          <script>tinymce.init({selector: '#texto'});</script>
          <br><br>
          <input type="submit" class="btn btn-primary" value="Criar Novo Menu">
        </form>
      </div>
    </div>

  </main>