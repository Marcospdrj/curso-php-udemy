<?php

$a= 100;

function trocaValor1(&$b){

  $b += 200;

  return $b;

}

echo trocaValor1($a);
echo "<br>";




?>
/*
+= ;= *= /=
*/
