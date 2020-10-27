<?php

$listaIdades = [15, 32, 78, 45, 60, 45, 12, 56];
$listaIdades[] = 20;
//$listaIdades[8] = 20;
//$listaIdades[count($listaIdades)] = 20;

//Exibo o valor no índice 3
//$idade = $listaIdades[3];
//echo $idade;

foreach ($listaIdades as $idade){
    echo $idade . PHP_EOL;
}

