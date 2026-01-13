<?php

require_once "../requisitos.php";

verificar_logado();

$h = get_home();
$lista_slides = get_carousel();

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">

        <h2>Menu Página Home</h2>
        <br>
        <h4>Carousel Inicial</h4>
        
        <table>
          <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Mostrar na Home</th>
            <th>Ação</th>
          </tr>
          <?php  foreach($lista_slides as $s):?>
            <tr>
              <td><?= $s["id"] ?></td>
              <td><img src="<?= $s["imagem"] ?>" alt="<?= $s["imagem"] ?>" width="200"></td>
              <td><?= ($s["mostrar_na_home"] ? "Sim" : "Não") ?></td>
              <td>
                <a href="slide_editar.php?id=<?= $s["id"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
                <a href="slide_apagar.php?id=<?= $s["id"] ?>" class="btn btn-danger border border-1 border-dark"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php  endforeach ?>
        </table>
        <a href="slide_criar_novo.php" class="btn btn-primary mt-2">Criar Novo Slide<i class="ps-1 bi bi-plus-square"></i></a>
        <br><br><br>
      
        
        <h4>Conteúdo</h4>
        <table>
          <tr>
            <th>Título</th>
            <th>Subítulo</th>
            <th>Texto</th>
            <th>Ação</th>
          </tr>
            <tr>
              <td><?= $h["titulo"] ?></td>
              <td><?= $h["subtitulo"] ?></td>
              <td><?= abreviar($h["texto"], 100) ?></td>
              <td>
                <a href="home_editar.php" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
              </td>
            </tr>
        </table>
        <br>

      </div>
    </div>
  </main>