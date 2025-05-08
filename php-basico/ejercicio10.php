<?php


// Escriba un programa que obtenga tres números, los almacene en variables
// y luego calcule y muestre un reporte sobre su suma y su promedio

$num1 = (float) readline("Ingrese el primer número: ");
$num2 = (float) readline("Ingrese el segundo número: ");
$num3 = (float) readline("Ingrese el tercer número: ");

// Cálculos
$suma = $num1 + $num2 + $num3;
$promedio = $suma / 3;

// Reporte
echo "\n--- Reporte ---\n";
echo "Número 1: " . number_format($num1, 2) . "\n";
echo "Número 2: " . number_format($num2, 2) . "\n";
echo "Número 3: " . number_format($num3, 2) . "\n";
echo "Suma total: " . number_format($suma, 2) . "\n";
echo "Promedio: " . number_format($promedio, 2) . "\n";

?>






?>