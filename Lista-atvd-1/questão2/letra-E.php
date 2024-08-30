<?php

$base = $_POST["base"];
$altura = $_POST["altura"];

$perimetro = 2*($base+$altura);
$area = $base*$altura;
$diagonal = sqrt(($base*$base)+($altura*$altura));

echo "O perímetro é $perimetro<br>";

echo "A área é $area<br>";

echo "A diagonal é $diagonal<br>";