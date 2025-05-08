<?php

/*Calcule el área de un rectángulo. Eleve el resultado a la potencia de 2. Muestre
ambos resultados............
*/


// Solicitar al usuario la base y altura del rectángulo
$base = (float) readline("Ingrese la base del rectángulo: ");
$altura = (float) readline("Ingrese la altura del rectángulo: ");

// Calcular área
$area = $base * $altura;

// Elevar el área al cuadrado
$area_cuadrado = pow($area, 2);

// Mostrar resultados
echo "El área del rectángulo es: " . number_format($area, 2) . "\n";
echo "El área elevada al cuadrado es: " . number_format($area_cuadrado, 2) . "\n";

?>




?>