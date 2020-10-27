<?php

$conta1 = [
    'titular'   => 'Johnatas Ferreira',
    'saldo'     => 5000,
    'conta'     => 14562,
    'agencia'   => '16425-2'
];

$conta2 = [
    'titular'   => 'Paulo Ricardo',
    'saldo'     => 4500,
    'conta'     => 13260,
    'agencia'   => '45123-1'
];

$conta3 = [
    'titular'   => 'Ana Paula Ferreira',
    'saldo'     => 4000,
    'conta'     => 63254,
    'agencia'   => '16532-6'
];

$contasCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrente); $i++){
    echo $contasCorrente[$i] ['titular'] . PHP_EOL;
}