<?php


interface Veiculo{
  public function acelarar($velocidade);
  public function frenar($velocidade);
  public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

  public function acelarar($velocidade){

    echo "O veículo acelerou até " . $velocidade . "km/h.";
  }
  public function frenar($velocidade){

    echo "O veículo frenou até " . $velocidade . "km/h.";
  }
  public function trocarMarcha($marcha){

    echo "O veículo engatou a marcha " . $marcha;
  }
}

$carro = new Civic();
$carro->acelarar(255);
 ?>
