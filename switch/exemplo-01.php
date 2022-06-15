<?php
$diaDaSemana = date("w");

switch ($diaDaSemana) {

		case '0':
		echo "Segunda-Feira";
		break;

		case '1':
		echo "Terça-Feira";
		break;

		case '2':
		echo "Quarta-Feira";
		break;

		case '3':
		echo "Quinta-Feira";
		break;

		case '4':
		echo "Sexta-Feira";
		break;

		case '5':
		echo "Sabado";
		break;
		
		case '6':
		echo "Domingo";
		break;

		default:
		echo "Data Invalida!";
		break;


}?>