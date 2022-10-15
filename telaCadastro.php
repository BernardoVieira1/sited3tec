<?php
  session_start();
  $_SESSION['msg']="Usuário cadastrado com sucesso"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./styles/casdatrese.css">
</head>
<body>
<div align="center">
    </div>
  
  <div class = "caixa" align="center">
    <h1 id="cadastro">Faça seu Cadastro</h1>
      <form method="POST" action="cadastro.php">
        <label id = "email" for="email">Email</label>
        <input required placeholder="Email do rock" name="email-cadastro" type="email" id ="">
        <br>
        <br>
        <label id ="usuario" for="usuario">Usuario</label>
        <input required placeholder="Usuario do rock" name="usuario-cadastro" type="text" id = "">
        <br>
        <br>
        <label id = "senha" for="senha">Senha</label>
        <input required placeholder="Senha de roqueiro" name="senha-cadastro" type="password" id = "">
        <br>
        <br>
        <input id = "btn" type="submit" value="Cadastrar">
        <p id = "jatem" >Já tem cadastro? <a href="index.php"><strong>faça seu login</strong></a></p>
      </form>
    </div>
</body>
</html>