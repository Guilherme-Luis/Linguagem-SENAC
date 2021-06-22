<?php
	echo "<h1>Pagina que recebe os dados</h1> <hr />";
	
	$NOME = $_GET['txtNome'];
	$CID = $_GET['txtCidade'];
	$FONE = $_GET['txtTelefone'];
	$EST = $_GET['txtUF'];

	echo "<h3> O nome informado foi: $NOME </h3>";
	echo "<h3>A Cidade Informado foi: $CID</h3>";
	echo "<h3> O telefone informado foi: $FONE </h3>";
	echo "<h3>O Estado Informado foi: $EST</h3>";


	//echo "<h2> O nome informado foi: $NOME </h2>";
	//echo "<h2> O telefone informado foi: $FONE </h2>";
?>
