<?php

class trabalhador{

  public function trabalhar(){

      return "Trabalha";

  }
  public function estudar(){

      return "Estudar";
  }
}

class dev extends trabalhador{

  public function desenvolver(){

      return "Programar";
  }
}

class arquiteto extends trabalhador{

    public function arquitetar(){

      return "Desenvolver projeto de arquitetura";
    }
}

class medico extends trabalhador{

    public function medicina(){

      return "Operar";
    }

    public function medicina2(){

      return "Atender e " . parent::estudar();
    }
}

$Drrey = new medico();
$niemeyer = new arquiteto();
$glauvio = new dev();

echo "O medico é responsavel por:  <br/>";
echo $Drrey->medicina() . "<br>";
echo $Drrey->medicina2() . "<br>";

echo "----------------------------------------------- <br/>";

echo "O arquiteto é responsavel por:  <br/>";
echo $niemeyer->arquitetar() . "<br>";
echo $niemeyer->Trabalhar() . "<br>";

echo "----------------------------------------------- <br>";

echo "O desenvolvedor é responsavel por: <br/>";
echo $glauvio ->estudar() . "<br>";
echo $glauvio ->desenvolver() . "<br>";
 ?>
