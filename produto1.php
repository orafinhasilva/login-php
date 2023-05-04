<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <!-- meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--  jQuery lib-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
  </script>


  <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

  <!-- MAIN CSS -->
  <link rel="stylesheet" type="text/css" href="css/reusable.css">

  <!-- informações da página -->
  <title>Dashboard</title>
</head>

<body>
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
    <h1 style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:19px; justify-content: center;">Bem vindo ao Painel, <B><?php echo $_SESSION['nome']; ?></B>.</h1>
    </center>
    <center><div id="data_atual" style="color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:10px; justify-content: center;"></p></center>

<script>
texto = "Data atual: ";
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("data_atual").innerHTML = texto  +  day + "/" + month + "/" + year;
</script>

   <center>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">

  <strong style="color:#fff;  text-transform: uppercase; font-family:Arial, Helvetica, sans-serif; font-size:16px; justify-content: center;">
        <a href="logout.php" style="color:#fff; cursor: pointer;">Sair</a> |
        <a  onclick="window.history.go(-1);" style="color:#fff; cursor: pointer ;">Voltar</a>
      </strong>
  

  </div>
</div>



    <iframe title="NISSIN" width="100%" height="700px" src=https://app.powerbi.com/view?r=eyJrIjoiNmE2M2NkNmItNmE0Yy00YjY0LWJkNmItZDg3ZTJhYzgxZTZhIiwidCI6IjQ2ZTFjMjEwLTI1MjUtNGZlYy05ZTc3LTM4YWJlYzJjOWQ4NiJ9 frameborder="1" allowFullScreen="true" style="background-color:#000000;"></iframe>
</body>

</html>