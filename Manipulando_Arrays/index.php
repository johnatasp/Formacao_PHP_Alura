<?php

$notaPortugues = 10;
$notaMatematica = 9.5;
$notaFisica = 8;
$notaQuimica = 8.5;
$notaGeografia = 8.2;

echo "<p>A nota de Português é {$notaPortugues}</p>";
echo "<p>A nota de Matemática é {$notaMatematica}</p>";
echo "<p>A nota de Física é {$notaFisica}</p>";
echo "<p>A nota de Química é {$notaQuimica}</p>";
echo "<p>A nota de Geografia é {$notaGeografia}</p>";

$media = ($notaPortugues + $notaMatematica + $notaFisica + $notaQuimica + $notaGeografia) / 5;

echo "Sua Média é: {$media}";