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

<form action="php/gravar_ficha.php" method="POST">
  <div class="nomePersonagem">
    <h4 class="titulo">NOME</h4>
      <div class="col-sm-3 my-1">
          <input name="nome" type="text" class="form-control" aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-default">
      </div>
  </div>

<div class="papelPersonagem">
  <h4 class="titulo">PAPEL</h4>
  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Solo" value="1">
    <label class="form-check-label" for="Solo">Solo</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Roqueiro" value="2">
    <label class="form-check-label" for="Roqueiro">Roqueiro</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Netrunner" value="3">
    <label class="form-check-label" for="Netrunner">Netrunner</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Tecnico" value="4">
    <label class="form-check-label" for="Tecnico">Técnico</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Nomade" value="5">
    <label class="form-check-label" for="Nomade">Nômade</label>
  </div>
  <div class="w-100"></div>
  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Atravessador" value="6">
    <label class="form-check-label" for="Atravessador">Atravessador</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Policia" value="7">
    <label class="form-check-label" for="Policia">Polícia</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Executivo" value="8">
    <label class="form-check-label" for="Executivo">Executivo</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Midia" value="9">
    <label class="form-check-label" for="Midia">Mídia</label>
  </div>

  <div class="form-check form-check-inline papel">
    <input class="form-check-input" type="radio" name="papel" id="Tecnomedico" value="tecnomedico">
    <label class="form-check-label" for="Tecnomedico">Tecnomédico</label>
  </div>
</div>

<div class="imagemPersonagem">
  <div class="rolagem">
    <div class="my-1">
      <button type="button" class="btn btn-primary" onClick="rolarDados()">Rolar dados</button>
    </div>
    <div class="my-1">
      <span>Rolagem:</span>
      <span>1d20</span>
        <input type="text" readonly class="form-control" id="valorDado" placeholder="">
    </div>
  </div>

  <div class="card align-items-center my-3" style="width: 18rem;">
    <img src="images/person.jpg" class="card-img-top" alt="Imagem do personagem">
    <div class="card-body">
      <button type="button" class="btn btn-primary">Enviar imagem</button>
    </div>
  </div>
</div>

<div class="atributosPersonagem">
  <h4 class="titulo">ATRIBUTOS</h4>
  <div class="form-row align-items-center">
    <div class="col-sm-1 my-1 atributo">
      <span>INT</span>
      <input type="text" class="form-control" id="int" name="int">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>REF</span>
      <input type="text" class="form-control" id="ref" name="ref">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>TEC</span>
      <input type="text" class="form-control" id="tec" name="tec">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>AuCon</span>
      <input type="text" class="form-control" id="aucon" name="aucon">
    </div>

    <div class="w-100"></div>

    <div class="col-sm-1 my-1 atributo">
      <span>ATR</span>
      <input type="text" class="form-control" id="atr" name="atr">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>SOR</span>
      <input type="text" class="form-control" id="sor" name="sor">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>MOV</span>
      <input type="text" class="form-control" id="mov" name="mov">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>TCO</span>
      <input type="text" class="form-control" id="tco" name="tco">
    </div>

    <div class="w-100"></div>

    <div class="col-sm-1 my-1 atributo">
      <span>EMP</span>
      <input type="text" class="form-control" id="emp" name="emp">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>Correr</span>
      <input type="text" class="form-control" id="correr" name="correr">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>Saltar</span>
      <input type="text" class="form-control" id="saltar" name="saltar">
    </div>

    <div class="col-sm-1 my-1 atributo">
      <span>Levantar</span>
      <input type="text" class="form-control" id="levantar" name="levantar">
    </div>
  </div>
</div>

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
      <td><input class="form-control" type="text" name="cabeca"></td>
      <td><input class="form-control" type="text" name="torso"></td>
      <td><input class="form-control" type="text" name="braco-d"></td>
      <td><input class="form-control" type="text" name="braco-e"></td>
      <td><input class="form-control" type="text" name="perna-d"></td>
      <td><input class="form-control" type="text" name="perna-e"></td>
    </tr>
  </tbody>
</table>

  <div class="vitalidade">
    <span class="vit">VIT</span>
    <input class="form-control vit" type="text" placeholder="VIT" name="vit">
    <span class="mtc">MTC</span>
    <input class="form-control mtc" type="text" placeholder="MTC" name="mtc">
  </div>

<div class= "periciasPersonagens">
  <h4>PERÍCIAS</h4>
<div>
  <p class="subtitulo">HABILIDADES ESPECIAIS</p>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="autoridade" name="autoridade" value="autoridade">
    <label class="form-check-label" for="autoridade">Autoridade</label>
  </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="lidCarism" name="lidCarismatica" value="lidCarisma">
      <label class="form-check-label" for="lidCarism">Liderança Carismática</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="nocaoCombate" name="nocaoCombate" value="nocaoComb">
    <label class="form-check-label" for="nocaoCombate">Noção de Combate</label>
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="credibilidade" name="credibilidade" value="cred">
    <label class="form-check-label" for="credibilidade">Credibilidade</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="familia" name="familia" value="familia">
    <label class="form-check-label" for="familia">Famíla</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="interface" name="interface" value="interface">
    <label class="form-check-label" for="interface">Interface</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="repImp" name="reparos" value="reparos">
    <label class="form-check-label" for="repImp">Reparos Improviados</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="tecMed" name="tecMed" value="tecMed">
    <label class="form-check-label" for="tecMed">Tecnologia Médica</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="recursos" name="recursos" value="recursos">
    <label class="form-check-label" for="recursos">Recursos</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="negociar" name="negociar" value="negociar">
    <label class="form-check-label" for="negociar">Negociar</label>
  </div>

  <p>ATRATIVIDADE</p>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="cudEsp" name="cuidados" value="cuidados">
    <label class="form-check-label" for="cudEsp">Cuidados Especiais</label>
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="ropEstilo" name="estilo" value="estilo">
    <label class="form-check-label" for="ropEstilo">Roupa e Estilo</label>
  </div>

  <p>TIPO CORPORAL</p>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="resistencia" name="resistencia" value="resis">
    <label class="form-check-label" for="resistencia">Resistência</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="feiForca" name="feitosForca" value="feitoForc">
    <label class="form-check-label" for="feiForca">Feito de Força</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="natacao" name="natacao" value="natacao">
    <label class="form-check-label" for="natacao">Natação</label>
  </div>

  <p class="subtitulo">AUTO-CONTROLE</p>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="interrogatorio" name="interrogatorio" value="inter">
    <label class="form-check-label" for="interigatorio">Interrogatório</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="intimidacao" name="intimidacao" value="intimi">
    <label class="form-check-label" for="intimidacao">Intimidação</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="oratoria" name="oratoria" value="oratoria">
    <label class="form-check-label" for="oratoria">Oratória</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="reTorDro" name="resTorDro" value="resTorDro">
    <label class="form-check-label" for="reTorDro">Resistência Tortura/Drogas</label>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="manha" name="manha" value="manha">
    <label class="form-check-label" for="manha">Manha</label>
  </div>
</div>
<div>
    <p class="subtitulo">EMPATIA</p>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="percepcao" name="percepcao" value="percepcao">
      <label class="form-check-label" for="percepcao">Percepção</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="entrevista" name="entrevista" value="entrev">
      <label class="form-check-label" for="entrevista">Entrevista</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="lideranca" name="lideranca" value="lideranca">
      <label class="form-check-label" for="lideranca">Liderança</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="seducao" name="seducao" value="seducao">
      <label class="form-check-label" for="seducao">Sedução</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="tratoSocial" name="tratoSocial" value="tratoSoci">
      <label class="form-check-label" for="tratoSocial">Trato Social</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="perLab" name="perLab" value="perLab">
      <label class="form-check-label" for="perLab">Persuasão e Lábia</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="atuacao" name="atuacao" value="atuacao">
      <label class="form-check-label" for="atuacao">Atuação</label>
    </div>

    <p class="subtitulo">INTELIGÊNCIA</p>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="cont" name="cont" value="cont">
      <label class="form-check-label" for="cont">Contabilidade</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="antro" name="antro" value="antro">
      <label class="form-check-label" for="antro">Antropologia</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="atenNot" name="atenNot" value="atenNot">
      <label class="form-check-label" for="atenNot">Atenção/Notar</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="biologia" name="biologia" value="biologia">
      <label class="form-check-label" for="biologia">Biologia</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="botanica" name="botanica" value="botanica">
      <label class="form-check-label" for="botanica">Botânica</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="quimica" name="quimica" value="quimica">
      <label class="form-check-label" for="quimica">Química</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="composicao" name="composicao" value="composicao">
      <label class="form-check-label" for="composicao">Composição</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="diagnose" name="diagnose" value="diagnose">
      <label class="form-check-label" for="diagnose">Diagnose</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="eduCul" name="eduCul" value="eduCul">
      <label class="form-check-label" for="eduCul">Educação e Cultura Geral</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="especialista" name="especialista" value="espec">
      <label class="form-check-label" for="especialista">Especialista</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="jogo" name="jogo" value="jogo">
      <label class="form-check-label" for="jogo">Jogo</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="geologia" name="geologia" value="geologia">
      <label class="form-check-label" for="geologia">Geologia</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="esconder" name="esconder" value="esconder">
      <label class="form-check-label" for="esconder">Esconder/Evadir</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="historia" name="historia" value="historia">
      <label class="form-check-label" for="historia">História</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="idioma" name="idioma" value="idioma">
      <label class="form-check-label" for="idioma">Idioma</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pesqBibli" name="pesqBibli" value="pesqBibli">
      <label class="form-check-label" for="pesqBibli">Pesquisa em Biblioteca</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="matematica" name="matematica" value="matemat">
      <label class="form-check-label" for="matematica">Matemática</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="fisica" name="fisica" value="fisica">
      <label class="form-check-label" for="fisica">Física</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="programacao" name="programacao" value="programa">
      <label class="form-check-label" for="programacao">Programação</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="sombra" name="sombra" value="sombra">
      <label class="form-check-label" for="sombra">Sombra/Rastreamento</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="mercAcoes" name="mercAcoes" value="mercAcoes">
      <label class="form-check-label" for="mercAcoes">Mercado de Ações</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="conSis" name="conSis" value="conSis">
      <label class="form-check-label" for="conSis">Conhecimento de Sistemas</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pedagogia" name="pedagogia" value="pedagogia">
      <label class="form-check-label" for="pedagogia">Pedagogia</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="sobrev" name="sobrev" value="sobrev">
      <label class="form-check-label" for="sobrev">Sobrevivência</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="zoo" name="zoo" value="zoo">
      <label class="form-check-label" for="zoo">Zoologia</label>
    </div>

    <p class="subtitulo">REFLEXOS</p>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="arque" name="arque" value="arque">
      <label class="form-check-label" for="arque">Arqueirismo</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="atletismo" name="atletismo" value="atletismo">
      <label class="form-check-label" for="atletismo">Atletismo</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="briga" name="briga" value="briga">
      <label class="form-check-label" for="briga">Briga</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="danca" name="danca" value="danca">
      <label class="form-check-label" for="danca">Dança</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="esqEsc" name="esqEsc" value="esqEsc">
      <label class="form-check-label" for="esqEsc">Esquivar/Escapar</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="conducao" name="conducao" value="conducao">
      <label class="form-check-label" for="conducao">Condução</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="esgrima" name="esgrima" value="esgrima">
      <label class="form-check-label" for="esgrima">Esgrima</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="armaCur" name="armaCur" value="armaCur">
      <label class="form-check-label" for="armaCur">Armas Curtas</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="armaPesa" name="armaPesa" value="armaPesa">
      <label class="form-check-label" for="armaPesa">Armas Pesadas</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="arteMarc" name="arteMarc" value="arteMarc">
      <label class="form-check-label" for="arteMarc">Artes Marciais</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="lutaGreRom" name="lutaGreRom" value="lutaGreRo">
      <label class="form-check-label" for="lutaGreRom">Luta Greco-Romana</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="armaBranca" name="armaBranca" value="armaBran">
      <label class="form-check-label" for="armaBranca">Armas Brancas</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="moto" name="moto" value="moto">
      <label class="form-check-label" for="moto">Motocicleta</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="opMaqPes" name="opMaqPes" value="opMaqPes">
      <label class="form-check-label" for="opMaqPes">Op. de Maquinaria Pesada</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pilotoGiro" name="pilotoGiro" value="piloGiro">
      <label class="form-check-label" for="pilotoGiro">Pilotagem de Giro</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pilotoAsaFixa" name="pilotoAsaFixa" value="piloAsaFi">
      <label class="form-check-label" for="pilotoAsaFixa">Pilotagem de Asa Fixa</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pilotoDiri" name="pilotoDiri" value="piloDiri">
      <label class="form-check-label" for="pilotoDiri">Pilotagem de Dirigível</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pilotoVecVet" name="pilotoVecVet" value="piloVeVe">
      <label class="form-check-label" for="pilotoVecVet">Pilotagem de Veíc.Imp.Vet.</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="fuzil" name="fuzil" value="fuzil">
      <label class="form-check-label" for="fuzil">Fuzil</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="furtividade" name="furtividade" value="furti">
      <label class="form-check-label" for="furtividade">Furtividade</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="submetralhadora" name="submetralhadora" value="submet">
      <label class="form-check-label" for="submetralhadora">Submetralhadora</label>
    </div>

  <p class="subtitulo">TÉCNICA</p>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="aeroTec" name="aeroTec" value="aeroTec">
      <label class="form-check-label" for="aeroTec">AeroTec</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="av" name="av" value="av">
      <label class="form-check-label" for="av">AVTec</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="tecBase" name="tecBase" value="tecBase">
      <label class="form-check-label" for="tecBase">Tecnologia Básica</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="opTanque" name="opTanque" value="opTanque">
      <label class="form-check-label" for="opTanque">Op. de Tanques Criogênicos</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="projetoCiber" name="projetoCiber" value="projCiber">
      <label class="form-check-label" for="projetoCiber">Projeto Ciberterminal</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="cibertec" name="cibertec" value="cibertec">
      <label class="form-check-label" for="cibertec">Cibertecnologia</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="demolicoes" name="demolicoes" value="demolic">
      <label class="form-check-label" for="demolicoes">Demolições</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="disfarce" name="disfarce" value="disfarce">
      <label class="form-check-label" for="disfarce">Disfarce</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="eletronica" name="eletronica" value="eletro">
      <label class="form-check-label" for="eletronica">Eletrônica</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="segEletro" name="segEletro" value="segEletro">
      <label class="form-check-label" for="segEletro">Segurança Eletrônica</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="primSoc" name="primSoc" value="primSoc">
      <label class="form-check-label" for="primSoc">Primeiros Socorros</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="falsificacao" name="falsificacao" value="falsifi">
      <label class="form-check-label" for="falsificacao">Falsificação</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="gito" name="gito" value="gito">
      <label class="form-check-label" for="gito">Gito Tec</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="pintura" name="pintura" value="pintura">
      <label class="form-check-label" for="pintura">Pintura e Desenho</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="fotoFilm" name="fotoFilm" value="fotoFilm">
      <label class="form-check-label" for="fotoFilm">Fotografia e Filmagem</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="medi" name="medi" value="medi">
      <label class="form-check-label" for="medi">Medicamentos</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="arrombamento" name="arrombamento" value="arromba">
      <label class="form-check-label" for="arrombamento">Arrombamento</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="punga" name="punga" value="punga">
      <label class="form-check-label" for="punga">Punga</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="tocarInstru" name="tocarInstru" value="tocarIns">
      <label class="form-check-label" for="tocarInstru">Tocar Instrumento</label>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="armeiro" name="armeiro" value="armeiro">
      <label class="form-check-label" for="armeiro">Armeiro</label>
    </div>
  </div>
  </div>
  
  <div class="botoes">
    <button type="submit" class="btn btn-primary">Criar ficha</button>
    <button type="button" class="btn btn-primary" onClick="window.print()">Imprimir ficha</button>
  </div>
</form>

  <script src="js/jquery.js"></script>
  <script src="styles/bootstrap/js/bootstrap.js"></script>

  <script>
    function rolarDados() {
      document.getElementById("valorDado").value = Math.floor(Math.random() * 20 + 1);
    } 
  </script>
</body>

</html>