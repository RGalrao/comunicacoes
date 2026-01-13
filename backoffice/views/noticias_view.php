<?php

require_once "../requisitos.php";

verificar_logado();

$lista_noticias = get_lista_noticias();
$banner = select_sql_unico("SELECT * FROM banners WHERE menu='$menu_atual'");

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">

        <h3>Banner Página Noticias e Eventos</h3>
        <table>
          <tr>
            <td><img src="<?= $banner["imagem"] ?>" alt="<?= $banner["imagem"] ?>" width="400"></td>
            <td><a href="banner_editar.php?menu=<?= $banner["menu"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
        </table>
        
        <br><br>
        <h2>Menu Página Noticias e Eventos</h2>
        <br>
        <a href="noticias_criar_novo.php" class="btn btn-primary">Criar Novo <i class="ps-1 bi bi-plus-square"></i></a>
        <br><br>
        <table>
          <tr>
            <th>ID</th>
            <th>Mostrar na Home</th>
            <th>Imagem</th>
            <th>Título</th>
            <th>Data</th>
            <th>Texto</th>
            <th>Ação</th>
          </tr>
          <?php  foreach($lista_noticias as $n):?>
            <tr>
              <td><?= $n["id"] ?></td>
              <td><?= ($n["mostrar_na_home"] ? "Sim" : "Não") ?></td>
              <td><img src="<?= $n["imagem"] ?>" alt="<?= $n["imagem"] ?>" width="200"></td>
              <td><?= $n["titulo"] ?></td>
              <td><?= $n["data"] ?></td>
              <td><?= abreviar($n["texto"], 50) ?></td>
              <td>
                <a href="noticia_editar.php?id=<?= $n["id"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
                <a href="noticia_apagar.php?id=<?= $n["id"] ?>" class="btn btn-danger border border-1 border-dark"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php  endforeach ?>
        </table>

      </div>
    </div>
  </main>