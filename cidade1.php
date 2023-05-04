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
  <div class="painelcontrol"> <center><div id="data_atual" style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:19px; justify-content: center;"></p></center>

 <script>
texto = "Data atual: ";
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("data_atual").innerHTML = texto  +  day + "/" + month + "/" + year;
</script>

    <center></br>

      <h1 style="color:#000; font-family:Arial, Helvetica, sans-serif; font-size:19px; justify-content: center;">Bem vindo ao Painel, <B><?php echo $_SESSION['nome']; ?></B>.</h1>
    </center>

    <center> <strong style="color:#fff;  text-transform: uppercase; font-family:Arial, Helvetica, sans-serif; font-size:19px; justify-content: center;">
        <a href="logout.php">Sair</a>
      </strong>
    </center>
    </div></br>

    <iframe title="AÇÃO DE INVERNO - BLACK PRINCESS - CAMPOS E REGIÃO" width="100%" height="700px" src=https://app.powerbi.com/view?r=eyJrIjoiYzkzNjY2MTItZTIyYi00OTRjLTk1ODEtNjBlMWM5NWY3Y2NmIiwidCI6IjQ2ZTFjMjEwLTI1MjUtNGZlYy05ZTc3LTM4YWJlYzJjOWQ4NiJ9&pageName=ReportSection frameborder="1" allowFullScreen="true" style="background-color:#000000;"></iframe>
</body>

</html>