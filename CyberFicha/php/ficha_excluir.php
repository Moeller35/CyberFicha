<?php
    $dados = $_GET;

    $id = $dados["id"];

    $sql = "DELETE FROM ficha WHERE id = '$id'";

    include_once './conexao.php';
    $conexao = new Conexao();
    $conexao->execute($sql);
    
    echo "<script> alert('Ficha excluída com sucesso'); 
      window.location.href = '../listar_fichas.php'</script>";
?>