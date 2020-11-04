<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$login = new Diretor(
    'Johnatas Ferreira',
    new CPF('071.988.954-50'),
    10000
);

var_dump($login);
$autenticador->tentaLogin($login, '1234');



