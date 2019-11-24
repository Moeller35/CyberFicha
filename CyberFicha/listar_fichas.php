<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="images/icon.jpg">
  <link rel="stylesheet" href="styles/css/reset.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="styles/css/index.css">
  <title>Minhas Fichas</title>
</head>
<body>
  <?php include "php/header.php"?>

  <?php
    $sql = "SELECT * FROM ficha";

    include_once 'php/conexao.php';
    $conexao = new Conexao();

    $fichas = $conexao->execute($sql);
  ?>

  <h1 class="container tituloFichas">Minhas Fichas</h1>
  
  <table class="table table-hover table-bordered container tabelaFicha">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">Nome do personagem</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
    <tbody>
    <?php 
      while($ficha = $fichas->fetch_array()) { 
    ?>
    <tr>
      <th scope="row"><?php echo $ficha["id"]; ?></th>
      <td><?php echo $ficha["nome_personagem"]; ?></td>
      <td>
        <a href="#"
        class="btn btn-primary">Editar</a>
      </td>
      <td>
        <a href= "php/ficha_excluir.php?id=<?php echo $ficha["id"]; ?>"
          class="btn btn-danger">Excluir</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>
</html>