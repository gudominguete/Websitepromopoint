<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PromoPoint - Nova conta do usuário</title>
</head>
	<body>
        <p>Nova conta de administrador</p>
        <form action="validarnewadmin.php" method="post">
        Nome:<input type="text" name="adminname" id="adminname"><br>
        Nome do novo login:<input type="text" name="newlogin" id="newlogin"><br>
        E-mail:<input type="email" name="adminmail" id="adminmail"><br>
        Repita o e-mail:<input type="email" name="newadminmail" id="newadminmail"><br>
        Senha:<input type="password" name="newpass" id="newpass"><br>
        Repita a senha:<input type="password" name="newreppass" id="newreppass"><br>
        <input type="button" value="Enviar" onClick="ValidarNovoAdministrador()">
        </form>
        <script>
		 function ValidarNovoAdministrador()
		 {
			 var email = document.getElementById("adminmail").value;;
			 var novoemail = document.getElementById("newadminmail").value;
			 var senha = document.getElementById("newpass").value;
			 var repitasenha =document.getElementById("newreppass").value;
			 document.write(senha);
			 if(!(email === novoemail))
			 {
			 }
			 else
			 {
				 if(!(senha===repitasenha))
				 {
				 }
			 }
		 }
		</script>
	</body>
</html>