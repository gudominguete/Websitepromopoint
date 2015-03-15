<?php
	include "../connect.php";
	$login = $_POST["userlog"];
	$pass = $_POST["userpass"];
	
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
		header("Location: index.php");
	}
	$row = mysql_fetch_assoc($result);
	//criar algorimto de criptografia
	if($row['Senha'] == $pass)
	{
		echo "Login efetuado com sucesso!";
		setcookie("emplogado", true, time()+3600*24);
		setcookie("emplogin",$row['Login']);
		header("Location: painelemp.php");
	}
	else
	{
		setcookie('emploginerror',true);
		header("Location: index.php");
	}
?>