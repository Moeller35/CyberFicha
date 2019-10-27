<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Criar conta</title>

  <link rel="icon" href="images/icon.jpg">
  <link rel="stylesheet" href="styles/css/reset.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="styles/css/index.css">
  <link rel="stylesheet" href="styles/css/criarConta.css">
</head>

<body>
  <?php include "php/header.php"?>

  <form class="container formCriarConta" action="php/gravar_usuario.php" method="POST">
      <div class="form-group">
          <label for="nome">Nome Completo</label>
          <input name="nome" type="text" class="form-control criarContaInput" id="nome" placeholder="Insira seu nome">
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input name="email" type="email" class="form-control criarContaInput" id="emial" placeholder="Insira seu Email">
      </div>
      <div class="form-group">
          <label for="senha">Senha</label>
          <input name="senha" type="password" class="form-control criarContaInput" id="senha" placeholder="Senha">
      </div>
      <div class="form-group">
          <label for="nickname">Nome de usuário</label>
          <input name="nickname" type="text" class="form-control criarContaInput" id="nickname" placeholder="Insira seu nome de usuário">
      </div>
      <button type="submit" class="btn btn-primary">Criar conta</button>
  </form>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>