<?php

//Os números antes das $contas são os índices, ou seja, 124598 = [0], 569825 = [1] ...
$contasCorrente = [
    124598 => [
        'titular'   => 'Johnatas Ferreira',
        'saldo'     => 5000,
        'conta'     => 14562,
        'agencia'   => '16425-2'
    ],
    569825 => [
        'titular'   => 'Paulo Ricardo',
        'saldo'     => 4500,
        'conta'     => 13260,
        'agencia'   => '45123-1'
    ],
    785421 => [
        'titular'   => 'Ana Paula Ferreira',
        'saldo'     => 4000,
        'conta'     => 63254,
        'agencia'   => '16532-6'
    ]
];

$contasCorrente[568941] = [
    'titular'   => 'Vanessa Gomes',
    'saldo'     => 3000,
    'conta'     => 65632,
    'agencia'   => '45216-8'
];

//Para cada "$Contas Correntes" atribui os índices à variável "$cpf"
// e os valores à variável "$conta"
//foreach ($contasCorrente as $cpf => $conta) {
//    echo $cpf . " " . $conta['titular'] . PHP_EOL;
//}


//$enderecos = [
//    58088670 => [
//        'endereco'  => "Rua 7 de Setembro",
//        'numero'    => 1670,
//        'bairro'    => "Oitizeiro",
//        'cidade'    => "João Pessoa",
//        'uf'        => "PB"
//    ],
//
//    58041040 => [
//        'endereco'  => "Av. Marta Pacheco",
//        'numero'    => 1542,
//        'bairro'    => "Oitizeiro",
//        'cidade'    => "João Pessoa",
//        'uf'        => "PB"
//]
//];
//
//foreach ($enderecos as $cep => $endereco) {
//    echo $cep . " " . $endereco['endereco'] . PHP_EOL;
//}

$funcionarios = [
    123456  => [
        'nome'      => "Johnatas Ferreira",
        'funcao'    => "Analista de Suporte",
        'idade'     => 28,
        'lider'     => "Paulo Roberto"
    ],
    456789  => [
        'nome'      => "Tauan Felizardo",
        "funcao"    => "Analista de Suporte",
        'idade'     => 27,
        'lider'     => "Bruno Bryam"
    ]
];

foreach ($funcionarios as $matricula => $colaborador){
    echo $matricula . " " . $colaborador['nome'] . PHP_EOL;

}