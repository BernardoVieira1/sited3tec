<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login do Rock</title>
  <link rel="stylesheet" href="./styles/login.css">
</head>
<body>

  <div class= "caixa" align="center">
    <h1>Faça seu login</h1>
    <form class="tela-login" method="POST" action="validar.php">
      <label id = "email" for="">Email</label>
      <input required placeholder="Email do rock" name="email" type="email">
      <br>
      <br>
      <label id = "senha" for="">Senha</label>
      <input required placeholder="Senha do rock" name="senha" type="password">
      <br>
      <br>
      <input id="btn" type="submit" value="Entrar"> 
      <p id="jatem">não tem cadastro? <a href="telaCadastro.php"><strong>cadastre-se</strong></a></p>
    </form>
    <p>
      <?php
        if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        };
      ?>
    </p>
  </div>
</body>
</html>