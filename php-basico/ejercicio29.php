<?php

/*Solicitar cuatro números en variables e intercambiar los valores de las
variables entre si*/



// Definir cuatro variables con valores iniciales
$numero1 = 10;
$numero2 = 20;
$numero3 = 30;
$numero4 = 40;

// Intercambiar los valores de las variables entre sí
$temp = $numero1;
$numero1 = $numero2;
$numero2 = $numero3;
$numero3 = $numero4;
$numero4 = $temp;

// Mostrar los valores después del intercambio
echo "Número 1: $numero1\n";
echo "Número 2: $numero2\n";
echo "Número 3: $numero3\n";
echo "Número 4: $numero4\n";
?>
