<?php

class Animal{

  public function falar(){

      return "Som";
}
  public function mover(){

    return "Anda";

  }
}

class Cachorro extends Animal{

    public function falar (){

        return "Late";
    }
}

class Gato extends Animal{

    public function falar (){

        return "Mia";
    }
}

class Passaro extends Animal{

    public function falar (){

        return "Canta";
    }

    public function mover(){

        return "Voa e " . parent::mover();
    }
}

$Passaro = new Passaro();
$garfield = new Gato();
$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto ->mover() . "<br/>";

echo "--------------------------- <br/>";

echo $garfield->falar() . "<br/>";
echo $garfield ->mover() . "<br/>";

echo "--------------------------- <br/>";

echo $Passaro->falar() . "<br/>";
echo $Passaro ->mover() . "<br/>";
 ?>
