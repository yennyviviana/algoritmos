<?php

/*Determine cuanto se le debe pagar a un empleado en una empresa según
las siguientes condiciones: Devenga un salario básico, tiene comisiones por
ventas, se le descuenta el aporte a cooperativas (2 % salario básico) y la
seguridad social ((7% salario básico) + comisiones).
*/


while (true) {
    // Leer y validar salario básico
    while (true) {
        $input = readline("Ingrese salario básico: ");
        if (is_numeric($input) && $input > 0) {
            // Convertir la cadena a número (float) para cálculos
            $salarioBasico = floatval($input);
            break;
        } else {
            echo "Entrada inválida. Ingrese un número positivo.\n";
        }
    }

    // Leer y validar comisión
    while (true) {
        $input = readline("Ingrese monto de comisión: ");
        if (is_numeric($input) && $input >= 0) {
            $comision = floatval($input);
            break;
        } else {
            echo "Entrada inválida. Ingrese un número válido (>= 0).\n";
        }
    }

    // Calcular descuentos
    $descCoop = $salarioBasico * 0.02;                 // 2% de salario básico
    $descSeg  = ($salarioBasico * 0.07) + $comision;   // 7% de salario + comisiones

    // Calcular salario final
    $salarioFinal = $salarioBasico + $comision - ($descCoop + $descSeg);

    // Mostrar resultados
    echo "\n--- Resumen de Liquidación ---\n";
    echo "Salario básico: $salarioBasico\n";
    echo "Comisión:      $comision\n";
    echo "Descto. cooperativas (2%): $descCoop\n";
    echo "Descto. seguridad social (7% + comisiones): $descSeg\n";
    echo "Salario final: $salarioFinal\n\n";

    // Preguntar si continúa con otro empleado
    $seguir = readline("¿Desea calcular otro empleado? (s/n): ");
    if (strtolower($seguir) !== 's') {
        // Salir del bucle si no es 's'
        break;
    }
}
?>


