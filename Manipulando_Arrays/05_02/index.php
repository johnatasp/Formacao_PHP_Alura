<?php

$nomes = [
    "Johnatas",
    "Paulo",
    "Ana Paula",
    "Dida",
    "Dede"
];

$valores = [
    5000,
    4000,
    3000,
    2000,
    1000
];

$relacionados = array_combine($nomes, $valores);
var_dump($relacionados);
$relacionados["Dalva"] = 500;
var_dump($relacionados);


$resultado = array_merge($nomes, $valores);
var_dump($resultado);


if (array_key_exists("Johnatas", $relacionados)) {
    echo "O saldo do Johnatas é: {$relacionados["Johnatas"]}";
 } else {
    echo "Não foi encontrado";
 }