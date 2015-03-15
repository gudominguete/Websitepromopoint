<html>
<body>

<?php
    include "../connect.php";
	$nome = $_POST["empname"];
	$login = $_POST["empnewlogin"];
	$email = $_POST["empmail"];
	$tel1 = $_POST["emptel1"];
	$tel2 = $_POST["emptel2"];
	$cidade = $_POST["empcity"];
	$end = $_POST["empend"];
	$bairro = $_POST["empbairro"];
	$senha = $_POST["newpass"];
	$cnpj = $_POST["empcnpj"];
	
	
	$query = "INSERT INTO empresa(CNPJ, Login,email, Telefone,Telefone2,Cidade,Endereco,Bairro,Nome, Senha,QuantidadeTicket) VALUES ('". $cnpj ."','". $login . "','" . $email . "','" . $tel1 . "','" . $tel2 . "','" . $cidade . "','" . $end . "','" . $bairro . "','" . $nome . "','" . $senha . "',0)";
	mysql_query($query) or die(mysql_error());
	
	
	setcookie("empcriarlogin",true);
	
	header("Location: index.php");
?>
</body>
</html>