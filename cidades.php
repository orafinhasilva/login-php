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
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
  </script>


  <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
   
	
  <!-- MAIN CSS -->
  <link rel="stylesheet" type="text/css" href="css/reusable.css">

  <!-- informações da página -->
  <title>Dashboard</title>

</head>
   </html>
   <script>
jQuery(document).ready(function($) {
  
  $('#show_password').hover(function(e) {
    e.preventDefault();
    if ( $('#password').attr('type') == 'password' ) {
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
   <div class="boxform2" loading="lazy">


    <div class="formbp2">

        <div class="logosbp2">
            <img src="assets/logos.png" width="25%" loading="lazy">
        </div>

    <h1 class="bigtitle2">SELECIONE O LOCAL DA AÇÃO:</h1>

    <div class="rowbp">
      <div class="rowdiv"><a href="cidade1.php"><img src="assets/CIDADE1.png" loading="lazy"  class="efeito1"> </a> <button  onclick="location.href='cidade1.php'" type="button">Campos do Jordão</button></div>
      <div class="rowdiv"><a href="cidade2.php"><img src="assets/cidade2.png" loading="lazy"  class="efeito1"> </a> <button  onclick="location.href='cidade2.php'" type="button">Gramado & Canela</button></div>
      <div class="rowdiv"><a href="cidade3.php"><img src="assets/cidade3.png" loading="lazy"  class="efeito1"> </a> <button  onclick="location.href='cidade3.php'" type="button">São Roque</button> </div>
    </div>

    </div>

    </div>
</div>
<body>

</body>
