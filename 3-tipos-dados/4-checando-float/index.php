<?php

$a="Teste";
$b=12.8;

if(is_float($a)){
    echo "É float <br>";
}

if(is_float($b)){
    echo "É float <br>";
}

if(is_float(534534.6565)){
    echo "É float 3";
}

if(is_float("teste")){
    echo "É float 4";
}