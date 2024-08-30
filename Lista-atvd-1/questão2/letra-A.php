<?php

$Numero1 = $_POST["Numero-1"];
$Numero2 = $_POST["Numero-2"];

$quociete= $Numero1 / $Numero2;

$resto= $Numero1 % $Numero2;

echo "$quociete<br>";
echo "$resto<br>";