<?php
  session_start();
  if((!isset ($_SESSION['nickname']) == true) and (!isset ($_SESSION['senha']) == true)) {

    unset($_SESSION['nickname']);
    unset($_SESSION['senha']);
    header('location:../login.php');
    }
  
  $user = $_SESSION['id'];
  $logado = $_SESSION['nickname'];
?>