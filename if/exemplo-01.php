<?php 

$qualASuaIdade = 88;

$idadeCrianca = 14;
$idadeMaior = 18;
$idadeMelhor = 60;

echo "Idade:". $qualASuaIdade;

echo "<br>";

if ($qualASuaIdade < $idadeCrianca) {
	
	echo "Crianca";

}else if ($qualASuaIdade < $idadeMaior){

	echo "Adolescente";

}else if ($qualASuaIdade < $idadeMelhor){

	echo "Adulto";

}else{

	echo "Idoso";
}
echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade.";
?>