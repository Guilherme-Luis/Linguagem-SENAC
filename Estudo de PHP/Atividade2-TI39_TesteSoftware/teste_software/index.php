<?php
	print "<html>
				<head><title>Pagina de teste de software</title></head>
				<body>
					<h2>Teste de software - sistema de controle de alunos</h2>
					<hr />
					<form name=dados  method='post'>
						Aluno:<br>
						<input type='text' name='nome' /> <br>
					 	Série:<br>
          				<input type='text' name='serie' /> <br>
						Notas:<br>
          				<input type='number' name='nt1' size='3' min='0' max='100'/>
						<input type='number' name='nt2' size='3' min='0' max='100'/>
						<input type='number' name='nt3' size='3' min='0' max='100'/>
						<input type='number' name='nt4' size='3' min='0' max='100'/>
						<input type='number' name='nt5' size='3' min='0' max='100'/>
						<input type='number' name='nt6' size='3' min='0' max='100'/>
						<input type='number' name='nt7' size='3' min='0' max='100'/>
						<input type='number' name='nt8' size='3' min='0' max='100'/>
						<input type='number' name='nt9' size='3' min='0' max='100'/>
						<input type='number' name='nt0' size='3' min='0' max='100'/>
						<input type='submit' name='enviar' value='Enviar' />
					</form>
						<hr />
				</body>
				";
				verifica();
				mostrar_dados();
	
	function verifica(){
		if (isset($_POST['enviar'])){
			$servidor = "localhost";
    		$usuario  = "admin";
    		$senha    = "123456";
    		$banco    = "bd_alunos";
    		$i = 0;
    		
    		foreach ($_POST as $N) {
    			$i++;
    			If ($i >= 3 && $i <= 12){
    				If ($N >= 0 && $N <= 100) {
    					If ($i = 12){
    						$conn = new mysqli($servidor,$usuario,$senha,$banco);
    						if ($conn->connect_error){
      							die("Erro ao acessar banco de dados: ".$conn->connect_error);
    						} else {
     	 					//echo "Conexão realizada com sucesso!";
								$nome = $_POST['nome'];
								$serie = $_POST['serie'];
								$n1 = str_replace(',','.',$_POST['nt1']);
								$n2 = str_replace(',','.',$_POST['nt2']);
          						$n3 = str_replace(',','.',$_POST['nt3']);
          						$n4 = str_replace(',','.',$_POST['nt4']);
          						$n5 = str_replace(',','.',$_POST['nt5']);
          						$n6 = str_replace(',','.',$_POST['nt6']);
          						$n7 = str_replace(',','.',$_POST['nt7']);
          						$n8 = str_replace(',','.',$_POST['nt8']);
          						$n9 = str_replace(',','.',$_POST['nt9']);
          						$n0 = str_replace(',','.',$_POST['nt0']);
      							$sql = "insert into alunos
									(nome,serie,nota1,nota2,nota3,nota4,nota5,nota6,nota7,nota8,nota9,nota0)
									values('$nome','$serie',$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n0)";
      							$ret = $conn->query($sql);
									if ($ret < 0){
										echo "<h4>Registro inserido com sucesso!</h4><hr />";
									}
								$conn->close();	
							}
    					}
    				} else {
    					header("Location:index.php");
    				}
    			}
    		}	
		}
	}
	
	function mostrar_dados(){
		$servidor 	= "localhost";
		$usuario	= "admin";
		$senha		= "123456";
		$banco		= "bd_alunos";

		$conn = new mysqli($servidor,$usuario,$senha,$banco);

		if ($conn->connect_error){
			die("Erro ao acessar banco de dados: ". $conn->connect_error);
		} else {
			//echo "Conexão realizada com sucesso!";
			$sql = "Select * from alunos";
			$ret = $conn->query($sql);
			if ($ret->num_rows > 0){
				while ($r = $ret->fetch_assoc()){
					echo "<p>Aluno / Série: ".$r['nome']." / ".$r['serie']."</p>";
					echo "Nota 01: " . $r['nota1'] . "%<br>";
					echo "Nota 02: " . $r['nota2'] . "%<br>";
					echo "Nota 03: " . $r['nota3'] . "%<br>";
          			echo "Nota 04: " . $r['nota4'] . "%<br>";
          			echo "Nota 05: " . $r['nota5'] . "%<br>";
          			echo "Nota 06: " . $r['nota6'] . "%<br>";
          			echo "Nota 07: " . $r['nota7'] . "%<br>";
          			echo "Nota 08: " . $r['nota8'] . "%<br>";
          			echo "Nota 09: " . $r['nota9'] . "%<br>";
          			echo "Nota 10: " . $r['nota0'] . "%<br>";
					$media = ($r['nota1']+$r['nota2']+$r['nota3']+$r['nota4']+$r['nota5']+
							 $r['nota6']+$r['nota7']+$r['nota8']+$r['nota9']+$r['nota0'])/(10);
					echo "Média : " . $media . "%";
					echo "<hr />";					
				}
			}else {
				echo "Sem alunos cadastrados.";
			}
			$conn->close();
		}
	}
?>
