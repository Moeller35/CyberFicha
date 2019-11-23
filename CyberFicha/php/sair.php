<?php  
  session_start(); 
  session_destroy();
  session_write_close();
  
  echo "<script> alert('Logout realizado com sucesso'); 
    window.location.href = '../index.php'</script>";
?>