<?php

  session_start();

  include_once("conexao.php");

  $_SESSION['msg'] = "Usuário cadastrado com sucesso";
  
  $id = $_GET['id'];

  $delete = "DELETE FROM users WHERE id='$id'";
  $resultado_delete = mysqli_query($conn, $delete);

  header("Location: listaUsers.php");




?>
