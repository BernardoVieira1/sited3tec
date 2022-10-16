<?php
  include_once("conexao.php");

  $id = $_GET['id'];

  $usuario= "SELECT * FROM users WHERE id=$id";
  $resultado  = mysqli_query($conn, $usuario);

  $user = mysqli_fetch_assoc($resultado);

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
      <h1>Editar usuario</h1>
      <form action="editarUser.php?id= <?php echo $user['id'] ?>" method="post">
        <label for="">Nome</label>
        <input name="usuario" type="text" value="<?php echo $user['usuario'] ?>">
        <label for="">Email</label>
        <input name="email" type="text" value="<?php echo $user['email'] ?>">
        <label for="">Admin</label>
        <input name="admin" type="text" value="<?php echo $user['admin'] ?>">
        <button type="submit"><img src="./arquivos/salvar.svg" alt="salvar"></button>
        <!-- <input type="submit" src="./" value="Editar"> -->
      </form>
    </div>
  </body>
</html>