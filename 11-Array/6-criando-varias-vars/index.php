<?php

$pessoa=["Raphael", 17, "Dev Junior","roxo"];

print_r($pessoa);
echo"\n";


list ($nome, $idade, $profissao, $cor ) = $pessoa;

echo "$nome\n";
echo "$idade\n";
echo "$profissao\n";
echo "$cor\n";