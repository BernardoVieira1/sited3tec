<?php
  include_once("../conexao.php");

  $id = $_GET['id'];

  $shows= "SELECT * FROM shows WHERE id=$id";
  $resultado  = mysqli_query($conn, $shows);

  $show = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
  </head>
  <body>
    <div>
      <h1>Editar show</h1>
      <form action="editarShow.php?id= <?php echo $show['id'] ?>" method="post">
        <label for="">Local</label>
        <input name="localShow" type="text" value="<?php echo $show['local'] ?>">
        <label for="">Email</label>
        <input name="dataShow" type="date" value="<?php echo $show['data'] ?>">
        <button type="submit"><img src="../arquivos/salvar.svg" alt="salvar"></button>
        <!-- <input type="submit" src="./" value="Editar"> -->
      </form>
    </div>
  </body>
</html>