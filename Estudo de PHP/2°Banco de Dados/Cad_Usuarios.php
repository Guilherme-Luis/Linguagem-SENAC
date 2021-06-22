<?php
	Session_start();
	If ($_SESSION['Chave'] != "ABC"){
		header("Location:Login.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tela de Cadastro</title>
	</head>
	<body>
		<h1> Tela de Cadastro, por Favor insira suas informacoes para continuar</h1>
		<hr />

		<Form Action= "Salvar_Dados.php" >
			<p><b>Produto: </b><br/>
				<Input type="Texto" name="txtProduto" />
			<p/>
			<p><b>Valor: </b><br/>
				<Input type="Texto" name="txtValor" />
			<p/>
			<input type="Submit" value="Envio" /> <!-- O Input do tipo Submit é um Botão-->
				<!--É Assim que faz Comentário-->
		</Form>
	</body>
</html>

<?php
	//Coletar Dados vindos dos formulários cadastro de usuários e salvar no Banco de Dados
	Include_Once 'Bd.php';
	//A variável 'con' será o nosso objeto de classe mysqli
	$Con = new mysqli($bd_Servidor,$bd_Usuario,$bd_Senha,$bd_Banco);
	If ($Con->connect_error){
		die("Erro ao Conectar com o Banco de Dados.");
	} else {
		echo "<h3>A conexão com o Banco de Dados foi aberta!</h3>";
		$sql = "Select * From Produtos";
		$Retorno = $Con->query($sql);
		If ($Retorno->num_rows > 0){
			While ($Registro = $Retorno->fetch_assoc()){
				Echo 
				"<p>
					<b>Produto:		</b>" . $Registro['Produto'] . "<br>" .
					"<b>Valor: 		</b>" . $Registro['Valor'] . "<br>" .
				"</p>";
			}

		}
		$Con->close();
	}
?>
