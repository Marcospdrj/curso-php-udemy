<?php
/*
$anoNascimento = 1990;

$nomeCompleto = "";*/
//Na linha de baixo temos um variavel com numero no nome
$nome1 ="João";

$sobrenome ="Rangel";

$nomeCompleto = $nome1 . " " .$sobrenome;

echo $nomeCompleto;
exit;
echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {

	echo $nome1;

}

?>