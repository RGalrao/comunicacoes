<?php

$contactos = get_contactos();

$form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["assunto"]) && !empty($_POST["mensagem"]) && !empty($POST["g-recaptcha-response"]);

if($form){
  $g_recaptcha_resposnse = $POST["g-recaptcha-response"];
  $chave_secreta = "6Lc2U0QsAAAAADGr9o91U7hS1XXdPzZoglpE4t5O";
  $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$chave_secreta&response=$g_recaptcha_resposnse");
  $google = json_decode($resposta);

  if($google -> success){

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    // Enviar email para dono do site
    mail("owner-email@email.com", "ASSUNTO - Contacto de cliente", $mensagem);

    if(!empty($_POST["receber_email"])){
      // Enviar copia de email para cliente que submeteu o formulario
      mail($email, "Contacto Comunicações", $mensagem);
    }

  }

}
?>

<main>
  <div class="container-fluid desktop desktop-contactos"> <!-- MAIN DESKTOP -->
    <div class="row mt-5 pt-5">
      <div class="col-12 col-lg-10 px-0 mx-auto">

        <div class="container-fluid">

          <div class="row"> <!-- Titulo -->
            <div class="col-12 text-center titulo">
              Contactos
            </div>
          </div>

          <div class="row px-5 mt-5 mb-5">

            <div class="col-12 col-lg-4 ps-5 ms-5">
              <div class="subtitulo-contactos">
                <h4>
                  <?= $contactos["morada"] ?>
                </h4>
              </div>
              <div class="mt-4 tele-fax d-flex gap-5">
                <div class="telefone">
                  <h4 class="m-0 subtitulo-contactos">Telefone</h4>
                  <div class="p-0 info-contactos"><?= $contactos["telefone"] ?></div>
                </div>
                <div class="fax">
                  <h4 class="m-0 subtitulo-contactos">Fax</h4>
                  <div class="p-0 info-contactos"><?= $contactos["fax"] ?></div>
                </div>
              </div>
              <div class="e-mail">
                <h4 class="m-0 mt-2 subtitulo-contactos">E-mail</h4>
                <div class="p-0 info-contactos"><?= $contactos["email"] ?></div>
              </div>
              <div class="mt-4 contribuinte">
                <h4 class="m-0 subtitulo-contactos">Contribuinte</h4>
                <div class="p-0 info-contactos"><?= $contactos["nif"] ?></div>
              </div>
              <div class="mt-4 gps">
                <h4 class="m-0 subtitulo-contactos">GPS</h4>
                <div class="p-0 info-contactos"><?= $contactos["coordenadas"] ?></div>
              </div>
            </div>

            <div class="col-12 col-lg-7 ps-5 ms-3">
              <form action="" method="post" autocomplete="off">
                <label for="nome" class="dados-cliente">*NOME</label><br>
                <input type="text" name="nome" id="nome" minlength="3" required placeholder="Insira aqui o seu nome"><br>
                <label for="email" class="mt-4 dados-cliente">*E-MAIL</label><br>
                <input type="email" name="email" id="email" required placeholder="Insira aqui o seu e-mail"><br>
                <label for="telefone" class="mt-4 dados-cliente">*TELEFONE</label><br>
                <input type="number" name="telefone" id="telefone" minlength="9" maxlength="16" required placeholder="Insira aqui o seu telefone"><br>
                <label for="assunto" class="mt-4 dados-cliente">*ASSUNTO</label><br>
                <input type="text" name="assunto" id="assunto" minlength="3" required placeholder="Insira aqui o assunto"><br>
                <label for="mensagem" class="mt-4 dados-cliente">*MENSAGEM</label><br>
                <textarea name="mensagem" id="mensagem" minlength="5" placeholder="Insira aqui a mensagem"></textarea>
                <div class="d-flex gap-4 mt-1">
                  <div>
                    <p>*Campos de preenchimento obrigatório</p>
                    <input type="checkbox" name="receber_email" id="receber_email_checkbox">
                    <label for="receber_email_checkbox">Quero receber uma cópia desta mensagem no meu e-mail.</label>
                  </div>
                  <div>
                    <div class="g-recaptcha" data-sitekey="6Lc2U0QsAAAAAMqcohFeCthXGrslOFYIHCjwDhVk"></div>
                  </div>
                </div>
                <div class="d-flex justify-content-end mt-3 pe-4 me-3">
                  <input type="submit" class="botao-enviar" value="Enviar">
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 p-0 m-auto mb-0">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d596.318228892003!2d-9.087164210793361!3d38.87058860228257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd192eba4d8711bf%3A0x7a1975ddaa0a248e!2sR.%20da%20Felicidade%2C%20Vialonga!5e1!3m2!1spt-PT!2spt!4v1767973765312!5m2!1spt-PT!2spt" 
          width="100%" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>
  </div>

  <div class="container-fluid mobile mobile-contactos"> <!-- MAIN MOBILE -->
    <div class="row mt-5 pt-5">
      <div class="col-12 col-lg-10 px-0 mx-auto">

        <div class="container-fluid">

          <div class="row"> <!-- Titulo -->
            <div class="col-12 text-center titulo">
              Contactos
            </div>
          </div>

          <div class="row px-4 mt-5 mb-5">
            <div class="col-12 mb-5">

              <div class="subtitulo-contactos">
                <h4>
                  <?= $contactos["morada"] ?>
                </h4>
              </div>

              
              <div class="telefone">
                <h4 class="m-0 subtitulo-contactos">Telefone</h4>
                <div class="p-0 info-contactos"><?= $contactos["telefone"] ?></div>
              </div>
              <div class="fax">
                <h4 class="m-0 subtitulo-contactos">Fax</h4>
                <div class="p-0 info-contactos"><?= $contactos["fax"] ?></div>
              </div>
              <div class="e-mail">
                <h4 class="m-0 subtitulo-contactos">E-mail</h4>
                <div class="p-0 info-contactos"><?= $contactos["email"] ?></div>
              </div>
              <div class="mt-4 contribuinte">
                <h4 class="m-0 subtitulo-contactos">Contribuinte</h4>
                <div class="p-0 info-contactos"><?= $contactos["nif"] ?></div>
              </div>
              <div class="mt-4 gps">
                <h4 class="m-0 subtitulo-contactos">GPS</h4>
                <div class="p-0 info-contactos"><?= $contactos["coordenadas"] ?></div>
              </div>
            </div>

            <div class=" col-12">
              <form action="" method="post" autocomplete="off">
                <label for="nome" class="dados-cliente">*NOME</label><br>
                <input type="text" name="nome" id="nome" required placeholder="Insira aqui o seu nome"><br>
                <label for="email" class="mt-4 dados-cliente">*E-MAIL</label><br>
                <input type="email" name="email" id="email" required placeholder="Insira aqui o seu e-mail"><br>
                <label for="telefone" class="mt-4 dados-cliente">*TELEFONE</label><br>
                <input type="number" name="telefone" id="telefone" required placeholder="Insira aqui o seu telefone"><br>
                <label for="assunto" class="mt-4 dados-cliente">*ASSUNTO</label><br>
                <input type="text" name="assunto" id="assunto" required placeholder="Insira aqui o assunto"><br>
                <label for="mensagem" class="mt-4 dados-cliente">*MENSAGEM</label><br>
                <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a mensagem"></textarea>
                <p>*Campos de preenchimento obrigatório</p>
                <input type="checkbox" name="receber_email" id="receber_email_checkbox">
                <label for="receber_email_checkbox">Quero receber uma cópia desta mensagem no meu e-mail.</label>

                <div class="p-0">
                  <div id="recaptcha-mobile" class="mt-3">
                    <div class="g-recaptcha" data-sitekey="6Lc2U0QsAAAAAMqcohFeCthXGrslOFYIHCjwDhVk"></div>
                  </div>
                  <div class="d-flex justify-content-end pe-3 mt-3">
                    <input type="submit" class="botao-enviar" value="Enviar">
                  </div>
                </div>

              </form>
            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-12 p-0 m-0 m-auto">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d596.318228892003!2d-9.087164210793361!3d38.87058860228257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd192eba4d8711bf%3A0x7a1975ddaa0a248e!2sR.%20da%20Felicidade%2C%20Vialonga!5e1!3m2!1spt-PT!2spt!4v1767973765312!5m2!1spt-PT!2spt" 
          width="100%" 
          height="250" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>

</main>