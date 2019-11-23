<?php 
  require "conexao.php";
  $conexao = new Conexao();
  session_start();

  $usuario = $_POST['nickname'];
  $senha = $_POST['senha'];

  $result = $conexao->execute("SELECT * FROM usuario WHERE nickname = '$usuario' AND senha = '$senha'");

  if(mysqli_num_rows ($result) > 0 ) {

    $dados_usuario = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $dados_usuario['id'];
    $_SESSION['nickname'] = $usuario;
    $_SESSION['senha'] = $senha;
    echo "<script> alert('Login realizado com sucesso'); 
        window.location.href = '../index.php'</script>";
  } else{
      unset ($_SESSION['nickname']);
      unset ($_SESSION['senha']);
      echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha estão incorretos');window.location.href='../login.php';</script>";
  }
?>