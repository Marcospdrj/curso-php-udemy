<?php 
function ola($texto = "mundo ", $periodo = "Bom dia "){

	return "Óla $texto! $periodo <br>";

}

echo ola();
echo ola("", "Boa Noite");
echo ola("Glaucio", "Boa tarde");
echo ola("João");

echo "<br>";

function alo($texto = "Ola,", $pergunta = "como você está?"){

	return "$texto $pergunta <br>";
}

echo alo();
echo alo();
?>