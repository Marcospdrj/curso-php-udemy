<?php

$localidade = array(
    'lugar' => 'Brasilia',
    'endereco' => 23
   );


   foreach ($localidade as &$value) {

   	if (gettype($value) === 'integer') $value= 10;

   	echo $value. '<br>';

   }
   echo "<br>";
   print_r($localidade);
 ?>
