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
  <title>Cadastro de show</title>
  <link rel="stylesheet" href="./styles/casdatrese.css">
</head>
<body>
<div align="center">
    </div>
    <div>
        <a href="./mostar.php"><button>Voltar</button></a>
        <a href="../sair.php"><button>Sair</button></a>
    </div>
  
  <div class = "caixa" align="center">
    <h1 id="cadastro">Cadastre um novo show</h1>
    <form method="POST" action="adicionarbanco.php">
      <label id = "localS" for="local">Local</label>
      <input required placeholder="mossoró" name="local-show" type="text" id ="">
      <br>
      <br>
      <label id ="dataS" for="data">Data</label>
      <input required name="data-show" type="date" id = "">
      <br>
      <br>
      <button id = "btn" type="submit" value="Cadastrar">Cadastrar</button>
    </form>
  </div>
</body>
</html>