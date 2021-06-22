<?php
	Session_start();
	If ($_SESSION['Chave'] != "ABC"){
		header("Location:Login.php");
	}
?>
<?php
	//Coletar Dados vindos dos formulários cadastro de usuários e salvar no Banco de Dados
	Include_Once 'Bd.php';

	$NOME = $_GET['txtNome'];
	$TELEFONE = $_GET['txtTelefone'];
	$USUARIO = $_GET['txtUsuario'];
	$SENHA = $_GET['txtSenha'];

	//A variável 'con' será o nosso objeto de classe mysqli
	$Con = new mysqli($bd_Servidor,$bd_Usuario,$bd_Senha,$bd_Banco);

	If ($Con->connect_error){
		die("Erro ao Conectar com o Banco de Dados.");
	} else {
		echo "<h3>A conexão com o Banco de Dados foi aberta!</h3>";
		$sql = "Insert into Usuarios (NOME,TELEFONE,USUARIO,SENHA)
				Values ('$NOME','$TELEFONE','$USUARIO','$SENHA')";
		$Retorno = $Con->query($sql);
		If ($Retorno == true){
			//echo "<h4>O Registro foi inserido com Sucesso.</h4>";
			header("Location:Cad_Usuarios.php");
		}
		$Con->close();
	}

?>