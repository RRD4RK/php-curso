<?php

//array dentro de array também conhecido como matriz
//acessar esse tipo de array utizamos índices, acessando o externo depos o interno
//EX: $arr[1][0] => Primeiro elemento do segundo array 

$arr= [
    [1,2,3],
    [2,4,6]
];
/*
print_r($arr);
echo"\n";
*/
echo($arr [0][1]);
echo"\n";

echo($arr [1][2]);
echo "\n";

echo count($arr);
echo "\n";
echo count($arr[0]);