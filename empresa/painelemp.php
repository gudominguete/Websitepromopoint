<?php
    include "../connect.php";
    if(isset($_COOKIE['emplogado']))
	{
        $logado = $_COOKIE['emplogado'];
	    if($logado == true)
	    {
		    $login =  $_COOKIE['emplogin'];
		    echo "Login: " . $login . "<br>"; 
			$query = "SELECT * FROM empresa WHERE Login = '" . $login . "'";
			$result = mysql_query($query);
			if(!$result)
	        {
	        	die('Invalid query: ' . mysql_error());
	        }
	        $num_rows = mysql_num_rows($result);
	        if($num_rows === 0)
	        {
		        setcookie('emploginerror',true);
		        header("Location: empresa.php");
	        }
			$row = mysql_fetch_assoc($result);
			setcookie("emplogado", true, time()+3600*24);
		    setcookie("emplogin",$row['Login']);
	     	setcookie("empcnpj",$row['CNPJ']);
		    setcookie("empticket",$row['QuantidadeTicket']);
		    setcookie("empemail", $row['email']);
		    setcookie("emptel1",$row['Telefone']);
		    setcookie("emptel2",$row['Telefone2']);
		    setcookie("empcity",$row['Cidade']);
		    setcookie("empend",$row['Endereco']);
		    setcookie("empbairro",$row['Bairro']);
		    setcookie("empnome",$row['Nome']);
			
	    }
		else
		{
			header("Location: empresa.php");
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PromoPoint - Empresa - Painel Administrativo</title>
</head>
<body>
    <a href="comprarnovostickets.php">Comprar tickets</a><br>
    <a href="editaremp.html">Editar perfil</a><br>
    <a href="logoutemp.php">Logout </a><br>
</body>
</html>