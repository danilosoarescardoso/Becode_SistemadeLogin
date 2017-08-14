<?php

session_start();

include_once("conexao.php");

//prevenir erro quando é nulo
if(isset($_POST["nome"]) || 
	isset($_POST["email"]) || 
	isset($_POST["senha"]) 
	){ 

		$senha = $_POST["senha"];
		$email = $_POST["email"];
		$nome = $_POST["nome"];


echo $_POST["nome"];

		$query = "INSERT INTO usuarios (nome, email, senha) 
			VALUES ('$nome', '$email', '$senha')";
		$resultado = mysqli_query($conectar, $query) or die (mysqli_error());

		if (mysqli_affected_rows($conectar) !=0){
			echo "<script>alert('Dados salvos com sucesso!')</script>";
			echo "<script type='text/javascript'>  window.location='login.php'; </script>";

		}

		else{
			echo "<script>alert('Houve erros na hora de salvar os dados')</script>";
			echo "<script type='text/javascript'>  window.location='login.php'; </script>";

		}
		}
		else{
	echo "<script>alert('Favor preencher todos os campos!')</script>";
	echo "<script type='text/javascript'>  window.location='login.php'; </script>";
}


?>	