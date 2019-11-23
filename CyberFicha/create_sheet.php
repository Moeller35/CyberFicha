<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>CyberFicha</title>

  <link rel="icon" href="images/icon.jpg">
  <link rel="stylesheet" href="styles/css/reset.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="styles/css/index.css">
  <link rel="stylesheet" href="styles/css/createSheet.css">
</head>

<body>
  <?php include "php/header.php"?>

  <div class="nomePersonagem" action="php/gravar_ficha.php" method="POST">
    <h4 class="titulo">NOME</h4>
      <div class="col-sm-3 my-1">
          <input name="nome" type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default">
      </div>
  </div>

  <?php include "php/layout/papel_personagem.php" ?>

  <?php include "php/layout/imagem_personagem.php"?>

  <?php include "php/layout/atributos.php"?>

  <?php include "php/layout/protecao.php"?>

  <form class="vitalidade" action="php/gravar_ficha.php" method="POST">
    <span class="vit">VIT</span>
    <input class="form-control vit" type="text" placeholder="VIT" name="vit">
    <span class="mtc">MTC</span>
    <input class="form-control mtc" type="text" placeholder="MTC" name="mtc">
  </form>

  <?php include "php/layout/pericias.php" ?>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>