<!DOCTYPE html>
<html>
	<head>
		<title>Dados Adicionais</title>
	</head>
	<body>
		<h1>Informacões Adicionais</h1>
		<hr />
		<h3>Por Favor, se necessario, inserir informações abaixo(Somente Necessário): </h3>
		<Form Action="Mostrar_dados.php" >
			<p><b>Valor do Frete: </b><br>
				<Input type="Texto" name="txtFrete" />
			</p>
			<input type="Submit" value="Envio" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>
<?php
	session_start();
	$_SESSION['Endereco'] = $_GET['txtEndereco'];
	$_SESSION['Numero'] = $_GET['txtNumero'];
	$_SESSION['Complemento'] = $_GET['txtComplemento'];
	$_SESSION['Cidade'] = $_GET['txtCidade'];
	$_SESSION['Estado'] = $_GET['txtEstado'];
	$_SESSION['CEP'] = $_GET['txtCEP'];
?>