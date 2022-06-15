<?php

$seuSalario = 1212.00;

$salarioMinimo = 1212.00 ;
$salario1 = 1500.00;
$salario2 = 3500.00;
$salario3 = 5000.00;
$salario4 = 100000.00;

echo "Seu salario é R$". $seuSalario . "!";

echo "<br>";

if ($seuSalario < $salarioMinimo) {

	echo " Voce ganha menos que um salario minimo.";


} else if ($seuSalario > $salarioMinimo) {

	echo " Voce ganha mais que um salario minimo.";

} else if ($seuSalario == $salarioMinimo) {

	echo " Voce ganha um salario minimo.";


}else {

}
echo "<br>";

echo ($seuSalario < $salarioMinimo)?"Voce esta abaixo da media salarial.":"Voce esta acima da media salarial.";

?>

//O PHP suporta > (maior que), >= (maior ou igual a), == (igual), != (diferente), < (menor que) e <= (menor ou igual a). A linguagem também suporta um conjunto de operador de equivalencia estrita: === (igual a e do mesmo tipo) e !== (diferente de ou não do mesmo tipo).
