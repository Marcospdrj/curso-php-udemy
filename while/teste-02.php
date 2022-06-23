<?php

$valor = 5000;
$desconto = 30;

do{

$valorDescontado = $valor - (($valor * $desconto) / 100);
    //dividir por 100 e multiplicar por 0.1 dá o mesmo resultado
}
  while ($valor > 1500);

  echo $valor;

  echo $valorDescontado;
 ?>
