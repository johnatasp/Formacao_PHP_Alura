<?php

//função recebe a conta do tipo ARRAY pela variável($conta) + o valor à sacar do tipp(float) e retorna o valor do tipo ARRAY
function sacar(array $conta, float $valorASacar): array //Uma função só reconhece as variáveis que foram declaradas dentro dela
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode ficar com valor negativo");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

//função recebe a conta do tipo ARRAY pela variável($depositar) + o valor à depositar do tipp(float) e retorna o valor do tipo ARRAY
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else{
        exibeMensagem( "Você não pode depositar um valor negativo");
    }
    return $conta;
}

function exibeMensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}