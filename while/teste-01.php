<?php

$condicao = true;

while ($condicao) {

  $numero = rand(1, 25);

  if ($numero === 20) {
    echo "Vinte! ";
    $condicao = false;
  }
  echo $numero ."  ";
}

 ?>
