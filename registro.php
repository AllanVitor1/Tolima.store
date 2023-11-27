<?php 

include("connect.php");
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $user = $_POST['user'];

  $select = mysqli_query($conn, "select * from tolima.cad_users where email = '$email'");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="/registro.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <h1>Registro</h1>
        <div class="caixa-entrada">
          <input id="user" name="user" type="user" placeholder="user" required />
          <i class="bx bxs-user"></i>
        </div>
        <div class="caixa-entrada">
          <input id="email" name="email" type="email" placeholder="email" required />
          <i class='bx bxs-envelope'></i>
        </div>
        <div class="caixa-entrada">
          <input id="senha" name="senha" type="senha" placeholder="senha" required />
          <i class="bx bxs-lock-alt"></i>
        </div>
        <button id="submit" name="submit" type="submit">Registre-se</button>
        <div class="registrar">Já tem uma conta? <a href="#">Login!</a></div>
      </form>
    </div>
  </body>
</html>
