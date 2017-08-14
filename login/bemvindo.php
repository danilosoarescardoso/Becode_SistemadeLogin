<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Bem-vindo!</title>
</head>
<body>

	<h1> <?php echo "Bem-vindo, ".$_SESSION['email']; ?>! </h1>

</body>
</html>