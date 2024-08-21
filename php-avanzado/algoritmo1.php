<?php


function sumaDigitos($numero) {
    if (!is_numeric($numero)) {
        return "Error: La entrada debe ser un número.";
    }

    $numero = abs($numero); // el valor absoluto
    $suma = 0;

    while ($numero > 0) {
        $suma += $numero % 10; //  último dígito a la suma
        $numero = intval($numero / 10); // Elimina el último dígito
    }

    return $suma;
}

// Ejemplo de uso con validación de entrada......
$entrada = -12345; // estableciendo los numeros de entrada
if (is_numeric($entrada) && $entrada >= 0) {
    echo "La suma de los dígitos de $entrada es: " . sumaDigitos($entrada);
} else {
    echo "Por favor, ingrese un número entero positivo.";
}
?>