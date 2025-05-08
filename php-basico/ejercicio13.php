<?php


/*Un estudiante de algoritmos desea saber cuánto debe obtener como nota mínima
para aprobar la asignatura. Sabe que su profesor le hará tres parciales y que
tienen un valor porcentual de 30, 30 y 40 cada uno de ellos respectivamente.
Ayude a este pobre estudiante a resolver su problema............................
*/


$parcial1 = (float) readline("Ingresar el parcial 1: ");
$parcial2 = (float) readline("Ingresar el parcial 2: ");
$parcial3 = (float) readline("Ingresar el parcial 3: ");

// Calcular el promedio ponderado
$promedio = ($parcial1 * 0.30) + ($parcial2 * 0.30) + ($parcial3 * 0.40);

// Evaluar con condiciones
if ($promedio >= 0 && $promedio < 3) {
    echo "El promedio de los parciales es: " . number_format($promedio, 2) . " → Reprobado.\n";
} elseif ($promedio >= 3 && $promedio <= 5) {
    echo "El promedio de los parciales es: " . number_format($promedio, 2) . " → Aprobado.\n";
} else {
    echo "El promedio ingresado no es válido: " . number_format($promedio, 2) . "\n";
}

?>
