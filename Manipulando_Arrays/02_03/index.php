<?php

$nomes = "Johnatas, Paulo, Ana Paula, Dida, Dedé";

$array_nomes = explode(", ", $nomes);

foreach($array_nomes as $nome){
    echo "<p>$nome</p>";
}


$nomes_juntos = implode(", ", $array_nomes);

echo $nomes_juntos;