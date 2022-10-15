<?php
  session_start();
  include_once("conexao.php");


  if(!$_SESSION['usuarioAdmin']){
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
  <title>ADMIN DO ROCK</title>
  <link rel="stylesheet" href="./styles/adminstyle.css">
  
</head>
<body>
  <style>
    body{
      background-color: white;
    }
    .tabela-admin{
      background-color: black;

    }
    th{
      background-color: yellow;
    }
    td{
      text-align: center;
      background-color: white;
    }
 

  </style>
  <div class = "caixote">

  
  <a href="sair.php"><button>Sair</button></a>
  <div>
    <h1>Administração da Turnê do rock</h1>
    <table class="tabela-admin">
      <thead>
        <tr>
            <th><strong>ID</strong></th>
            <th><strong>USUARIO</strong></th>
            <th><strong>EMAIL</strong></th>
            <th><strong>ADMIN</strong></th>
            <th class="magnusmito">EDITAR</th>
            <th class="magnusmito">DELETAR</th>
        </tr>

      </thead>
      </div>
      <tbody>
        <?php
          $allUsers= "SELECT * FROM users";
          $resultado  = mysqli_query($conn, $allUsers);
          while($user = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td id=".$user['id'].">".$user['id']."</td>";
            echo "<td>".$user['usuario']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['admin']."</td>";
            echo "<td class = 'mags'><a href="."editar.php?id=".$user['id']."><button>Editar</button></a></td>";
            echo "<td class = 'mags'><a href="."deletar.php?id=".$user['id']."><button>Deletar</button></a></td>";
            echo"</tr>";
          }
        ?> 
      </tbody>
    </table>
  </div>
</body>
<script src="teste.js"></script>
</html>