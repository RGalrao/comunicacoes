<?php

require_once "../requisitos.php";

$form = !empty($_POST["login"]) && !empty($_POST["senha"]);
if($form){
  $login = $_POST["login"];
  $senha = $_POST["senha"];
  fazer_login_cript($login, $senha);
}

?>

  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-7 col-md-4 m-auto mt-4 border border-4 border-info rounded-4 p-4">

        <h2>LOGIN</h2>
        <br>

        <?php if($form): ?>
          <h5 class="text-danger">Login inválido</h5>
        <?php endif ?>
        <form action="" method="post" autocomplete="off">
          <input type="text" name="login" placeholder="Login" class="text-center" required autofocus>
          <br><br>
          <input type="password" name="senha" placeholder="Senha" class="text-center" required>
          <br><br>
          <input type="submit" class="btn btn-primary" value="ENTRAR">
        </form>

      </div>
    </div>
  </main>