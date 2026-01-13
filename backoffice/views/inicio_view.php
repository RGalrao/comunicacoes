<?php

require_once "../requisitos.php";
verificar_logado();

?>

  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-7 col-md-4 m-auto mt-4 border border-4 border-info rounded-4 p-4">

        <h3>Bem vindo <?= $colaborador["nome"] ?></h3>
        <br>
        <h4>Data do último acesso: (<?= date("H:i:s - d/m/Y",strtotime($colaborador["data_ultimo_acesso"])) ?>)</h4>
      </div>
    </div>
  </main>