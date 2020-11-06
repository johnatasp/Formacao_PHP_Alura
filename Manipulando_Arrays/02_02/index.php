<?php

$saldos = [
    3000,
    4000,
    1500,
    5000,
    2000
];

foreach($saldos as $saldo){
    echo "<p>O saldo é $saldo</p>";
}

var_dump($saldos);

sort($saldos);

var_dump($saldos);

echo "O menor saldo é $saldos[0]";