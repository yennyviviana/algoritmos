<?php

/*Calcule el área de un círculo.....
*/


$radio = (float) readline("Ingrese el radio del círculo: ");

$area_circulo = pi() * pow($radio, 2);

echo "El área del círculo es: " . number_format($area_circulo, 2) . "\n";

?>


