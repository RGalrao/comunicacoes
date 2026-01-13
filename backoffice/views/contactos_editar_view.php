<?php

require_once "../requisitos.php";

verificar_logado();

$c = get_contactos();

$form = !empty($_GET["morada"]) && !empty($_GET["telefone"]) && !empty($_GET["fax"]) && !empty($_GET["email"]) && !empty($_GET["nif"]) && !empty($_GET["coordenadas"]) && !empty($_GET["linkedin"]) && !empty($_GET["instagram"]) && !empty($_GET["facebook"]);

if($form){
  $morada = $_GET["morada"];
  $telefone = $_GET["telefone"];
  $fax = $_GET["fax"];
  $email = $_GET["email"];
  $nif = $_GET["nif"];
  $coordenadas = $_GET["coordenadas"];
  $linkedin = $_GET["linkedin"];
  $instagram = $_GET["instagram"];
  $facebook = $_GET["facebook"];
  editar_contactos($morada, $telefone, $fax, $email, $nif, $coordenadas, $linkedin, $instagram, $facebook, $id);
  header("Location: contactos.php");
}


?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">
        <h2>Editar - Menu Contactos</h2>
        <br>
        <form action="">

          <input type="text" name="morada" placeholder="Morada" value="<?= $c["morada"] ?>" class="text-center w-50" required>
          <br><br>
          <input type="text" name="telefone" placeholder="Telefone" value="<?= $c["telefone"] ?>" class="text-center" required>
          <br><br>
          <input type="text" name="fax" placeholder="Fax" value="<?= $c["fax"] ?>" class="text-center" required>
          <br><br>
          <input type="text" name="email" placeholder="Email" value="<?= $c["email"] ?>" class="text-center w-25" required>
          <br><br>
          <input type="text" name="nif" placeholder="Nif" value="<?= $c["nif"] ?>" class="text-center" required>
          <br><br>
          <input type="text" name="coordenadas" placeholder="Coordenadas GPS" value="<?= htmlentities($c["coordenadas"]) ?>" class="text-center w-50" required>
          <br><br>
          <input type="url" name="linkedin" placeholder="Linkedin" value="<?= $c["linkedin"] ?>" class="text-center w-25" required>
          <br><br>
          <input type="url" name="instagram" placeholder="Instagram" value="<?= $c["instagram"] ?>" class="text-center w-25" required>
          <br><br>
          <input type="url" name="facebook" placeholder="Facebook" value="<?= $c["facebook"] ?>" class="text-center w-25" required>
          <br><br>
          

          <input type="submit" class="btn btn-warning" value="Editar Contactos">
        </form>
      </div>
    </div>

  </main>