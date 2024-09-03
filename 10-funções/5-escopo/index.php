<?php

$a = 10;

$b = 15;

function testeEscopo(){

    $a= 5;

    global $b;

    $a++;

    $b++;

    echo "ESCOPO LOCAL DE A: $a <br>";

    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
}


echo"ESCOPO GLOBAL DE A $a<br>";
echo "ESCOPO GLOBAL NA FUNÇÃO DE B2: $b <br>";

testeEscopo();

echo"ESCOPO GLOBAL DE B 2 $b<br>";