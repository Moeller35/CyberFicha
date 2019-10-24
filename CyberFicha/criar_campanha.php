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