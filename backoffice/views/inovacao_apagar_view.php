<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["id"]);

if($form){
  $id = $_GET["id"];
  $ie = get_inovacao_especifica($id);
  $form_2 = !empty($_GET["resposta"]);
  if($form_2){
    apagar_inovacao($id);
    header("Location: inovacao.php");
  }
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Apagar - Menu Inovação e Tecnologia</h2>
        <br><br>
        <h4 style="color: red;">Tem a certeza que pretende apagar o menu: <br> (<?= $ie["titulo"] ?>) ?</h4>
        <br>
        <form action="">
          <input type="hidden" name="id" value="<?= $ie["id"] ?>" >
          <input type="hidden" name="resposta" value="sim">
          <input type="submit" class="btn btn-success" value="Sim">
          <a href="inovacao.php" class="btn btn-danger">Não</a>
        </form>
      </div>
    </div>

  </main>