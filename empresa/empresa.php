<?php
    if(isset($_COOKIE['emplogado']))
	{
        $logado = $_COOKIE['emplogado'];
	    if($logado == true)
	    {
		    header("Location: painelemp.php");
	    }
	}
	if(isset($_COOKIE['emploginerror']))
	{
		$emploginerro = $_COOKIE['emploginerror'];
		if($emploginerro == true)
		{
		    echo "Usuário ou senha estão errados!";
			setcookie('emploginerror',false);
		}
	}
	if(isset($_COOKIE['empcriarlogin']))
	{
		if($_COOKIE['empcriarlogin'])
		{
			echo "Usuário criado com sucesso!";
			setcookie('empcriarlogin',false);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PromoPoint - Empresa</title>
</head>

	<body>
		<form action="validemp.php" method="post">
        	Login:<input type="text" name="userlog"><br>
            Senha:<input type="password" name="userpass"><br>
            <input type="submit" value="Login"><br />
         </form>
         <a href="newloginemp.php">Criar novo login</a>
	</body>
</html>