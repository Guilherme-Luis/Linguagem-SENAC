<!DOCTYPE html>
<html>
	<head>
		<title>Dados da Entrega</title>
	</head>
	<body>
		<h1>Informacao da Entrega</h1>
		<hr />
		<h3>Por Favor Inserir as Informacoes abaixo: </h3>
		<Form Action="Dados_adicional.php" >
			<p><b>Endereço: </b><br>
				<Input type="Texto" name="txtEndereco" />
			</p>
			<p><b>Numero: </b><br>
				<Input type="Texto" name="txtNumero" />
			</p>
			<p><b>Complemento: </b><br>
				<Input type="Texto" name="txtComplemento" />
			</p>
			<p><b>Cidade: </b><br>
				<Input type="Texto" name="txtCidade" />
			</p>
			<p><b>Estado: </b><br>
				<Input type="Texto" name="txtEstado" />
			</p>
			<p><b>CEP: </b><br>
				<Input type="Texto" name="txtCEP" />
			</p>
			<input type="Submit" value="Envio" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>
<?php
	session_start();
	$_SESSION['Nome'] = $_GET['txtNome'];
	$_SESSION['Telefone'] = $_GET['txtTelefone'];
?>