<?php
#ex1
echo "Exercicio1";
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);
$n7 = rand(0,9);
$n8 = rand(0,9);
$n9 = rand(0,9);
$n10 = rand(0,9);
$n11 = rand(0,9);
$cpf = $n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$n10.$n11;
$primeiro = substr($cpf,0,3);
$segundo = substr($cpf,3,3);
$terceiro = substr($cpf,6,3);
$quarto = substr($cpf,10,2);
echo "<br>CPF sem formatação: ".$cpf."<br>";
echo "CPF com formatação: ".$primeiro.".".$segundo.".".$terceiro."-".$quarto."<hr>";


#ex2
echo "Exercicio2";
$email = "lucaslinkpark123@hotmail.com";
$verificar = substr($email);


#ex3
echo "Exercicio3";	
$texto = "Lucas foi na roça e voltou só dez horas";
echo $a;


#exe4
echo "<br><br>Exercicio4<br>";
$sorteio = [];

for($i = 0; $i < 3; $i++){
	$sorteio[] = rand(0,5000);
}
for($i = 0; $i < 3; $i++){
	echo $sorteio[$i];
}

#exe5
echo "<br><br>Exercicio5<br>";
$vet = [];

for($i = 0; $i < 10; $i++){
	$vet[] = rand(0,500);
}
#a)
echo "(A)Vetor:";
for($i = 0; $i < 10; $i++){
	echo $vet[$i]." | ";
}
#b)
echo"<br><br>";
$aux = 0;
for($i = 0; $i < 10; $i++){
	for($j = 0; $j < 10; $j++){
		if ($vet[$j] > $vet[$i]){
				$aux = $vet[$j];
				$vet[$i] = $aux;
			}
		}
}
echo "<br>(B)Crescente: ";
for($i = 0; $i < 10; $i++){
	echo $vet[$i]." | ";
}
#c)
echo "<br>(C)Decrescente";
for($i = 10; $i < 0; $i--){
	echo $vet[$i]." | ";
}
echo "<br>(D)Numero de divisores: ";
for($i = 10; $i < 0; $i--){
	echo $vet[$i]%2 == 0;
}

#exe6
echo "<br><br>Exercicio6<br>";
$vetor = [];
$vetor_impar = [];
$vetor_par = [];

for($i = 0; $i < 30; $i++){
	$vetor[] = rand(0,1000);
}
echo"Vetor: ";
for($i = 0; $i < 30; $i++){
	echo $vetor[$i]."; ";
}

echo "<br>Ímpar: ";
for($i = 0; $i < 30; $i++){
	if($vetor[$i]%2 == 1){
		echo $vetor_impar[] = $vetor[$i]."; ";
	}	
}
echo "<br>Par: ";
for($i = 0; $i < 30; $i++){
	if($vetor[$i]%2 == 0){
		echo $vetor_par[] = $vetor[$i]."; ";
	}
}

echo"<br><br>";

#exe8
echo "<br><br>Exercicio8<br>";
#a)
echo "(A)";
$v1 = [];
$v2 = [];
$v3 = [];

for($i = 0; $i < 10; $i++){
	$v1[] = rand(0,15);
}
for($i = 0; $i < 10; $i++){
	$v2[] = rand(0,15);
}
for($i = 0; $i < 10; $i++){
	$e_dif = 0;
	for($j = 0; $j < 10; $j++){
		if($v2[$i] == $v1[$i]){
			$e_dif = 1;
		}
	}
	
}
for($i = 0; $i < 10; $i++){
	if($e_dif == 0){
		$v3[] = $v1[$i] and $v2[$i];
		echo $v3[$i]."| ";
	}	
}
	
echo "<br><br>";

#b)
echo "(B)";
for($i = 0; $i < 10; $i++){
	$e_dif = 0;
	for($j = 0; $j < 10; $j++){
		if($v2[$i] != $v1[$i]){
			$e_dif = 1;
		}
	}
	if($e_dif == 1){
	$v1[$i] = $v2[$i];
	echo $v1[$i]."| ";
	}
}

#exe9
#a)
echo "<br><br>Exercicio9";
echo"(A)<br>";
$mat2 = [];
for($i = 0; $i < 4; $i++){
	for($j = 0; $j < 4; $j++){
		$mat2[$i][$j] = rand(0,500);
	}
}
echo"<table border = '2'>";
for($i = 0; $i < 4; $i++){
	"<tr>";
	for($j = 0; $j < 4; $j++){
		echo"<td>". $mat2[$i][$j]."</td>";
	}
	echo"</tr>";
}
echo"</table>";

echo "<br><br>";

#b)
echo "(B)<br>";
for($i = 0; $i < 4; $i++){
	$soma = 0;
	for($j = 0; $j < 4; $j++){
		$soma += $mat2[$i][$j];
	}
	echo "linha".($i +  1).": ".$soma.";<br>";
}
echo "<br><br>";

#c)
echo "(C)<br>";
for($i = 0; $i < 4; $i++){
	$soma = 0;
	for($j = 0; $j < 4; $j++){
		$soma += $mat2[$j][$i];
	}
	echo "coluna".($i +  1).": ".$soma.";<br>";
}
echo "<br><br>";
#d)
echo "(D)<br>";
$soma = 0;
for($i = 0; $i < 4; $i++){
	for($j = 0; $j < 4; $j++){
		$soma += $mat2[$i][$j];
	}
}
echo "A soma de todos os elementos da matriz é: ".$soma;

echo "<br><br>";

#e)
#echo "(E)<br>";
#$soma = 0;
#for($i = 0; $i < 4; $i++){
#	for($j = 0; $j < 4; $j++){
#		if(int(sqrt(mat2[$i][$j])){
#			echo $mat2[$i][$j]."<br>";
#		}
#	}
#}
#echo $soma;
?>