<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>CyberFicha</title>

  <link rel="icon" href="images/icon.jpg">
  <link rel="stylesheet" href="styles/css/reset.css">
  <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="styles/css/index.css">
</head>

<body>
  <?php include "php/header.php"?>

  <form class="container formLogin" action="php/realiza_login.php" method="POST">
      <div class="form-group">
          <label for="exampleInputEmail1">Nome de usuário</label>
          <input name="nickname" type="text" class="form-control loginInput" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Nome de usuário">
      </div>
      <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input name="senha" type="password" class="form-control loginInput" id="exampleInputPassword1" placeholder="Senha">
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
  </form>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>