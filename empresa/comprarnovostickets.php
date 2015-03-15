<?php
    if(isset($_COOKIE['emplogado']))
	{
        $logado = $_COOKIE['emplogado'];
	    if($logado == false)
	    {
			header("Location: index.php");
	    }
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PromoPoint - Empresa - Compra de tickets</title>
</head>
<body>
<form method="post" action="validarpagamentoticket.php">
    <input type="radio" name="group" value="10,30">10 tickets - R$30,00<br>
    <input type="radio" name="group" value="20,50">20 tickets - R$50,00<br>
    <input type="radio" name="group" value="40,80">40 tickets - R$80,00<br>
    <input type="submit">
</form>
</body>
</html>