<?php

require_once "funcoes3.php";

$contasCorrentes = [
    123456 => [
        'titular'   => "Johnatas Ferreira",
        'saldo'     => 5000
    ],
    456789 => [
        'titular'   => "Paulo Ricardo",
        'saldo'     => 6000
    ]
];

$contasCorrentes[123456] = sacar($contasCorrentes[123456], 4200);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");
}