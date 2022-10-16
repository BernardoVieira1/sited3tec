<?php
  session_start();
  include_once("../conexao.php");


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
  <link rel="stylesheet" href="../styles/adminstyle.css">
  
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
    <div>
        <a href="../adminpage.php"><button>Voltar</button></a>
        <a href="../sair.php"><button>Sair</button></a>
    </div>
    <div>
      <h1>Lista de shows</h1>
      <a href="adicionar.php"><button>Adicionar</button></a>
      <table class="tabela-show">
        <thead>
          <tr>
              <th><strong>ID</strong></th>
              <th><strong>LOCAL</strong></th>
              <th><strong>DATA</strong></th>
              <th class="magnusmito">EDITAR</th>
              <th class="magnusmito">DELETAR</th>
          </tr>

        </thead>
        </div>
        <tbody>
          <?php
            $allShows= "SELECT * FROM shows";
            $resultado  = mysqli_query($conn, $allShows);
            while($show = mysqli_fetch_assoc($resultado)){
              echo "<tr>";
              echo "<td id=".$show['id'].">".$show['id']."</td>";
              echo "<td>".$show['local']."</td>";
              echo "<td>".$show['data']."</td>";
              echo "<td class = 'mags'><a href="."editar.php?id=".$show['id']."><button><img src='../arquivos/editar.svg' açt='editar'></button></a></td>";
              echo "<td class = 'mags'><a href="."deletar.php?id=".$show['id']."><button><img src='../arquivos/excluir.svg' açt='deletar'></button></a></td>";
              echo"</tr>";
            }
          ?> 
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>