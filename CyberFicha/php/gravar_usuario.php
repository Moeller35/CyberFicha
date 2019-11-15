<?php
  $dados = $_POST;

  $nome = $dados['nome'];
  $email = $dados['email'];
  $senha = $dados['senha'];
  $nickname = $dados['nickname'];

  $sql = "INSERT INTO usuario (nome, email, senha, nickname) VALUES ('$nome', '$email', '$senha', '$nickname')";

  include_once 'conexao.php';
  $conexao = new Conexao();
  $conexao->execute($sql);

  echo "<script> alert('Formulário foi salvo com sucesso'); 
        window.location.href = '../index.php'</script>";
?>