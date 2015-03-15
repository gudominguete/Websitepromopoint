<?php $hostname = "localhost";
   $dbname = "promopoint";
   $username = "root";
   $password = "";
   MYSQL_CONNECT($hostname, $username, $password) or die("Nao pode conectar");
   @mysql_select_db("$dbname") or die("Nao pude selecionar o banco de dados");
   
?>
