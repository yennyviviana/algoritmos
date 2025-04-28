<?php

// Función que pide un número natural
function numeroNatural($mensaje) {
    while (true) {
        $entrada = readline($mensaje);

        // Verificar que sea numérico y mayor o igual a 0
        if (is_numeric($entrada) && (int)$entrada >= 0) {
            return (int)$entrada; // Retorna como número entero
        } else {
            echo "Error: Debes ingresar un número natural válido.\n";
        }
    }
}

// Leer datos del usuario usando la función
$num1 = numeroNatural("Ingrese el primer número: ");
$num2 = numeroNatural("Ingrese el segundo número: ");

// Verificar división por cero
if ($num2 == 0) {
    echo "No se puede dividir entre 0\n";
} else {
    $resultado = $num1 / $num2;
      echo number_format($resultado, 2);
}

?>
