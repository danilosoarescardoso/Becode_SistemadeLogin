
<!DOCTYPE html>
<html>
<head>
	<title>Tela de Cadastro</title>
</head>
<body>

<h1>Tela de Cadastro</h1>

<form method="post" action="cadastra_usuario.php">

	<label for="nome">Nome</label>
	<input type="text" name="nome" placeholder="Insira seu nome"><br>

	<label for="email">Email</label>
	<input type="text" name="email" placeholder="exemplo@exemplo.com"><br>	

	<label for="senha">Senha</label>
	<input type="password" name="senha" placeholder="******"><br>

	<input type="submit" value="Enviar" name="submit">

</form>

</body>
</html>