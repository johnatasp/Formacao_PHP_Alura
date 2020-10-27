<?php

function sacar(array $conta, float $valorASacar): array
{
    $conta['saldo'] -= $valorASacar;
    return $conta;
}

function exibemensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}