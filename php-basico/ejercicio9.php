<?php


/*Calcular el nuevo salario de un obrero si obtuvo un incremento del 25%
sobre su salario anterior*/



$salario_anterior = (float) readline("Ingrese el salario del obrero: ");

if ($salario_anterior > 0) {
    $nuevo_salario = $salario_anterior * 1.25;
    echo "El nuevo salario del obrero con incremento es: " . number_format($nuevo_salario, 2) . "\n";
} else {
    echo "El salario ingresado es incorrecto.\n";
}





?>