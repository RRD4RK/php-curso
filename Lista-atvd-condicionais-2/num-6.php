<?php

$valor1 = $_POST["num1"];
$valor2 = $_POST["num2"];

if($valor1 >$valor2){
    echo "Valor 1 é maior";
}

else if($valor1 < $valor2){
    echo "Valor 2 é maior";
}

elseif($valor1== $valor2){
    echo "Digite números diferentes";
}