<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["imagem"]) && isset($_GET["mostrar_na_home"]);

if($form){
  $imagem = $_GET["imagem"];
  $mostrar_na_home = $_GET["mostrar_na_home"];

  criar_novo_carousel($imagem, $mostrar_na_home);

  header("Location: home.php");
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Criar Novo Slide- Menu Home</h2>
        <br>
        <form action="">

          <input type="text" name="imagem" placeholder="Imagem" required>
          <br>
          <a href="../tinyfilemanager-master/tinyfilemanager.php" target="_blank" class="mt-1 btn btn-dark">Gestor de ficheiros</a>
          <br><br>

          <label for="mostrar_na_home">Mostrar na Home:</label>
          <select name="mostrar_na_home" id="mostrar_na_home" required>
            <option value="1">Sim</option>
            <option value="0">Não</option>
          </select>
          <br><br>

          <input type="submit" class="btn btn-primary" value="Criar Novo Slide">
        </form>
      </div>
    </div>

  </main>
