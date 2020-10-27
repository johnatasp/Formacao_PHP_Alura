<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo;

    public function sacar(float $valorASacar): void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo insuficiente!";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0){
            echo "Valor tem que ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    /**
     * Get the value of cpfTitular
     */ 
    public function getCpfTitular()
    {
        return $this->cpfTitular;
    }

    /**
     * Set the value of cpfTitular
     *
     * @return  self
     */ 
    public function setCpfTitular($cpfTitular)
    {
        $this->cpfTitular = $cpfTitular;

        return $this;
    }

    /**
     * Get the value of nomeTitular
     */ 
    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    /**
     * Set the value of nomeTitular
     *
     * @return  self
     */ 
    public function setNomeTitular($nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }
}

    