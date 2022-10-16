<?php

  session_start();

  include_once("../conexao.php");

  $_SESSION['msg'] = "Usuário cadastrado com sucesso";
  
  $id = $_GET['id'];

  $local = $_POST['localShow'];
  $data = $_POST['dataShow'];


  $update = "UPDATE shows SET data='$data',local='$local' WHERE id='$id'";
  $resultado_update = mysqli_query($conn, $update);

  header("Location: mostar.php");




?>
