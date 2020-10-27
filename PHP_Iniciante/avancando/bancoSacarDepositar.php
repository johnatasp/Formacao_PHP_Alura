<?php

require_once 'funcoes.php';

//Os números antes das $contas são os índices, ou seja, 124598 = [0], 569825 = [1] ...
$contasCorrente = [
    124598 => [
        'titular' => 'Johnatas Ferreira',
        'saldo' => 5000
    ],
    569825 => [
        'titular' => 'Paulo Ricardo',
        'saldo' => 4500
    ],
    785421 => [
        'titular' => 'Ana Paula Ferreira',
        'saldo' => 4000
    ]
];

var_dump($contasCorrente);
//$contasCorrente[568941] = [
//    'titular'   => 'Vanessa Gomes',
//    'saldo'     => 3000,
//];

//Para cada "$Contas Correntes" atribui os índices à variável "$cpf"
// e os valores à variável "$conta"


//Passar a conta + o valor que deseja sacar, na função(sacar).
$contasCorrente[785421] = sacar(
    $contasCorrente[785421],
    200);//Conta Ana Paula

$contasCorrente[124598] = sacar(
    $contasCorrente[124598],
    5200);//Conta Johnatas

//$contasCorrente[569825] = sacar(
//   $contasCorrente[569825],
//  4000);//Conta Paulo

$contasCorrente[569825] = depositar(
    $contasCorrente[569825],
    200);

//Remove a conta do Titular Johnatas
// unset -> apaga o valor de uma variável.
//unset($contasCorrente[124598]);

titularComLetrasMaiusculas($contasCorrente[785421]);

foreach ($contasCorrente as $cpf => $conta) {
    //exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //função "list" - Pega os valores do array e atribui as variáveis
    exibeMensagem("$cpf $titular $saldo");
}