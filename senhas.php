<?php

 define('HOST','localhost');

 define('DB','protra05_dash');

 define('USER','protra05_dash');

 define('PASS','Protrade@123');

 $conexao = 'mysql:host='.HOST.'; dbname='.DB;

 try{

         $conecta = new PDO($conexao,USER,PASS);

         $conecta->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

         

        }catch(PDOexception $error_conecta){

                echo 'Erro ao Conectar, favor informe no email contato@cotauberaba.com.br';

        }

?>