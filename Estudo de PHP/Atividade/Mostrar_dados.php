<!DOCTYPE html>
<html>
	<head>
		<title>Confirmação de Informações</title>
	</head>
	<body>
		<h1>Informações Gerais</h1>
		<h3>Por Favor, Verificar as Informações Gerais: </h3>
		<hr />
	</body>
</html>
<?php
	session_start();

	$PROD = $_SESSION['Produto'];
	$QTD = $_SESSION['Qtd'];
	$UNT = $_SESSION['Unt'];
	$DES = $_SESSION['Des'];
	$NOME = $_SESSION['Nome'];
	$TEL = $_SESSION['Telefone'];
	$ENDE = $_SESSION['Endereco'];
	$NUM = $_SESSION['Numero'];
	$COM = $_SESSION['Complemento'];
	$CID = $_SESSION['Cidade'];
	$EST = $_SESSION['Estado'];
	$CEP = $_SESSION['CEP'];
	$FRETE = $_GET['txtFrete'];
	$PRECO = ($UNT * $QTD);


	Echo "<h3><p>Informações do Produto: </h3></p>";
	Echo "<b>Nome do Produto: </b>" . $PROD . "<br>";
	Echo "<b>Quantidade: </b>" . $QTD . "<br>";
	Echo "<b>Preço Unitário: </b>" . "R$" . $UNT . "<br>";
	Echo "<b>Preço do Frete: </b>" . "R$" . $FRETE . "<br>";
	If ($DES > 0) {
		Echo "<b>Valor Com Desconto: </b>" . "R$" . ($PRECO -(($PRECO * $DES)/100)) . "<br>";
		Echo "<b>Valor Total com Frete: </b>" . "R$" . (($PRECO - ($PRECO * $DES)/100) + $FRETE) . "<hr>";
	} Else {
		Echo "<b>Valor Com Desconto: </b>" . "Nenhum Valor Valido Inserido." . "<br>";
		Echo "<b>Valor Total: </b>" . "R$" . $PRECO;
		Echo "<b>Valor Total com Frete: </b>" . "R$" . ($PRECO + $FRETE) . "<hr>";
	}
	Echo "<h3><p>Informações do Cliente: </h3></p>";
	Echo "<b>Cliente: </b>" . $NOME . "<br>";
	Echo "<b>Telefone: </b>" . $TEL . "<br><hr>";
	Echo "<h3><p>Informações do Endereço: </h3></p>";
	Echo "<b>Endereço: </b>" . $ENDE . "<br>";
	Echo "<b>Numero: </b>" . $NUM . "<br>";
	Echo "<b>Complemento: </b>" . $COM . "<br>";
	Echo "<b>Cidade: </b>" . $CID . "<br>";
	Echo "<b>Estado: </b>" . $EST . "<br>";
	Echo "<b>CEP: </b>" . $CEP . "<br><hr>";
?>