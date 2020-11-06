<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$usuario = new Gerente('Johnatas Ferreira', new CPF('071.988.954-50'), 5000);

var_dump($usuario);
$autenticador->tentaLogin($usuario, '1234');



