<?php

require_once 'Calculadora.php';

$notas = [10, 9, 8, 7, 6];

$calculadora = new Calculadora();
// $calculadora->calculaMedia($notas);
$media = $calculadora->calculaMedia($notas);

// echo "Sua média é: {$calculadora->calculaMedia($notas)}";

if($media){
    echo "Sua média é: {$media}";
} else{
    echo "Não foi possível calcular a média!";
}
