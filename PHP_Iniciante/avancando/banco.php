<?php

function multiplica($x){
    return $x *= 2;
}

//chama a função(multiplica) que retorna o valor para a variável $resultado
$resultado = multiplica(45);

echo $resultado;

exit();

function exibeMensagem($mensagem){
  echo $mensagem . PHP_EOL;
}

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

//$contasCorrente[568941] = [
//    'titular'   => 'Vanessa Gomes',
//    'saldo'     => 3000,
//    'conta'     => 65632,
//    'agencia'   => '45216-8'
//];

//Para cada "$Contas Correntes" atribui os índices à variável "$cpf"
// e os valores à variável "$conta"

$contasCorrente[569825]['saldo'] -= 4100;

if (4100 > $contasCorrente[785421]['saldo'] ){
    exibeMensagem("Você não pode ficar com valor negativo");
} else {
    $contasCorrente[785421]['saldo'] -= 500;
}

foreach ($contasCorrente as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}