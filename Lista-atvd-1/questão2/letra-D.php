<?php

$salario = $_POST["salario"];
$quant= $_POST["quant"];


$salarioMinimo=$salario/7;
$precoQuilo= $salario/100;

echo"Você paga a casa 100 quilowats R$ $precoQuilo<br>";
$valorReais= $quant*$precoQuilo;
$desconto= $valorReais-($valorReais*(10/100));
echo"Valor a ser pago R$ $valorReais<br>";
echo "Valor com desocnto R$ $desconto<br>";






