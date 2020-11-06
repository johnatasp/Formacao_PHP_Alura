<?php

require_once 'ArrayUtils.php';

$correntistas_e_compras = [
    "Johnatas",
    "Paulo",
    50,
    "Dida",
    100,
    "Ana Paula",
    "Dedé",
    "40"
];

var_dump($correntistas_e_compras);

ArrayUtils::remover("Pedro", $correntistas_e_compras);

var_dump($correntistas_e_compras);