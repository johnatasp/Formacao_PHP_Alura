<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$endereco1 = new Endereco('7 de Setembto', '1670', 'Oitizeiro', 'João Pessoa');


echo $endereco1->setRua('11 de Novembro');
echo $endereco1 . PHP_EOL;


