<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar): array
{
    $conta['saldo'] -= $valorASacar;
    return $conta;
}