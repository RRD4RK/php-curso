<?php
$i=50;
$soma=0;
$media=0;
$quant = 0;
while($i <=70 ){

    $soma+=$i;
    
    
    $quant++;
    echo"$i\n";
    $i+=2;

}
echo "$soma\n";
$media = $soma / $quant;
echo"$media";