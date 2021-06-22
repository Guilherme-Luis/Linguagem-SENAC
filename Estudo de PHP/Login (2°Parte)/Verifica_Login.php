<?php
	//Obter o usuário e Senha
	$USER = $_GET['txtEmail'];
	$SENHA = $_GET['txtSenha'];

	If ($USER == "Admin" &&  $SENHA == "123456") {
		//Deu Certo
		echo "<h4>Usuário autenticado.</h4>";
		header("Location:Sistema.php");
	} else {
		//Deu Errado
		echo "<h4>Usuário ou Senha Invalidos.</h4>";
		header("Location:Login.php?erro=1");
	}
?>