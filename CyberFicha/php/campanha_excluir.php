<?php
    $dados = $_GET;

    $id = $dados["id"];

    $sql = "DELETE FROM campanha WHERE id = '$id'";

    include_once './conexao.php';
    $conexao = new Conexao();
    $conexao->execute($sql);
    
    echo "<script> alert('Campanha excluída com sucesso'); 
      window.location.href = '../listar_campanha.php'</script>";
?>