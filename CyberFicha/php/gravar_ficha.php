<?php
    $dados = $_POST;

    $nomePersonagem = $dados['nome'];

    $papel = $dados['papel'];

    $int = $dados['int'];
    $ref = $dados['ref'];
    $tec = $dados['tec'];
    $aucon = $dados['aucon'];
    $atr = $dados['atr'];
    $sor = $dados['sor'];
    $mov = $dados['mov'];
    $tco = $dados['tco'];
    $emp = $dados['emp'];
    $correr = $dados['correr'];
    $saltar = $dados['saltar'];
    $levantar = $dados['levantar'];

    $cabeca = $dados['cabeca'];
    $torso = $dados['torso'];
    $bracoD = $dados['braco-d'];
    $bracoE = $dados['braco-e'];
    $pernaD = $dados['perna-d'];
    $pernaE = $dados['perna-e'];

    $vit = $dados['vit'];
    $mtc = $dados['mtc'];

    // $autoridade = $dados['autoridade'];
    // $lidCarismatica = $dados['lidCarismatica'];
    // $nocaoCombate = $dados['nocaoCombate'];
    // $credibilidade = $dados['credibilidade'];
    // $familia = $dados['familia'];
    // $interface = $dados['interface'];
    // $reparos = $dados['reparos'];
    // $tecMed = $dados['tecMed'];
    // $recursos = $dados['recursos'];
    // $negociar = $dados['negociar'];

    // $cuidados = $dados['cuidados'];
    // $estilo = $dados['estilo'];
    // $resistencia = $dados['resistencia'];
    // $feitosForca = $dados['feitosForca'];
    // $natacao = $dados['natacao'];
    // $interrogatorio = $dados['interrogatorio'];
    // $intimidacao = $dados['intimidacao'];
    // $oratoria = $dados['oratoria'];
    // $resTorDro = $dados['resTorDro'];
    // $manha = $dados['manha'];
    // $percepcao = $dados['percepcao'];
    // $entrevista = $dados['entrevista'];
    // $lideranca = $dados['lideranca'];
    // $seducao = $dados['seducao'];
    // $tratoSocial = $dados['tratoSocial'];
    // $perLab = $dados['perLab'];
    // $atuacao = $dados['atuacao'];
    // $cont = $dados['cont'];
    // $antro = $dados['antro'];
    // $atenNot = $dados['atenNot'];
    // $biologia = $dados['biologia'];
    // $botanica = $dados['botanica'];
    // $quimica = $dados['quimica'];
    // $composicao = $dados['composicao'];
    // $diagnose = $dados['diagnose'];
    // $eduCul = $dados['eduCul'];
    // $especialista = $dados['especialista'];
    // $jogo = $dados['jogo'];
    // $geologia = $dados['geologia'];
    // $esconder = $dados['esconder'];
    // $historia = $dados['historia'];
    // $idioma = $dados['idioma'];
    // $pesqBibli = $dados['pesqBibli'];
    // $matematica = $dados['matematica'];
    // $fisica = $dados['fisica'];
    // $programacao = $dados['programacao'];
    // $sombra = $dados['sombra'];
    // $mercAcoes = $dados['mercAcoes'];
    // $conSis = $dados['conSis'];
    // $pedagogia = $dados['pedagogia'];
    // $sobrev = $dados['sobrev'];
    // $zoo = $dados['zoo'];
    // $arque = $dados['arque'];
    // $atletismo = $dados['atletismo'];
    // $briga = $dados['briga'];
    // $danca = $dados['danca'];
    // $esqEsc = $dados['esqEsc'];
    // $conducao = $dados['conducao'];
    // $esgrima = $dados['esgrima'];
    // $armaCur = $dados['armaCur'];
    // $armaPesa = $dados['armaPesa'];
    // $arteMarc = $dados['arteMarc'];
    // $lutaGreRom = $dados['lutaGreRom'];
    // $armaBranca = $dados['armaBranca'];
    // $moto = $dados['moto'];
    // $opMaqPes = $dados['opMaqPes'];
    // $pilotoGiro = $dados['pilotoGiro'];
    // $pilotoAsaFixa = $dados['pilotoAsaFixa'];
    // $pilotoDiri = $dados['pilotoDiri'];
    // $pilotoVecVet = $dados['pilotoVecVet'];
    // $fuzil = $dados['fuzil'];
    // $furtividade = $dados['furtividade'];
    // $submetralhadora = $dados['submetralhadora'];
    // $aeroTec = $dados['aeroTec'];
    // $av = $dados['av'];
    // $tecBase = $dados['tecBase'];
    // $opTanque = $dados['opTanque'];
    // $projetoCiber = $dados['projetoCiber'];
    // $cibertec = $dados['cibertec'];
    // $demolicoes = $dados['demolicoes'];
    // $disfarce = $dados['disfarce'];
    // $eletronica = $dados['eletronica'];
    // $segEletro = $dados['segEletro'];
    // $primSoc = $dados['primSoc'];
    // $falsificacao = $dados['falsificacao'];
    // $gito = $dados['gito'];
    // $pintura = $dados['pintura'];
    // $fotoFilm = $dados['fotoFilm'];
    // $medi = $dados['medi'];
    // $arrombamento = $dados['arrombamento'];
    // $punga = $dados['punga'];
    // $tocarInstru = $dados['tocarInstru'];
    // $armeiro = $dados['armeiro'];

    $sql = "INSERT INTO ficha (nome_personagem , papel, inteligencia, ref, tec, aucon, atr, sor, mov, tco, emp, correr, saltar, levantar, cabeca, torso, bracod, bracoe, pernad, pernae, vit, mtc, usuario_id) VALUES ('$nomePersonagem', '$papel', $int, $ref, $tec, $aucon, $atr, $sor, $mov, $tco, $emp, $correr, $saltar, $levantar, $cabeca, $torso, $bracoD, $bracoE, $pernaD, $pernaE, $vit, $mtc, 1)";

    include_once 'conexao.php';
    $conexao = new Conexao();
    
    $conexao->execute($sql);

    echo "<script> alert('Ficha criada com sucesso'); 
        window.location.href = '../index.php'</script>";
?>