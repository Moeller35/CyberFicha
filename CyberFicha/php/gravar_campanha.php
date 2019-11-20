<?php
  $dados = $_POST;

  $nomeCampanha = $dados['nome-campanha'];
  $descricao = $dados['descricao'];
  $jogadores = $dados['jogadores'];

  $sql = "INSERT INTO campanha (nome_campanha , descricao_campanha, jogadores) VALUES ('$nomeCampanha', '$descricao', '$jogadores')";

  include_once 'conexao.php';
  $conexao = new Conexao();
  $conexao->execute($sql);

  echo "<script> alert('Campanha criada com sucesso'); 
        window.location.href = '../index.php'</script>";
?>