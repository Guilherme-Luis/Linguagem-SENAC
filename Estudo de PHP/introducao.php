<?php
// Duas barras coloca comentário
// <?php abre o bloco de programação em php
/* ?> fecha o bloco com a ultima linha */

//Comando Echo, podemos utilizar para escrever na tela (Navegador), ou o comando print
echo "<h1>Hello World!</h1>"; //String deverá ser entre aspas, e no final do comando terminar com ;
echo "<h3>Aula de PHP</h3>";
echo "<hr />";
$NOME="";
$NUM1 = 0;


$NOME = "Fulano de Tal";
echo $NOME;
echo "<br>";
//Concatenar &, +, no php utilizamos o ponto .
echo "<b>Nome: </b>" . $NOME;
echo "<br><b>Nome: </b> $NOME";
$NUM1 = 10;
$NUM2 = 2;
echo "<p><b>Subtracao: </b>". ($NUM1 - $NUM2) . "</p>";
echo "<p><b>Adicao: </b>". ($NUM1 + $NUM2) . "</p>";
echo "<p><b>Divisao: </b>". ($NUM1 / $NUM2) . "</p>";
echo "<p><b>Multiplicacao: </b>". ($NUM1 * $NUM2) . "</p>";

$IDADE = 10;
If ($IDADE < 18){
	echo "<h4>Tem menos de 18 anos. </h4>";
} Else If ($IDADE > 18) {
	echo "<h4>Tem mais de 18 ANos. </h4>";
} else {
	echo "<h4>Tem 18 anos.</h4>";
}
//Estruturas de repetição
//For(Para) WHile (Enquanto)
//For
echo "<h3>Estrutura de Repetição For </h3>";
$i=0;
For ($i = 1; $i <= 10; $i++) {
	echo "<b>Numero: </b> $i<br>";
}
echo "<h3>Estrutura de repetição While</h3>";
$i=1;
While($i <= 10){
	echo "<b>Numero: </b> $i <br>";
	$i++;
}
echo "<br>";
//Escrever os numeros pares de 1 a 30 utilizando o laço FOR
//Escrever os numeros impares de 1 a 30 utilizando o laço While
$A=0;
For ($A = 1; $A<=30; $A++){
	If ($A%2 == 0){
		echo "<b>Numero Par: </b> $A <br>";
	} else {
		echo "<b>Numero Impar: </b> $A <br>";
	}
}


echo "<br>";
$A=1;
While($A <= 30){
	If ($A%2 == 0){
		echo "<b>Numero Par: </b> $A <br>";
	} else {
		echo "<b>Numero Impar: </b> $A <br>";
	}
	$A++;
}
Echo "<hr/>";
Echo "<br>";
Echo "<b><h3>Estrutura de Tabuada de 1 ao 10</h3></b><br>";
Echo "<br>";
$X=0;
$Y=1;
For ($X = 1; $X<=10;){
	If ($Y <= 10){
		Echo $X . " X " . $Y . "=" . ($X * $Y) . "<br>";
		$Y++;
	} Else {
		Echo "<br>";
		$Y=1;
		$X++;
	}
}
?>
