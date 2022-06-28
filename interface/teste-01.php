<<?php

interface Celular{

  public function recusar($comunicar);
  public function atender($comunicar);
  public function foto($fotografia);
  public function mensagem($mensagem);
  public function navegar($internet);

}

class Aparelho implements Celular{

  public function recusar($comunicar){

    echo "O usuario recusou " . $comunicar . "ligações.";
  }
  public function atender($comunicar){

    echo "O usuario aceitou " . $comunicar . "ligações.";
  }
  public function foto($fotografia){

    echo "O usuario tirou " . $fotografia . "fotos.";
  }
  public function mensagem($mensagem){

    echo "O usuario enviou " . $mensagem . "mensagens.";
  }
  public function navegar($internet){

    echo "O usuario navegou por " . $internet . "minutos na internet.";
  }
}

$iphone = new Aparelho();
$iphone->mensagem(12);

 ?>
