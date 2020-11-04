<?php


namespace Alura\Banco\Modelo\Conta;


class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.03;
        $valorSaque = $tarifaSaque + $valorASacar;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
}