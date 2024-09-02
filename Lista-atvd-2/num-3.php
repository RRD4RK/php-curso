<?php

$Num1 = $_POST["Num1"];

if ($Num1 < 12 ) {
    $res = $Num1 * 1.30;
    echo"O preço é R$$res";
}

else {
    $res2 = $Num1 * 1.00;
    echo "O preço é R$$res2";
}