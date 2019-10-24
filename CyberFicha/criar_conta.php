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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">    
        <a class="navbar-brand" href="index.php">
            <img src="images/icon.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
            CyberFicha
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ficha
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="create_sheet.php">Criar Ficha</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Minhas Fichas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Campanha
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="criar_campanha.php">Criar Campanha</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Minhas Campanhas</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="criar_conta.php">Criar conta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
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