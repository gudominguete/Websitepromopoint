<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PromoPoint - Nova conta de Empresa</title>
    <script type="text/javascript" language="javascript" src="../script/jquery.js"></script>
</head>

<body>
	<p>Nova conta de administrador</p>
        <form action="validarnewemp.php" method="post" name="formulario" onSubmit="ValidarNovaEmpresa()">
        	Nome:<input type="text" name="empname" id="empname"><br>
            CNPJ:<input type="text" name="empcnpj" id="empcnpj"><br>
       		Login:<input type="text" name="empnewlogin" id="empnewlogin"><br>
        	E-mail:<input type="email" name="empmail" id="empmail"><br>
        	Repita o e-mail:<input type="email" name="empnewmail" id="empnewmail"><br>
            Telefone:<input type="tel" name="emptel1" id="emptel1"><br>
            Telefone 2:<input type="tel" name="emptel2" id="emptel2"><br>
            Cidade:<input type="text" name="empcity" id="empcity"><br>
            Endereço<input type="text" name="empend" id="empend"><br>
            Bairro<input type="text" name="empbairro" id="empbairro"><br>
        	Senha:<input type="password" name="newpass" id="newpass"><br>
        	Repita a senha:<input type="password" name="newreppass" id="newreppass"><br>
        	<input type="submit" value="Enviar">
        </form>
        <div id="error"></div>
        
        <script>
		jQuery(function($){
			$('form').submit(function(){
				if(!ValidarNovaEmpresa())
				{
				    return false;	
				}
			});
		});
		
		function ValidarNovaEmpresa()
		{
			var error = document.getElementById("error");
			error.innerHTML ="";
			var strerror="<p>O(s) campo(s) estão vazios:</p>";
			var flag = 0;
			if ($.trim($("#empname").val()).length == 0)
			{
				strerror += "<p>Nome</p>";
				flag =1;
			}
			if ($.trim($("#empcnpj").val()).length == 0)
			{
				strerror += "<p>CNPJ</p>";
				flag =1;
			}
			if($.trim($("#empnewlogin").val()).length == 0)
			{
				strerror+="<p>Login</p>";
				flag =1;
			}
			if($.trim($("#empmail").val()).length == 0)
			{
				strerror+="<p>E-mail</p>";
				flag =1;
			}
			if($.trim($("#empnewmail").val()).length == 0)
			{
				strerror+="<p>Repetir e-mail</p>";
				flag =1;
			}
			if($.trim($("#emptel1").val()).length == 0)
			{
				strerror+="<p>Telefone 1:</p>";
				flag =1;
			}
			if($.trim($("#empcity").val()).length == 0)
			{
				strerror+="<p>Cidade</p>";
				flag =1;
			}
			if($.trim($("#empend").val()).length == 0)
			{
				strerror+="<p>Endereço</p>";
				flag =1;
			}
			if($.trim($("#empbairro").val()).length == 0)
			{
				strerror+="<p>Bairro</p>";
				flag =1;
			}
			if($.trim($("#newpass").val()).length == 0)
			{
				strerror+="<p>Senha</p>";
				flag =1;
			}
			if($.trim($("#newreppass").val()).length == 0)
			{
				strerror+="<p>Repetir senha</p>";
				flag =1;
			}
			if(flag == 0)
			{
				
				var email = document.getElementById("empmail").value;
				var newmail= document.getElementById("empnewmail").value;
				if(email === newmail)
				{
					password= document.getElementById("newpass").value;
					newpassword = document.getElementById("newreppass").value;
					if(password === newpassword)
					{
						return true;
					}
					else
					{
						strerror="<p> As senhas não estão identicas!</p>";
					}
				}
				else
				{
					strerror="<p>Os e-mails não são iguais!</p>";
				}
			}
			
			error.innerHTML=strerror;
			return false;
			
		}
		</script>
</body>
</html>