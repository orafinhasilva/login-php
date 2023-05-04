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
  <link rel="icon" type="image/x-icon" href="https://protrademkt.com.br/petland/assets/fav.jpg">

  <!--  jQuery lib-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
 <!-- <script type="text/javascript">
function tecla() { } function clique(e) { if (navigator.appName == 'Netscape' && e.which != 1) { return false; } else if (navigator.appName == 'Microsoft Internet Explorer' && event.button !=1) { return false; } return true; } document.onmousedown = clique; document.onkeydown=tecla; function click() { if (event.button==2||event.button==3) { oncontextmenu='return false'; } } document.onmousedown=click; document.oncontextmenu = new Function("return false;"); function disableselect(e ){ return false; } function reEnable(){ return true; } document.onselectstart=new Function ("return false"); if (window.sidebar){ document.onmousedown=disableselect; document.onclick=reEnable; } var hellotext=" Código Protegido "; var thetext=""; var started=false; var step=0; var times=1; function welcometext() { times--; if (times==0) { if (started==false) { started = true; window.status = hellotext; setTimeout("anim()",1); } thetext = hellotext; } } function showstatustext(txt) { thetext = txt; setTimeout("welcometext()",3900); times++; } function anim() { step++; if (step==1) {window.status=thetext} if (step==2) {window.status=thetext} if (step==3) {step=1} setTimeout("anim()",70); } welcometext();
</script> -->
<div class="container">
  <div class="boxform2" loading="lazy">


    <div class="formbp2">

      <div class="logosbp2">
      <img src="assets/logos/logo01.png" width="10%" loading="lazy" class="logosMB" style="float:left;">
        
      
      <h1 class="bigtitle2 cidadesP">ESCOLHA A FRANQUIA DE PRODUTOS QUE DESEJA CONSULTAR:</h1>
      <img src="assets/logos/logo02.png" width="10%" loading="lazy" class="logosMB" style="float:right;">
      </div>
      <hr class="linediv"></hr>

      <div class="rowbp">
        <div class="rowdiv"><a href="produto1.php"><img src="assets/logos/01.png" loading="lazy" class="efeito1 imgLogo hiddenImg"> </a> <button onclick="location.href='produto1.php'" type="button" class="btnmargin hiddenBTN">VULT</button> </div><br>
        <div class="rowdiv"><a href="#"><img src="assets/logos/00.jpg" loading="lazy" class="efeito1 imgLogo efeitoCinza hiddenImg"> <button onclick="location.href='#'" type="button" class="btnmargin hiddenBTN">OUI</button> </a> </div><br>
        <div class="rowdiv"><a href="#"><img src="assets/logos/02.png" loading="lazy" class="efeito1 imgLogo efeitoCinza hiddenImg"> <button onclick="location.href='#'" type="button" class="btnmargin hiddenBTN">EUDORA</button> </a> </div><br>
        <div class="rowdiv"><a href="#"><img src="assets/logos/03.png" loading="lazy" class="efeito1 imgLogo efeitoCinza hiddenImg"> <button onclick="location.href='#'" type="button" class="btnmargin hiddenBTN">AUSTRALIAN GOLD</button> </a> </div><br>


      </div>

    </div>

  </div>
</div>

<body>

</body>