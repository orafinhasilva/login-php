<?php
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {

  $email = $mysqli->real_escape_string($_POST['email']);
  $senha = $mysqli->real_escape_string($_POST['senha']);

  $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    session_start();
    $usuario = $result->fetch_assoc();
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['nivel'] = $usuario['nivel'];
    $_SESSION['empresa'] = $usuario['empresa'];

    if (($_SESSION["nivel"] == 3 || $_SESSION["nivel"] == 2) && ($_SESSION["empresa"] == "Boticario" || $_SESSION["empresa"] == "Protrade")) {
      $data = date('Y-m-d');
      $horario = date('H:i:s');
      $sql_update = "UPDATE usuarios SET ultimo_login = '$data $horario' WHERE id = '{$_SESSION['id']}'";
      $mysqli->query($sql_update);

      if ($_SESSION["nivel"] == 3) {
        header("Location: produto.php");
      }
      if ($_SESSION["nivel"] == 2) {
        header("Location: produto.php");
      }
    } else {
      echo "Acesso negado. Empresa não permitida ou nível inválido.";
    }

  } else {
    echo "Usuário ou senha incorretos.";
  }

}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/x-icon" href="https://protrademkt.com.br/petland/assets/fav.jpg">

    <!--  jQuery lib-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,200;1,300&display=swap" rel="stylesheet">
    <link href="https://www.dafontfree.net/embed/dW5pdmVycy1jb25kZW5zZWQtYm9sZCZkYXRhLzQwL3UvMTAzMDIwL1VOVlI2N1cuVFRG" rel="stylesheet" type="text/css"/>
               
    <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="css/reusable.css">

    <!-- informações da página -->
    <title>Dashboard</title>

</head>

<body>
<script>
    jQuery(document).ready(function($) {

        $('#show_password').hover(function(e) {
            e.preventDefault();
            if ($('#password').attr('type') == 'password') {
                $('#password').attr('type', 'text');
                $('#show_password').attr('class', 'fa fa-eye');
            } else {
                $('#password').attr('type', 'password');
                $('#show_password').attr('class', 'fa fa-eye-slash');
            }
        });

    });
</script>

<div class="container">
    <div class="boxform">


        <div class="formbp">

            <div class="logosbp">
                <img src="assets/logos.png"  width="80%">
            </div>

            <h1 class="bigtitle">Faça o Login</h1>
            <form action="" method="POST">
                <div class="inputGroup">
                    <p>
                        <label>E-mail</label>
                        <br>
                        <input required="required" type="text" name="email" require>
                        <span class="inputBar"></span>
                    </p>
                </div>

                <div class="inputGroup">
                    <p>
                        <label>Senha</label>
                        <br>
                        <span type="button" id="show_password" name="show_password" class="fa fa-eye-slash" aria-hidden="true"></span>
                        <input required="required" type="password" name="senha" id="password" require>
                        <span class="inputBar"></span>

                    </p>
                </div>

                <p>
                    <button type="submit" style="color: #ffffff;">Login</button>
                </p>
                <br>
                <p class="smallmb" style="color: #ea0000; font-size: 1.0em; font-family:Arial, Helvetica, sans-serif; "><?php echo $errolog; ?></p>
                <p class="small">Esqueceu sua senha? <strong><a href="recuperar-senha.php" style="color: #07e09b;">Clique aqui</a></strong></p>
                       </form>

        </div>

    </div>
</div>



</body>
</html>