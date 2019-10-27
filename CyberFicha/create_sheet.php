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

  <table class="table protecao">
    <thead class="thead-dark">
    <tr>
      <th scope="col">Localização</th>
      <th scope="col">Cabeça 1</th>
      <th scope="col">Torso 2-4</th>
      <th scope="col">Braço D. 5</th>
      <th scope="col">Braço E. 6</th>
      <th scope="col">Perna D. 7-8</th>
      <th scope="col">Perna E. 9-0</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="table-dark" scope="row">Blindagem PB</th>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
    </tr>
  </tbody>
  </table>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>
</body>

</html>