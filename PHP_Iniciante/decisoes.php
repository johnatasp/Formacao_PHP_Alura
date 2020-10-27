<?php

$idade = 15;
$nome = "Johhnatas";
echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18 && $nome == "Johnatas"){
    echo "Você tem $idade anos e seu nome é $nome" . PHP_EOL;
    echo "Pode entrar!";
} elseif ($idade < 18 && $nome != "Johnatas"){
    echo "Você não pode entrar. Você é menor de idade e seu nome não é $nome";
} elseif ($idade >= 18 && $nome != "Johnatas"){
    echo "Você tem $idade anos. Porém, seu nome não é Johnatas";
} elseif ($idade < 18 && $nome == "Johnatas"){
    echo "Seu nome é $nome. Mas você é menor de idade";
}



//$idade = 18;
//$numeroDePessoas = 2;
//
//echo "Você só pode entrar se tiver a partir de 18 anos ou ";
//echo "a partir de 16 anos acompanhado" . PHP_EOL;
//
//if ($idade >= 18) {
//    echo "Você tem $idade anos. Pode entrar sozinho.";
//} elseif ($idade >= 16 && $numeroDePessoas > 1) {
//    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
//} else {
//    echo "Você só tem $idade anos. Você não pode entrar.";
//}
//
//echo PHP_EOL;
//echo "Adeus!";