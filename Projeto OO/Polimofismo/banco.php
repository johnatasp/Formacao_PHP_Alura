<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('João Pessoa', 'Oitizeiro', '7 de Setembro', 1670);
$johnatas = new Titular(new CPF('071.988.954-50'), 'Johnatas Ferreira', $endereco);
$usuario = new ContaPoupanca($johnatas);
$usuario->deposita(500);
$usuario->saca(100);

echo $usuario->recuperaSaldo();

//$endereco = new Endereco('Petrópolis', 'um bairro', 'minha rua', '71B');
//$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
//$primeiraConta = new Conta($vinicius);
//$primeiraConta->deposita(500);
//$primeiraConta->saca(300); // isso é ok
//
//echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
//echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
//echo $primeiraConta->recuperaSaldo() . PHP_EOL;
//
//$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
//$segundaConta = new Conta($patricia);
//var_dump($segundaConta);
//
//$outroEndereco = new Endereco('A', 'b', 'c', '1D');
//$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
//unset($segundaConta);
//echo Conta::recuperaNumeroDeContas();
