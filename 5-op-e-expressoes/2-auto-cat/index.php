<?php

echo 5/2;
echo "<br>";

if(is_float(5/2)){

    echo "É float<br>";

}

echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)){

    echo"É string 2";
    echo "<br>";
}

$nome = "Raphael";
$sobrenome = "Ramos";

$nome_Completo= $nome . " ". $sobrenome;

echo $nome_Completo;
echo "<br>";