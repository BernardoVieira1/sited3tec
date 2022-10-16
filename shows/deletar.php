<?php

  session_start();

  include_once("../conexao.php");

  $_SESSION['msg'] = "Usuário Deletado com sucesso";
  
  $id = $_GET['id'];

  $delete = "DELETE FROM shows WHERE id='$id'";
  $resultado_delete = mysqli_query($conn, $delete);

  header("Location: mostar.php");

?>
