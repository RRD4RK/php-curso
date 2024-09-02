<?php
//definição contador
$x=0;

//inicio /definição da estrutura
while ($x<= 10) {

    //corpo do loop
    echo"$x<br>";

    //incremento
    $x++;
}
echo"Parte 2 codigo <br>";

$y= 0;
while ($y<= 10) {

    //corpo do loop
    echo"$y<br>";

    //incremento
    $y+=2;
}
echo"Parte 3 codigo<br>";
$z= 10;
while ($z>0 ) {

    //corpo do loop
    echo"$z<br>";

    //incremento
    $z--;
}
echo"Parte 4 codigo<br>";
$a= 0;
while ($a< 10) {

    //corpo do loop
    if($a % 2 !==0){
        echo "$a<br>";
    }

    //incremento
    $a++;
}