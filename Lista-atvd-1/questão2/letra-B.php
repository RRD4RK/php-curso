<?php

$Numero1 = $_POST["Numero-1"];
$Numero2 = $_POST["Numero-2"];
$Numero3 = $_POST["Numero-3"];
$Numero4 = $_POST["Numero-4"];

$peso1 =1;
$peso2 = 2; 
$peso3 = 3; 
$peso4 = 4; 
$somaPeso = 10;


$res1 = $Numero1 + $peso1;
$res2 = $Numero2 + $peso2;
$res3 = $Numero3 + $peso3;
$res4 = $Numero4 + $peso4;

$MultiRes=$res1*$res2*$res3*$res4;

$resultadoFinal=$MultiRes/$somaPeso;

echo"O resultado final é $resultadoFinal";
