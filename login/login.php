
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Login</title>
</head>
<body>

	<div class="container">

		<form method="POST" action="valida_login.php">
			<h2>Área de Login</h2>
			<label for="inputEmail">Endereço de e-mail</label>
			<input type="email" id="inputEmail" name="email" placeholder="Endereço de email"><br>
			
			<label for="inputPassword" >Palavra-passe</label>
			<input type="password" name="senha" id="inputPassword" placeholder="Palavra-passe" required><br><br>
			

			<button type="submit">Entrar</button>

		</form>


	</div> <!-- /container -->


</body>
</html>