<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1> Entrada de Dados, autenticação requerida.</h1>
		<hr />

		<Form Action="Verifica_Login.php" >
			<p>
				<b>E-Mail: </b>
				<Input type="Texto" name="txtEmail" />
			</p>
			<p>
				<b>Senha: </b>
				<Input type="Texto" name="txtSenha" />
			</p>
			<input type="Submit" value="Enviar" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>
<?php
	If(isset($_GET['erro']) ){
		echo "<h4>Usuário ou Senha Invalidos.</h4>";
	}

?>