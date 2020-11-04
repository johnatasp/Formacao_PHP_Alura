<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\ControladorBonificacoes;

$umDesenvolvedor = new Desenvolvedor(
    'Johnatas Ferreira',
    new CPF('071.988.954-50'),
    5000);

$umGerente = new Gerente(
    'Paulo Ricardo',
    new CPF('154.865.987-50'),
    7000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('562.897.132-52'),
    10000
);

var_dump($umDesenvolvedor);
var_dump($umGerente);
var_dump($umDiretor);

$controlador = new ControladorBonificacoes();
$controlador->addBonificacoes($umDesenvolvedor);
$controlador->addBonificacoes($umGerente);
$controlador->addBonificacoes($umDiretor);

echo "<p>O total de Bonificações é do Gerente é R$: {$umGerente->calculaBonificacao()}</p>";

echo "<p>O total de Bonificações é de R$: {$controlador->recuperaTotal()}</p>";





