<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Criar campanha</title>

  <link rel="icon" href="images/icon.jpg">
  <link rel="stylesheet" href="styles/css/reset.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="styles/css/index.css">
  <link rel="stylesheet" href="styles/css/criarCampanhas.css">
</head>

<body>
  <?php include "php/header.php"?>

  <form class="container criarCampanhasForm" action="php/gravar_campanha.php" method="POST">
      <div class="form-group">
          <label for="nomeCampanha">Nome da campanha</label>
          <input name="nome-campanha" type="text" class="form-control criarCampanhaInput" id="nomeCampanha"
              aria-describedby="emailHelp" placeholder="Insira o nome da sua campanha">
      </div>
      <div class="form-group">
          <label for="descricao">Descrição da campanha</label>
          <textarea name="descricao" class="form-control criarCampanhaInput" id="descricao" rows="3"></textarea>
      </div>

      <button class="btn btn-primary adcionarJogadores">Adcionar jogadores</button>
      <div class="form-group">
          <input name="jogadores" type="text" class="form-control criarCampanhaInput" id="jogadores"
              aria-describedby="emailHelp" placeholder="">
      </div>

      <button type="submit" class="btn btn-primary">Criar campanha</button>
  </form>
  

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>