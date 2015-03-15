<?php
    include "../connect.php";
	$query = "INSERT INTO compraticket(Empresa_CNPJ, Administrador_Login, QuantidadeTicket, Valor,Data,Estado) VALUES ('".$_COOKIE["empcnpj"]."','gudominguete',".$_POST["group"].",'". date("Y-m-d H:i:s") . "','A')";
	mysql_query($query) or die(mysql_error());
	
	//$query = "INSERT INTO empresa(CNPJ, Login,email, Telefone,Telefone2,Cidade,Endereco,Bairro,Nome, Senha,QuantidadeTicket) VALUES ('". $cnpj ."','". $login . "','" . $email . "','" . $tel1 . "','" . $tel2 . "','" . $cidade . "','" . $end . "','" . $bairro . "','" . $nome . "','" . $senha . "',0)";
	setcookie("empmensage", "Compra feita com sucesso, esperando a aprovação do pagamento!");
	
	header("Location: index.php");
?>