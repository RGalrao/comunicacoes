<?php

require_once "../requisitos.php";

verificar_logado();

$lista_empresa = get_lista_empresa();
$banner = select_sql_unico("SELECT * FROM banners WHERE menu='$menu_atual'");

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">

        <h3>Banner Página Empresa</h3>
        <table>
          <tr>
            <td><img src="<?= $banner["imagem"] ?>" alt="<?= $banner["imagem"] ?>" width="400"></td>
            <td><a href="banner_editar.php?menu=<?= $banner["menu"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
        </table>
        
        <br><br>
        <h2>Menu Página Empresa</h2>
        <br>

        <a href="empresa_criar_novo.php" class="btn btn-primary">Criar Novo <i class="ps-1 bi bi-plus-square"></i></a>
        <br><br>
        <table>
          <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Texto</th>
            <th>Ação</th>
          </tr>
          <?php  foreach($lista_empresa as $e):?>
            <tr>
              <td><?= $e["id"] ?></td>
              <td><?= $e["titulo"] ?></td>
              <td><?= abreviar($e["texto"], 100) ?></td>
              <td>
                <a href="empresa_editar.php?id=<?= $e["id"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
                <a href="empresa_apagar.php?id=<?= $e["id"] ?>" class="btn btn-danger border border-1 border-dark"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php  endforeach ?>
        </table>

      </div>
    </div>
  </main>