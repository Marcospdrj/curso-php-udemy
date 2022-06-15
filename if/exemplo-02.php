<?php

$seuSalario = 3400.00;

$salarioMinimo = 1212.00 ;
$salario1 = 1500.00;
$salario2 = 3500.00;
$salario3 = 5000.00;
$salario4 = 100000.00;

echo "Seu salario é ". $seuSalario . "!";

echo "<br>";

if ($seuSalario < $salarioMinimo) {

	echo " Voce ganha menos que um salario minimo.";


} else if ($seuSalario > $salarioMinimo) {

	echo " Voce ganha mais que um salario minimo.";

} else if ($seuSalario = $salarioMinimo) {

	echo " Voce ganha um salario minimo.";

} else if ($seuSalario > $salario1){

	echo " Voce esta na media salarial.";
} else if ($seuSalario > $salario2){

	echo " Voce esta pouco acima da media salarial.";

} else if ($seuSalario > $salario3) {

	echo " Voce ganha bem e esta acima da media salarial.";
} else if ($seuSalario > $salario4){


	echo " Voce ganha muito bem e esta muito acima da media salarial.";


}else {


}

echo "<br>";

//echo ($seuSalario < $salarioMinimo)?"Voce ganha menos que um salario minimo":"Voce ganha mais que um salario minimo.";

?>
