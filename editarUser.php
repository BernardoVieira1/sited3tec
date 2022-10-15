<?php

  session_start();

  include_once("conexao.php");

  $_SESSION['msg'] = "Usuário cadastrado com sucesso";
  
  $id = $_GET['id'];

  $nome = $_POST['usuario'];
  $email = $_POST['email'];
  $admin = $_POST['admin'];

  echo $id;
  echo $nome;
  echo $email;
  echo $admin;



  $update = "UPDATE users SET usuario='$nome',email='$email',admin='$admin' WHERE id='$id'";
  $resultado_update = mysqli_query($conn, $update);

  header("Location: adminpage.php");




?>
