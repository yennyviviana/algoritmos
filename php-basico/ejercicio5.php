<?php

/*Restar dos números dados por el usuario y guardar su resultado, sumar otros dos números dados
 por el usuario y guardar su resultado y finalmente devolver la multiplicación de los dos resultados*/



// Resta
$num1 = (float) readline("Ingrese el número 1 para la resta: ");
$num2 = (float) readline("Ingrese el número 2 para la resta: ");
$operacion_resta = $num1 - $num2;

// Suma
$num3 = (float) readline("Ingrese el número 3 para la suma: ");
$num4 = (float) readline("Ingrese el número 4 para la suma: ");
$operacion_suma = $num3 + $num4;

// Condición para evitar división por cero
if ($operacion_suma != 0) {
    $division = $operacion_resta / $operacion_suma;
    echo "La división es: " . number_format($division, 2) . "\n";
} else {
    echo "Error: no se puede dividir por cero.\n";
}

?>
