<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1> Informações do Cliente.</h1>
		<hr />

		<Form Action="Pagina3.php" >
			<p>
				<b>Telefone: </b>
				<Input type="Texto" name="txtTelefone" />
			</p>
			<p>
				<b>Cidade: </b>
				<Input type="Texto" name="txtCidade" />
			</p>
			<input type="Submit" value="Enviar" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>
<?php

	$EMAIL = $_GET['txtEmail'];
	$NOME = $_GET['txtNome'];

	session_start();
	$_SESSION['email'] = $EMAIL;
	$_SESSION['nome'] = $NOME;
?>
