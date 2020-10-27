<?php

require_once "funcoes2.php";

$contaCorrente = [
    123456 => [
        'titular'   => "Johnatas Ferreira",
        'saldo'     => 2000
    ],
    456789 => [
        'titular'   => "Paulo Ricardo",
        'saldo'     => 2500
    ],
    741852 => [
        'titular'   => "Ana Paula",
        'saldo'     => 3000
    ]
];

$contaCorrente[123456] = sacar($contaCorrente[123456], 300);

$contaCorrente[456789] = depositar($contaCorrente[456789], 2);

foreach ($contaCorrente as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}