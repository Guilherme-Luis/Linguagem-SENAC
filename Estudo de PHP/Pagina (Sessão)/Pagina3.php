<?php
	session_start();
	Echo "<h1>Informações do CLiente</h1><hr />";

	$NOME = $_SESSION['nome'];
	$EMAIL = $_SESSION['email'];
	$TELEFONE = $_GET['txtTelefone'];
	$CIDADE = $_GET['txtCidade'];


	Echo "<b>Nome: </b> $NOME <br>";
	Echo "<b>Email: </b> $EMAIL <br>";
	Echo "<b>Telefone: </b> $TELEFONE <br>";
	Echo "<b>Cidade: </b> $CIDADE <br>";

?>