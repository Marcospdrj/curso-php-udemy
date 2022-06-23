<?php

class Carro{

  public $marca = "Porsche";
  public $modelo = "911 Carrera";
  protected $motor = "385 cv";
  protected $performance = "293km/h";
  protected $valor = 76900000;

  public function verDados(){

    echo $this->marca. "<br/>";
    echo $this->modelo. "<br/>";
    echo $this->motor. "<br/>";
    echo $this->performance. "<br/>";
    echo $this->valor. "<br/>";

  }

}

class Veiculo extends Carro{

  public function verDados(){

        echo get_class($this). "<br>";

        echo "A marca do veiculo em questão è: ". $this->marca. "<br/>";
        echo "O modelo é: ".$this->modelo. "<br/>";
        echo "Possui um motor com ".$this->motor. " de potencia."."<br/>";
        echo "A velocidade maxima é:". $this->performance. "<br/>";
        echo "O valor é: R$".$this->valor. "<br/>";

  }
}
$objeto = new Veiculo();
$objeto->verDados();


 ?>
