<!DOCTYPE html>
<html>
	<head>
		<title>Dados do Produto</title>
	</head>
	<body>
		<h1>Informacao do Produto</h1>
		<hr />
		<h3>Por Favor Inserir as Informacoes abaixo: </h3>
		<Form Action="Dados_cliente.php" >
			<p><b>Produto: </b><br>
				<Input type="Texto" name="txtProduto" />
			</p>
			<p><b>Quantidade: </b><br>
				<Input type="Texto" name="txtQtd" />
			</p>
			<p><b>Valor Unitário: </b><br>
				<Input type="Texto" name="txtValor" />
			</p>
			<p><b>Desconto: </b><br>
				<Input type="Texto" name="txtDesconto" />
			</p>
			<input type="Submit" value="Envio" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>