<?php

$numC = readline("numeros de carrps vendidos:");
$vTotal= readline("valor total de vendas");
$salarioFixo = readline("salario fixo:");
$comissao=100;
$somaTotal = ($salarioFixo +($comissao*$numC)+($vTotal*0.05));
echo "o salario final é de R$: $somaTotal\n";