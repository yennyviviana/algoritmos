<?php

// Dada una cantidad de pesos, devolver (escribir) el 15% de esa cantidad


$cantidad_pesos = readline("Ingresar la cantidad en pesos: ");

$devolver   = $cantidad_pesos * 0.15; 


echo "El 15% de la cantidad ingresada es: " . number_format($devolver, 2) . "\n";


?>