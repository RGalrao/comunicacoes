<?php

require_once "../requisitos.php";

verificar_logado();

$lista_destaques = get_lista_destaques();

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">

        <h2>Menu Página Destaques</h2>
        <br>
        <a href="destaques_criar_novo.php" class="btn btn-primary">Criar Novo <i class="ps-1 bi bi-plus-square"></i></a>
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
          <?php  foreach($lista_destaques as $d):?>
            <tr>
              <td><?= $d["id"] ?></td>
              <td><?= ($d["mostrar_na_home"] ? "Sim" : "Não") ?></td>
              <td><img src="<?= $d["imagem"] ?>" alt="<?= $d["imagem"] ?>" width="200"></td>
              <td><?= $d["titulo"] ?></td>
              <td><?= $d["data"] ?></td>
              <td><?= abreviar($d["texto"], 50) ?></td>
              <td>
                <a href="destaque_editar.php?id=<?= $d["id"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
                <a href="destaque_apagar.php?id=<?= $d["id"] ?>" class="btn btn-danger border border-1 border-dark"><i class="bi bi-trash3"></i></a>
              </td>
            </tr>
          <?php  endforeach ?>
        </table>

      </div>
    </div>
  </main>