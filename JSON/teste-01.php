<?php

$carros = array();

array_push($carros, array(
	'Dono(a)' => 'João',
	'Carro' => "Chevrolet EXPRESS 2500"
));
array_push($carros, array(
	'Dono(a)' => 'David',
	'Carro' => "Kia FORTE KOUP"
));
array_push($carros, array(
	'Dono(a)' => 'Kiara',
	'Carro' => "Yamaha XVZ1300CT ROYAL STAR TOUR DELUXE"
));
array_push($carros, array(
	'Dono(a)' => 'Kleber',
	'Carro' => "Bmw M3"
));
array_push($carros, array(
	'Dono(a)' => 'Januario',
	'Carro' => "Peugeot 3008"
));

echo json_encode($carros)
?>
