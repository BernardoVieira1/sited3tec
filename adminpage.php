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
  <title>ADMIN</title>
  <link rel="stylesheet" href="./styles/adminstyle.css">
  
</head>
<body>
  <a href="sair.php"><button>Sair</button></a>
  <div>
    <h1>Turnê</h1>
    <table class="tabela-admin">
      <thead>
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>USUARIO</strong></td>
            <td><strong>EMAIL</strong></td>
            <td><strong>ADMIN</strong></td>
        </tr>

      </thead>
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
            echo "<td><a href="."editar.php?id=".$user['id'].">Editar</a></td>";
            echo "<td><a href="."deletar.php?id=".$user['id'].">Deletar</a></td>";
            echo"</tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
<script src="teste.js"></script>
</html>