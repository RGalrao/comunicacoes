<?php

require_once "../requisitos.php";

verificar_logado();

$form = !empty($_GET["id"]);

if($form){
  $id = $_GET["id"];
  $ee = get_empresa_especifica($id);
  $form_2 = !empty($_GET["resposta"]);
  if($form_2){
    apagar_empresa($id);
    header("Location: empresa.php");
  }
}

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Apagar - Menu Empresa</h2>
        <br><br>
        <h4 style="color: red;">Tem a certeza que pretende apagar o menu: <br> (<?= $ee["titulo"] ?>) ?</h4>
        <br>
        <form action="">
          <input type="hidden" name="id" value="<?= $ee["id"] ?>" >
          <input type="hidden" name="resposta" value="sim">
          <input type="submit" class="btn btn-success" value="Sim">
          <a href="empresa.php" class="btn btn-danger">Não</a>
        </form>
      </div>
    </div>

  </main>