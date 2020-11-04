<?php


namespace Alura\Banco\Modelo\Funcionario;


class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function autentica(String $senha): string
    {
        return $senha === '1234';
    }
}
