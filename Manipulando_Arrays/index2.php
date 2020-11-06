<?php

$notas = [10, 9.5, 8, 8.5, 8.2];

echo "<p>A nota de Português é {$notas[0]}</p>";
echo "<p>A nota de Matemática é {$notas[1]}</p>";
echo "<p>A nota de Física é {$notas[2]}</p>";
echo "<p>A nota de Química é {$notas[3]}</p>";
echo "<p>A nota de Geografia é {$notas[4]}</p>";

// Função que retorna o número de elementos que tem o Array
$quantidadeNotas = sizeof($notas);

$soma = 0;

for($i = 0; $i < $quantidadeNotas; $i++){
    $soma += $notas[$i];
}

$media1 = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4]) / $quantidadeNotas;
$media2 = $soma / $quantidadeNotas;

echo "{$soma}</br>";

echo "Sua Média é: {$media1}</br>";
echo "Sua Média é: {$media2}";