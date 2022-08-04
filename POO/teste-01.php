<?php

class Carro{

  public $modelo;

  public function apresentar(){

    return "O veiculo em questão é o(a): " . $this->modelo;

  }

}

$ferrari = new Carro();
$ferrari->modelo = "Ferrari 458";

echo $ferrari->apresentar();

 ?>
