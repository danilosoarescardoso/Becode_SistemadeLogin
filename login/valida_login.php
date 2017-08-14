<?php

session_start();

$emailt = $_POST['email'];
$senhat = $_POST['senha'];


$conectar = mysqli_connect("127.0.0.1","root","") or die ("Erro na conexão");
mysqli_select_db($conectar, 'becodeLoginBD');

$sql = "SELECT * FROM usuarios WHERE email='$emailt' AND senha='$senhat' LIMIT 1";
$result = mysqli_query($conectar, $sql);

$numeroLinhas=mysqli_num_rows($result);

if($numeroLinhas == 0) { 
	
	die(mysqli_error($conectar));

	//Mensagem de erro
	echo "<script>alert('Usuário ou senha inválidos')</script>";

	//redirecionamento para login
	echo "<script type='text/javascript'>  window.location='login.php'; </script>";

}

else{

	$resultado = mysqli_fetch_assoc($result);

	//variáveis globais que recebem os dados do usuário
	$_SESSION['email'] = $resultado['email'];


	//redirecionamento para login
	echo "<script type='text/javascript'>  window.location='bemvindo.php'; </script>";
	echo "teste";

}


mysqli_close($conectar);


?>

