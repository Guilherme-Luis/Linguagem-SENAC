<?php
	Session_start();
	If ($_SESSION['Chave'] != "ABC"){
		header("Location:Login.php");
	}
?>
<?php
	//Vai ate o Bd.php para importar as informações da conexão com o Servidor
	Include_Once 'Bd.php';
	$Con = new mysqli($bd_Servidor,$bd_Usuario,$bd_Senha,$bd_Banco);
	//Obter o usuário e Senha
	$USER = $_GET['txtUsuario'];
	$SENHA = $_GET['txtSenha'];

	If ($Con->connect_error){
		die("Erro ao Conectar com o Banco de Dados.");
	} else {
		$sql = "Select * From Usuarios
				where USUARIO='$USER' and SENHA='$SENHA'";
			//Executa o comando SQL
			$Retorno = $Con->query($sql);
			//Verifica se o Usuário e Senha são cadastrado no Banco de Dados
			If ($Retorno->num_rows > 0){
				//Se o retorno for maior que 1, o usuario e senha são valido
				$Con->Close();
				session_start();
				$_SESSION['Usuario'] = $USER;
				$_SESSION['Chave'] = 'ABC';
				header("Location:Cad_Usuarios.php");
			} else {
				//Deu Errado
				$Con->Close();
				header("Location:Login.php?erro=1");
			}
	}
?>