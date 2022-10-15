<?php
  session_start();

  if($_SESSION['usuarioId'] != null){
    if($_SESSION['usuarioAdmin']){
      header("Location: adminpage.php");
    }
    echo "<br>id: ". $_SESSION['usuarioId'];
    echo "<br>Usuario: ". $_SESSION['usuarioNome'];
    echo "<br>email: ". $_SESSION['usuarioEmail'];
    echo "<br>senha: ". $_SESSION['usuarioSenha'];
    echo "<br>admin: ". $_SESSION['usuarioAdmin'];
  }else{
    $_SESSION['loginErro'] = "Usuario ou senha inválido";
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iron Maiden World Tour 2023</title>
  <meta name = "viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<body>
  <header>
  <div class="logo"><ing src="https://i0.wp.com/www.xsnoize.com/wp-content/uploads/2022/10/5f4716cf-e259-08cb-5c1b-467b25aaa2b5_edited.jpg" /></div> 

  </header>


<a href="sair.php"><button>Sair</button></a>
</body>
</html>
