<?php


namespace Alura\Banco\Modelo\Funcionario;


class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function autentica(String $senha): bool
    {
        return $senha === '1234';
//        if($senha){
//            echo "Autenticado";
//            return;
//        }
//            echo "Senha incorreta!";
//
    }
}
