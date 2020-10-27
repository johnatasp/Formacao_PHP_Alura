<?php

class Conta
{
    // definir dados da conta

    // A partir do PHP 7.4, pode-se inserir o tipo da variável

    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar): void
    {
        if($this->saldo < $valorASacar){
            echo "Saldo insuficiente!";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    
    public function depositar(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo!";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if($valorATransferir > $this->saldo){
            echo "Valor precisa ser positivo!";
            return;
        }
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir); 
    }
    
}
