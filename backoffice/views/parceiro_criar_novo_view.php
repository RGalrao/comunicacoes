<?php

require_once "../requisitos.php";

verificar_logado();

$form =  !empty($_GET["nome"]) && !empty($_GET["logo"]) && isset($_GET["tamanho"]);

if($form){
  $nome = $_GET["nome"];
  $logo = $_GET["logo"];
  $tamanho = $_GET["tamanho"];

  criar_novo_parceiro($nome, $logo, $tamanho);

  header("Location: parceiros.php");
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Criar Novo - Menu Parceiros</h2>
        <br>
        <form action="">

          <input type="text" name="nome" placeholder="Nome do Parceiro" required>
          <br><br>

          <input type="text" name="logo" placeholder="Logo" required>
          <br>
          <a href="../tinyfilemanager-master/tinyfilemanager.php" target="_blank" class="mt-1 btn btn-dark">Gestor de ficheiros</a>
          <br><br>

          <label for="tamanho">Mostrar na Home:</label>
          <select name="tamanho" id="tamanho" required>
            <option value="1">Grande</option>
            <option value="0">Pequeno</option>
          </select>
          <br><br>

          <input type="submit" class="btn btn-primary" value="Criar Novo Parceiro">
        </form>
      </div>
    </div>

  </main>
