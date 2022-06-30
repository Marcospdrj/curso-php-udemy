<?php

class Pessoa{

	public $nome;

	public function dono(){//Metodo

		return "O meu nome é ".$this->nome . " e ";

	}
}

class Carro{

  public $carro;

  public function carro(){

    return " eu sou dono do " . $this->carro;
  }
}

$glaucio = new pessoa();
$glaucio->nome = "Glaucio Daniel";

$veiculo = new Carro();
$veiculo->carro = "Fox";
echo $glaucio->dono(). $veiculo->carro();


?>
