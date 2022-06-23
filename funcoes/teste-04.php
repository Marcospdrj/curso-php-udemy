<?php

function texto1(){

  $variavel = func_get_args();

  return $variavel;

}

var_dump(texto1("texto de teste"));
 ?>
