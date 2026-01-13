<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice Comunicações</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="./css/backoffice.css">

  <script src="https://cdn.tiny.cloud/1/5z7av92t5br6bsn1ajdi3rum9s2wwjxjlu8och48b46zfa4v/tinymce/6/tinymce.min.js " referrerpolicy="origin"></script>

</head>
<body>

  <header class="container-fluid">
    <div class="row">
      <div class="col-12 mt-4">
        <h1>Backoffice</h1>
      </div>
    </div>

    <?php if($menu_atual != "index" && $menu_atual != "criar_conta"): ?>
      <nav class="my-4 d-flex justify-content-center align-items-center g-0">
        <a href="inicio.php" class="<?= ($menu_atual == "inicio") ? "active" : "" ?>">INÍCIO</a>
        <a href="home.php" class="<?= ($menu_atual == "home") ? "active" : "" ?>">HOME</a>
        <a href="empresa.php" class="<?= ($menu_atual == "empresa") ? "active" : "" ?>">EMPRESA</a>
        <a href="destaques.php" class="<?= ($menu_atual == "destaques") ? "active" : "" ?>">DESTAQUES</a>
        <a href="noticias.php" class="<?= ($menu_atual == "noticias") ? "active" : "" ?>">NOTICIAS E EVENTOS</a>
        <a href="solucoes.php" class="<?= ($menu_atual == "solucoes") ? "active" : "" ?>">SOLUÇÕES</a>
        <a href="inovacao.php" class="<?= ($menu_atual == "inovacoes") ? "active" : "" ?>">INOVAÇÃO E TECNOLOGIA</a>
        <a href="parceiros.php" class="<?= ($menu_atual == "parceiros") ? "active" : "" ?>">PARCEIROS</a>
        <a href="contactos.php" class="<?= ($menu_atual == "contactos") ? "active" : "" ?>">CONTACTOS</a>
        <a href="sair.php" class="bg-danger">LOGOUT</a>
      </nav>
    <?php endif ?>

  </header> 
