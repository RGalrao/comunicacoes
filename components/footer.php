<?php

$noticias = get_noticias_home();

?>

  <footer>

    <div class="container-fluid desktop <?= ($menu_atual != "contactos") ? "pt-5 mt-5": "" ?> "> <!-- FOOTER DESKTOP -->

      <?php if($menu_atual != "contactos"): ?>

        <div class="row pt-4 mt-3"> <!-- Texto Últimas Noticias e Eventos DESKTOP-->
          <div class="col-12 text-center titulo">
            Últimas Noticias e Eventos
          </div>
        </div>
        <div class="row mt-5 pt-3"> <!-- Carousel Noticias DESKTOP-->
          <div class="col-12 px-0">
            <div id="carousel-noticias-desktop" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php foreach($noticias as $i => $n): ?>
                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                  <img src="<?= $n["imagem"] ?>" class="d-block w-100" alt="<?= $n["imagem"] ?>">
                  <div class="carousel-caption text-start d-flex flex-column justify-content-between">
                    <div>
                      <div class="titulo"><?= $n["titulo"] ?></div>
                      <div class="data"><?= $n["data"] ?></div>
                      <div class="texto"><?= abreviar($n["texto"], 700) ?></div>
                    </div>
                    <div>
                      <a href="noticia_especifica.php?id=<?= $n["id"] ?>" class="botao-vermais">Ver Mais</a>
                    </div>
                  </div>
                  </div>
                <?php endforeach ?>
              </div>
              <div class="carousel-indicators mt-4">
                <div class="container-fluid">
                  <div class="row justify-content-end">
                    <div class="col-auto px-0 pai-buttons d-flex gap-2">
                      <?php foreach($noticias as $i => $n): ?>
                        <button type="button" data-bs-target="#carousel-noticias-desktop" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? "active" : "" ?>" aria-current="true" aria-label="Slide <?= $i+1 ?>"></button>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php endif ?>

      <div class="row "> <!-- Nav Footer DESKTOP-->
        <div class="col-12 px-0">
          <nav class="d-flex justify-content-center gap-2 gap-xxl-3 pb-4">
            <a href="#" onclick="abrir_menu(empresa)" class="<?= ($menu_atual == "empresa") ? "nav-footer-active" : "" ?>">Empresa</a>
            <a href="destaques.php" class="<?= ($menu_atual == "destaques" || $menu_atual == "destaque_especifico") ? "nav-footer-active" : "" ?>">Destaques</a>
            <a href="noticias.php" class="<?= ($menu_atual == "noticias" || $menu_atual == "noticia_especifica") ? "nav-footer-active" : "" ?>">Noticias e Eventos</a>
            <a href="#" onclick="abrir_menu(solucoes)" class="<?= ($menu_atual == "solucoes") ? "nav-footer-active" : "" ?>">Soluções</a>
            <a href="#" onclick="abrir_menu(inovacoes)" class="<?= ($menu_atual == "inovacoes") ? "nav-footer-active" : "" ?>">Inovação e Tecnologia</a>
            <a href="parceiros.php" class="<?= ($menu_atual == "parceiros") ? "nav-footer-active" : "" ?>">Os nossos parceiros</a>
            <a href="contactos.php" class="<?= ($menu_atual == "contactos") ? "nav-footer-active" : "" ?>">Contactos</a>
          </nav>
        </div>
      </div>
      <div class="row mt-4"> <!-- Parceiros DESKTOP-->
        <div class="col-12 d-flex align-items-center justify-content-center gap-5">
          <img src="public/uploads/parceiros/altice.svg" alt="Altice" class="altice">
          <img src="public/uploads/parceiros/samsung.svg" alt="Samsung" class="samsung">
          <img src="public/uploads/parceiros/dell.svg" alt="Dell" class="dell">
          <img src="public/uploads/parceiros/aruba.svg" alt="Aruba" class="aruba">
          <img src="public/uploads/parceiros/hp_old.svg" alt="Hp" class="hp">
        </div>
      </div>
      <div class="row mt-4"> <!-- Separador rodape DESKTOP-->
        <div class="col-11 col-xl-10 px-0 mx-auto">
          <div class="separador-rodape"></div>
        </div>
      </div>
      <div class="row pe-1 mt-4 pt-2 ps-4"><!-- icones DESKTOP-->
        <div class="col-10 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row ">
              <div class="col d-flex justify-content-start px-0 mx-auto icones-footer">
                <a href="contactos.php">
                  <img src="public/imgs/icones/Contactos.svg" alt="Contactos" class="icone">
                </a>
                <div class="separador-icones-topo"></div>
                <a href="<?= $contactos["linkedin"] ?>" target="_blank">
                  <img src="public/imgs/icones/LinkedIn.svg" alt="LinkedIn" class="icone">
                </a>
                <a href="<?= $contactos["instagram"] ?>" target="_blank">
                  <img src="public/imgs/icones/Instagram.svg" alt="Instagram" class="icone">
                </a>
                <a href="<?= $contactos["facebook"] ?>" target="_blank">
                  <img src="public/imgs/icones/Facebook.svg" alt="Facebook" class="icone">
                </a>
              </div>
              <div class="col d-flex justify-content-end gap-4">
                <a href="https://www.livroreclamacoes.pt/inicio/">
                  <img src="public/imgs/Livro de Reclamacoes.svg" alt="https://www.livroreclamacoes.pt/inicio/" class="livro-reclamacoes">
                </a>
                <a href="https://www.consumidor.gov.pt/parceiros/sistema-de-defesa-do-consumidor/entidades-de-resolucao-alternativa-de-litigios-de-consumo">
                  <img src="public/imgs/RALC.svg" alt="https://www.consumidor.gov.pt/parceiros/sistema-de-defesa-do-consumidor/entidades-de-resolucao-alternativa-de-litigios-de-consumo" class="ralc">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3"> <!-- Copyright DESKTOP-->
        <div class="col-10 px-0 mx-auto copy">
          Copyright © <?= date("Y") ?> <a style="text-decoration: none; color: black;" href="#">Rodrigo Galrão</a>. Todos os direitos reservados. 
        </div>
      </div>
    </div>


    <div class="container-fluid mobile mt-4 pt-2"> <!-- FOOTER MOBILE -->
      <?php if($menu_atual != "contactos"): ?>
        <div class="row pt-4 mt-5"> <!-- Texto Últimas Noticias e Eventos MOBILE-->
          <div class="col-12 text-center titulo">
            Últimas Noticias e Eventos
          </div>
        </div>
        <div class="row mt-4 pt-2"> <!-- Carousel Noticias MOBILE-->
          <div class="col-12 px-0">
            <div id="carousel-noticias-mobile" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php foreach($noticias as $i => $n): ?>
                  <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                    <img src="<?= $n["imagem"] ?>" class="d-block w-100" alt="<?= $n["imagem"] ?>">
                    <div class="carousel-caption text-start d-flex flex-column justify-content-between px-3">
                      <div>
                        <div class="titulo"><?= $n["titulo"] ?></div>
                        <div class="data mt-1"><?= $n["data"] ?></div>
                        <div class="texto mt-2"><?= abreviar($n["texto"], 400) ?></div>
                      </div>
                      <div>
                        <a href="noticia_especifica.php?id=<?= $n["id"] ?>" class="botao-vermais">Ver Mais</a>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
              <div class="carousel-indicators mt-4">
                <div class="container-fluid">
                  <div class="row justify-content-end">
                    <div class="col-auto px-0 pai-buttons d-flex gap-2">
                      <?php foreach($noticias as $i => $n): ?>
                        <button type="button" data-bs-target="#carousel-noticias-mobile" data-bs-slide-to="<?= $i ?>" class="<?= ($i == 0) ? "active" : "" ?>" aria-current="true" aria-label="Slide <?= $i+1 ?>"></button>
                      <?php endforeach ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif ?>
      <div class="row mt-4"><!-- icones MOBILE-->
        <div class="col-12 px-0">
          <div class="col d-flex justify-content-center px-0 mx-auto icones-footer">
            <a href="contactos.php">
              <img src="public/imgs/icones/Contactos.svg" alt="Contactos" class="icone">
            </a>
            <div class="separador-icones-topo"></div>
            <a href="<?= $contactos["linkedin"] ?>" target="_blank">
              <img src="public/imgs/icones/LinkedIn.svg" alt="LinkedIn" class="icone">
            </a>
            <a href="<?= $contactos["instagram"] ?>" target="_blank">
              <img src="public/imgs/icones/Instagram.svg" alt="Instagram" class="icone">
            </a>
            <a href="<?= $contactos["facebook"] ?>" target="_blank">
              <img src="public/imgs/icones/Facebook.svg" alt="Facebook" class="icone">
            </a>
          </div>
        </div>
      </div>

      <div class="row mt-3"> <!-- Separador rodape MOBILE-->
        <div class="col-12">
          <div class="separador-rodape-mobile"></div>
        </div>
      </div>

      <div class="row mt-3"> <!-- Parceiros MOBILE-->
        <div class="col-12 d-flex align-items-center justify-content-center gap-4 text-center">
          <div>
            <img src="public/uploads/parceiros/altice.svg" alt="Altice" class="altice">
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center gap-4">
            <img src="public/uploads/parceiros/dell.svg" alt="Dell" class="dell">
            <img src="public/uploads/parceiros/samsung.svg" alt="Samsung" class="samsung">
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center gap-2">
            <img src="public/uploads/parceiros/hp_old.svg" alt="Hp" class="hp">
            <img src="public/uploads/parceiros/aruba.svg" alt="Aruba" class="aruba">
          </div>
        </div>
      </div>

      <div class="row mt-3"> <!-- Separador rodape MOBILE-->
        <div class="col-12">
          <div class="separador-rodape-mobile"></div>
        </div>
      </div>

      <div class="row mt-3"> <!-- Livro e RALC MOBILE-->
        <div class="col-12 px-0 d-flex justify-content-center align-items-center gap-2">
          <a href="https://www.livroreclamacoes.pt/inicio/">
            <img src="public/imgs/Livro de Reclamacoes.svg" alt="Livro de Reclamações" class="livro-reclamacoes">
          </a>
          <a href="https://www.consumidor.gov.pt/parceiros/sistema-de-defesa-do-consumidor/entidades-de-resolucao-alternativa-de-litigios-de-consumo">
            <img src="public/imgs/RALC.svg" alt="https://www.consumidor.gov.pt/parceiros/sistema-de-defesa-do-consumidor/entidades-de-resolucao-alternativa-de-litigios-de-consumo" class="ralc">
          </a>
        </div>
      </div>

      <div class="row mt-3"> <!-- Copyright MOBILE-->
        <div class="col-10 text-center px-0 mx-auto copy">
          Copyright © <?= date("Y") ?> <a style="text-decoration: none; color: black;" href="#">Rodrigo Galrão</a>. Todos os direitos reservados. 
        </div>
      </div>

    </div>
  </footer>

</body>
</html>