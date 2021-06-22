<?php
	$NOME = $_GET['txtNome'];
	$TELEFONE = $_GET['txtTelefone'];
	$EMAIL = $_GET['txtEMAIL'];
	$SENHA = $_GET['txtSenha'];
	
	echo "<h1>Resultado do Cadastro</h1>";
	echo "<br><b>Nome: </b>" . $NOME;
	echo "<br><b>Telefone: </b>" . $TELEFONE;
	echo "<br><b>Email: </b>" . $EMAIL;
	echo "<br><b>Senha: </b>" . $SENHA;

	
?>