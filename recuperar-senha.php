<?php include_once("senhas.php");?>
<html lang="pt-BR">

<head>

    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  jQuery lib-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

        

            <?php if(isset($_POST['logar'])){
    $email = $_POST['email'];
    
    $sql= 'SELECT * FROM usuarios WHERE email = :email';
    
    try{ 
        $query = $conecta->prepare($sql);
        $query->bindValue(':email',$email,PDO::PARAM_STR);
        $query->execute();
        
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        
        }catch(PDOexception $error_email){
        echo 'Erro ao selecionar email '.$error_email->getMessage();    
        }
        
        foreach($res as $resEmail){
            $nome = $resEmail['nome'];
            $email = $resEmail['email'];
            $senhas = $resEmail['senha'];
            
     $mail_data = date('Y/m/d H:i:s');
     $destinatario = 'suporte@protrademkt.com.br';
     $assuntoEmail = 'Reenvio de Dados'.$nome;
     $headers = "From: $destinatario\n";
     $headers .= "content-type: text/html; charset = \"utf-8\"/n/n";
     
     $mensagemRecupera = "
       REeenvio de Dados<br />
       <strong>Usuário Nome:</strong> $nome<br />
       <strong>Usuário E-mail:</strong> $email<br />
       <strong>Usuário senha:</strong> $senhas.
       
       <br />
       <br />
       Mensagem enviada em $mail_data.
     ";
     mail($destinatario,$assuntoEmail,$mensagemRecupera,$headers);
     
     $usuarioAssunto = 'Reenvio de Dados';
     $mensagemUsuario = "<html><body>
       <strong>E-mail de segurança, guarde este e-mail para futuras consultas!</strong><br />
       Olá <span style='font-weight: bold; color: #0e3178;'> $nome. </span><br>  Seus dados de acesso são: <br /><br />
       Login: $email <br />
       Senha: $senhas<br /><br/>
       </span>
       Está é uma mensagem automática de nosso sistema, você não precisa responder a mesma!
       <br />
       <br />
       Mensagem enviada em $mail_data.  <br>
     
     </body></html>";
     mail($email,$usuarioAssunto,$mensagemUsuario,$headers);
    
        }//if
    }//foreach

    ?>
  
    <form name="login_painel" action="" method="post">
    <span class="small" style="color: #07e09b !important;">Para receber os dados de acesso, <strong><br>informe abaixo seu e-mail de login</strong></span>
    <br></br>
     <div class="inputGroup">
                    <p>
                        <label>E-mail</label>
                        <br>
                        <input required="required" type="text" name="email" requiree>
                        <span class="inputBar"></span>
                    </p>
                </div>
                
                <button type="submit" name="logar" class="small" onclick="cadastro() "  style="color: #ffffff !important; font-size:15px !important;">Recuperar senha
                <script>
    function cadastro(){
       alert('E-mail com os dados de acesso enviado com sucesso!');
    }
</script>
</button>
               
   
    </form>

        </div>

    </div>
</div>


</body>
</html>