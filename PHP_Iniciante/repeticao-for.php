<?php

/* Exemplo 01
for ($contador = 1; $contador <= 15; $contador = $contador + 1){
echo "#$contador" . PHP_EOL;
}
 */


/* Exemplo 02
for ($contador = 1; $contador <= 15; $contador += 1 ){
    echo "#$contador" . PHP_EOL;
}
*/


//Forma correta de fazer
for ($contador = 1; $contador <= 15; $contador++){
    echo "#$contador" . PHP_EOL;
}