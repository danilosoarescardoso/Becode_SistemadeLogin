<?php

$conectar = mysqli_connect("127.0.0.1","root","") or die ("Erro na conexão");
mysqli_select_db($conectar, "becodeLoginBD") or die ("Base não encontrada");

?>
