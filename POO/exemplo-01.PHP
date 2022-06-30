<?php

class Pessoa{

	public $nome;//Atributo

	public function falar(){//Metodo

		return "O meu nome é ".$this->nome;
		//atributo fora do metodo usa $, dentro do metodo usa $this->
  	//$this-> é ultilizado para referenciar atributos e metodos dentro de outros metodos

	}

}

$glaucio = new pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();
?>
