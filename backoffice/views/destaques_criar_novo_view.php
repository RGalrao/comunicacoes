<?php

require_once "../requisitos.php";

verificar_logado();

$form = isset($_GET["mostrar_na_home"]) && !empty($_GET["imagem"]) && !empty($_GET["titulo"]) && !empty($_GET["data"]) && !empty($_GET["texto"]);

if($form){
  $mostrar_na_home = $_GET["mostrar_na_home"];
  $imagem = $_GET["imagem"];
  $titulo = $_GET["titulo"];
  $data = $_GET["data"];
  $texto = $_GET["texto"];

  criar_novo_destaque($mostrar_na_home, $imagem, $titulo, $data, $texto);

  header("Location: destaques.php");
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Criar Novo - Menu Destaques</h2>
        <br>
        <form action="">
          <label for="mostrar_na_home">Mostrar na Home:</label>
          <select name="mostrar_na_home" id="mostrar_na_home" required>
            <option value="1">Sim</option>
            <option value="0">Não</option>
          </select>
          <br><br>

          <input type="text" name="imagem" placeholder="Imagem" required>
          <br>
          <a href="../tinyfilemanager-master/tinyfilemanager.php" target="_blank" class="mt-1 btn btn-dark">Gestor de ficheiros</a>
          <br><br>

          <input type="text" name="titulo" placeholder="Título" required>
          <br><br>

          <input type="text" name="data" placeholder="Data" required>
          <br><br>

          <textarea id="texto" name="texto" placeholder="Texto"></textarea>
          <script>tinymce.init({selector: '#texto'});</script>
          <br><br>

          <input type="submit" class="btn btn-primary" value="Criar Novo Destaque">
        </form>
      </div>
    </div>

  </main>
