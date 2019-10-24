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

    <div class="nomePersonagem">
        <h4 class="titulo">NOME</h4>
        <div class="col-sm-3 my-1">
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
        </div>
    </div>

    <form class="papelPersonagem">
        <h4 class="titulo">PAPEL</h4>
        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Solo" value="option1">
            <label class="form-check-label" for="Solo">Solo</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Roqueiro" value="option2">
            <label class="form-check-label" for="Roqueiro">Roqueiro</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Netrunner" value="option3">
            <label class="form-check-label" for="Netrunner">Netrunner</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Tecnico" value="option4">
            <label class="form-check-label" for="Tecnico">Técnico</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Nomade" value="option5">
            <label class="form-check-label" for="Nomade">Nômade</label>
        </div>
        <div class="w-100"></div>
        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Atravessador" value="option6">
            <label class="form-check-label" for="Atravessador">Atravessador</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Policia" value="option7">
            <label class="form-check-label" for="Policia">Polícia</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Executivo" value="option8">
            <label class="form-check-label" for="Executivo">Executivo</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Midia" value="option9">
            <label class="form-check-label" for="Midia">Mídia</label>
        </div>

        <div class="form-check form-check-inline papel">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Tecnomedico" value="option10">
            <label class="form-check-label" for="Tecnomedico">Tecnomédico</label>
        </div>
    </form>

    <div class="imagemPersonagem">
        <div class="rolagem">
            <div class="my-1">
                <button type="submit" class="btn btn-primary">Rolar dados</button>
            </div>
            <div class="my-1">
                <span>Valor nos dados:</span>
                <input type="text" readonly class="form-control" id="inlineFormInputName" placeholder="">
            </div>
            <div class="my-1">
                <span>Rolagem Total:</span>
                <input type="text" readonly class="form-control" id="inlineFormInputName" placeholder="">
            </div>
            <div class="my-1">
                <span>Rolagem:</span>
                <input type="text" readonly class="form-control" id="inlineFormInputName" placeholder="">
            </div>
        </div>

        <div class="card align-items-center my-3" style="width: 18rem;">
            <img src="images/exemplo.jpg" class="card-img-top" alt="Imagem do personagem">
            <div class="card-body">
                <button class="btn btn-primary">Enviar imagem</button>
            </div>
        </div>
    </div>

    <form class="atributosPersonagem">
        <h4 class="titulo">Atributos</h4>
        <div class="form-row align-items-center">
            <div class="col-sm-1 my-1 atributo">
                <span>INT</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>REF</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>TEC</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>AuCon</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="w-100"></div>

            <div class="col-sm-1 my-1 atributo">
                <span>ATR</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>SOR</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>MOV</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>TCO</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="w-100"></div>

            <div class="col-sm-1 my-1 atributo">
                <span>EMP</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>Correr</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>Saltar</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>

            <div class="col-sm-1 my-1 atributo">
                <span>Levantar</span>
                <input type="text" class="form-control" id="inlineFormInputName" placeholder="">
            </div>
        </div>
    </form>

    <script src="js/jquery.js"></script>
    <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>