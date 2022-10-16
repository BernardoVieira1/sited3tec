<?php
  session_start();

  include_once("../conexao.php");

  $_SESSION['msg'] = "Show cadastrado com sucesso";

  $loc_show = $_POST["local-show"];
  $data_show  = $_POST["data-show"];

  $result_show = "INSERT INTO shows(`data`, `local`) VALUES ('$data_show','$loc_show')";
  $resultado_show = mysqli_query($conn, $result_show);

  header("Location: ./mostar.php");
  
  
?>