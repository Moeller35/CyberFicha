<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="images/icon.jpg">
  <link rel="stylesheet" href="styles/css/reset.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="styles/css/index.css">
  <title>Minhas Campanhas</title>
</head>
<body>
  <?php include "php/header.php"?>

  <h1 class="container tituloCampanhas">Minhas Campanhas</h1>
  
  <table class="table table-hover table-bordered container tabelaFicha">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nome da campanha</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Assalto ao Meridial Plaza</td>
      <td type="button" class="btn btn-primary">Ediar</td>
      <td type="button" class="btn btn-danger">Excluir</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Em busca do chip da imortalidade</td>
      <td type="button" class="btn btn-primary">Ediar</td>
      <td type="button" class="btn btn-danger">Excluir</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Situação de risco: Invasão</td>
      <td type="button" class="btn btn-primary">Ediar</td>
      <td type="button" class="btn btn-danger">Excluir</td>
    </tr>
  </tbody>
</table>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>
</html>