<?php

$json ='
[{"Dono(a)":"Jo\u00e3o","Carro":"Chevrolet EXPRESS 2500"},{"Dono(a)":"David","Carro":"Kia FORTE KOUP"},{"Dono(a)":"Kiara","Carro":"Yamaha XVZ1300CT ROYAL STAR TOUR DELUXE"},{"Dono(a)":"Kleber","Carro":"Bmw M3"},{"Dono(a)":"Januario","Carro":"Peugeot 3008"}]';

$data = json_decode($json, true);

var_dump($data);
?>
