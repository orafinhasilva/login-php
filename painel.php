<?php

include('protect.php');
if ($_SESSION['nivel'] != 3) die("Você não deveria estar aqui");

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
  <div class="painelcontrol"> <div id="data_atual" class="dataAtual"></p>

  <script>
  texto = "Data atual: ";
  date = new Date();
  year = date.getFullYear();
  month = date.getMonth() + 1;
  day = date.getDate();
  document.getElementById("data_atual").innerHTML = texto  +  day + "/" + month + "/" + year;
  </script>

  </br>
  
  <div class="msgBoas">
  <h1 style="font-size:2.0vh;">Bem vindo ao Painel, <B><?php echo $_SESSION['nome']; ?></B>.</h1>
  </div>

<strong style="color:#fff; ">
        <a href="logout.php">Sair</a>
      </strong>
    </div></br>
</br></br>
    <iframe title="KARCHER" width="100%" height="700px" src=https://app.powerbi.com/view?r=eyJrIjoiZjA1N2UxYjctNjExZi00NGE5LTk3MDctYzczOWYxMjUzODVhIiwidCI6IjQ2ZTFjMjEwLTI1MjUtNGZlYy05ZTc3LTM4YWJlYzJjOWQ4NiJ9&pageName=ReportSection5f2590fb5bb4b78cf9f7 frameborder="1" allowFullScreen="true" style="background-color:#000000;"></iframe>
</body>

</html>