<?php
	Session_start();
	If ($_SESSION['Chave'] != "ABC"){
		header("Location:Login.php");
	}
?>
<?php
	//Coletar Dados vindos dos formulários cadastro de usuários e salvar no Banco de Dados
	Include_Once 'Bd.php';
	$PRODUTO = $_GET['txtProduto'];
	$VALOR = $_GET['txtValor'];
	//Se o usuário entrar com um Valor de (,) ou (.), ele irá trocar para (.) assim tendo //liberdade de entrada.
	$VALOR = str_replace(',','.',$VALOR);
	//A variável 'con' será o nosso objeto de classe mysqli
	$Con = new mysqli($bd_Servidor,$bd_Usuario,$bd_Senha,$bd_Banco);

	If ($Con->connect_error){
		die("Erro ao Conectar com o Banco de Dados.");
	} else {
		echo "<h3>A conexão com o Banco de Dados foi aberta!</h3>";
		$sql = "Insert into Produtos (Produto, Valor)
				values ('$PRODUTO', $VALOR)";
		$Retorno = $Con->query($sql);
		If ($Retorno == true){
			//echo "<h4>O Registro foi inserido com Sucesso.</h4>";
			header("Location:Cad_Usuarios.php");
		}
		$Con->close();
	}

?>