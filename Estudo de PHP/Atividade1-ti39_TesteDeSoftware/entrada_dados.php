<html>
	<h1>Entrada de dados</h1>
	<hr />
	<form name="dados" action="recebe_dados.php" >
		<h4>Nome:</h4>
		<input type="text" name="txtNome" maxlength="50" />
		<h4>Cidade:</h4>
		<input type="text" name="txtCidade" />
		<h4>Telefone:</h4>
		<input type="text" name="txtTelefone" pattern="[0-9]{9}"/>
		<h4>UF:</h4>
		<input type="text" name="txtUF" maxlength="2"/>
		<p>
			<input type="submit" name="enviar" value="Enviar" />
		</p>

	</form>
</html>

