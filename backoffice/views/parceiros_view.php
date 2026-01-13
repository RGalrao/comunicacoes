<?php

require_once "../requisitos.php";

verificar_logado();

$lista_parceiros = get_lista_parceiros();
$banner = select_sql_unico("SELECT * FROM banners WHERE menu='$menu_atual'");

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">

        <h3>Banner Página Parceiros</h3>
        <table>
          <tr>
            <td><img src="<?= $banner["imagem"] ?>" alt="<?= $banner["imagem"] ?>" width="400"></td>
            <td><a href="banner_editar.php?menu=<?= $banner["menu"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
        </table>
        
        <br><br>
        <h2>Menu Página Parceiros</h2>
        <br>
        <a href="parceiro_criar_novo.php" class="btn btn-primary">Criar Novo Parceiro <i class="ps-1 bi bi-plus-square"></i></a>
        <br><br>
        <table>
          <tr>
            <th>ID</th>
            <th>Nome do Parceiro</th>
            <th>Logo</th>
            <th>Tamanho</th>
            <th>Ação</th>
          </tr>
          <?php  foreach($lista_parceiros as $p):?>
            <tr>
              <td><?= $p["id"] ?></td>
              <td><?= $p["nome"] ?></td>
              <td><img src="<?= $p["logo"] ?>" alt="<?= $p["logo"] ?>"></td>
              <td><?= ($p["tamanho"] ? "Grande" : "Pequeno") ?></td>
              <td>
                <a href="parceiro_editar.php?id=<?= $p["id"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
                <a href="parceiro_apagar.php?id=<?= $p["id"] ?>" class="btn btn-danger border border-1 border-dark"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php  endforeach ?>
        </table>

      </div>
    </div>
  </main>