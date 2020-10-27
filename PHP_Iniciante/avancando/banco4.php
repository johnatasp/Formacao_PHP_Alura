<?php

require_once "funcoes4.php";

$contasBancarias = [
    123456 => [
        'titular'   => "Johnatas Ferreira",
        'saldo'     => 1500
    ],
    456789 => [
        'titular'   => "Paulo Ricardo",
        'saldo'     => 2000
    ],
    789456 => [
        'titular'   => "Ana Paula",
        'saldo'     => 2500
    ]
];

$contasBancarias[123456] = sacar($contasBancarias[123456], 200);

foreach ($contasBancarias as $cpf => $conta)
{
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");
}