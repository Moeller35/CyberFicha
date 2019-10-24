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

    <form class="container criarCampanhasForm">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome da campanha</label>
            <input type="text" class="form-control criarCampanhaInput" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Insira o nome da sua campanha">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Descrição da campanha</label>
            <textarea class="form-control criarCampanhaInput" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary adcionarJogadores">Adcionar jogadores</button>
        <div class="form-group">
            <input type="text" class="form-control criarCampanhaInput" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="">
        </div>

        <button type="submit" class="btn btn-secondary">Cancelar</button>
        <button type="submit" class="btn btn-primary">Criar campanha</button>
    </form>

    <script src="js/jquery.js"></script>
    <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>