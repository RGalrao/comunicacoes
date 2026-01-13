<?php

require_once "../requisitos.php";

verificar_logado();

$lista_contactos = get_lista_contactos();
$banner = select_sql_unico("SELECT * FROM banners WHERE menu='$menu_atual'");

?>
  <main class="container-fluid">

    <div class="row">
      <div class="col-11 col-sm-10 m-auto mt-4 border border-4 border-secondary rounded-4 p-4">

        <h3>Banner Página Contactos</h3>
        <table>
          <tr>
            <td><img src="<?= $banner["imagem"] ?>" alt="<?= $banner["imagem"] ?>" width="400"></td>
            <td><a href="banner_editar.php?menu=<?= $banner["menu"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a></td>
          </tr>
        </table>
        
        <br><br>
        <h2>Menu Página Contactos</h2>
        <br>
        <table>
          <tr>
            <th>Morada</th>
            <th>Telefone</th>
            <th>Fax</th>
            <th>Email</th>
            <th>Nif</th>
            <th>Coordenadas</th>
            <th>Linkedin</th>
            <th>Instagram</th>
            <th>Facebook</th>
            <th>EDITAR</th>
          </tr>
          <?php  foreach($lista_contactos as $c):?>
            <tr>
              <td><?= $c["morada"] ?></td>
              <td><?= $c["telefone"] ?></td>
              <td><?= $c["fax"] ?></td>
              <td><?= $c["email"] ?></td>
              <td><?= $c["nif"] ?></td>
              <td><?= $c["coordenadas"] ?></td>
              <td><?= $c["linkedin"] ?></td>
              <td><?= $c["instagram"] ?></td>
              <td><?= $c["facebook"] ?></td>
              <td>
                <a href="contactos_editar.php?id=<?= $c["id"] ?>" class="btn btn-warning border border-1 border-dark"><i class="bi bi-pencil-square"></i></a>
              </td>
            </tr>
          <?php  endforeach ?>
        </table>

      </div>
    </div>
  </main>