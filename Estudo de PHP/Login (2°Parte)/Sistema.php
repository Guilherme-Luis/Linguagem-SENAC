<!DOCTYPE html>
<html>
	<head>
		<title>Tela de Cadastro</title>
	</head>
	<body>
		<h1> Tela de Cadastro, por Favor insira suas informacoes para continuar</h1>
		<hr />

		<Form Action= "Exibir_Dados.php" >
			<p><b>ID: </b> <br/>
				<Input type="Texto" name="txtID" />
			<p/>
			<p><b>Nome: </b><br/>
				<Input type="Texto" name="txtNome" />
			<p/>
			<p><b>Telefone: </b><br/>
				<Input type="Texto" name="txtTelefone" />
			<p/>
			<p><b>EMAIL: </b><br/>
				<Input type="Texto" name="txtEMAIL" />
			<p/>
			<p><b>Senha: </b><br/>
				<Input type="Texto" name="txtSenha" />
			<p/>
			<input type="Submit" value="Envio" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>


