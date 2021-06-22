<!DOCTYPE html>
<html>
	<head>
		<title>Dados do Cliente</title>
	</head>
	<body>
		<h1>Informacao do Cliente</h1>
		<hr />
		<h3>Por Favor Inserir as Informacoes abaixo: </h3>
		<Form Action="Dados_entrega.php" >
			<p><b>Nome: </b><br>
				<Input type="Texto" name="txtNome" />
			</p>
			<p><b>Telefone: </b><br>
				<Input type="Texto" name="txtTelefone" />
			</p>
			<input type="Submit" value="Envio" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>
<?php
	session_start();
	$_SESSION['Produto'] = $_GET['txtProduto'];
	$_SESSION['Qtd'] = $_GET['txtQtd'];
	$_SESSION['Unt'] = $_GET['txtValor'];
	$_SESSION['Des'] = $_GET['txtDesconto'];

?>