<?php

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode ficar com o valor negativo");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem("Você não pode depositar um valor negativo");
    }
    return $conta;
}

function exibeMensagem(string $mesagem)
{
    echo $mesagem . PHP_EOL;
}