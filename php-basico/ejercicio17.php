<?php


/*Un estudiante desea saber cuál será su promedio general en las tres materias mas
difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas.
Estas materias se evalúan como se muestra a continuación: Parcial 30%, Talleres
20%, Evaluación final 50%.
*/


// Función para calcular el promedio ponderado de una materia
function calcular_promedio_materia($nombre_materia) {
    echo "=== $nombre_materia ===\n";
    $parcial = (float) readline("Ingrese la nota del parcial: ");
    $talleres = (float) readline("Ingrese la nota de talleres: ");
    $final = (float) readline("Ingrese la nota de la evaluación final: ");

    $promedio = ($parcial * 0.30) + ($talleres * 0.20) + ($final * 0.50);
    echo "Promedio de $nombre_materia: " . number_format($promedio, 2) . "\n\n";
    return $promedio;
}

// Calcular promedios individuales
$prom1 = calcular_promedio_materia("Materia 1");
$prom2 = calcular_promedio_materia("Materia 2");
$prom3 = calcular_promedio_materia("Materia 3");

// Promedio general
$promedio_general = ($prom1 + $prom2 + $prom3) / 3;
echo "Promedio general de las tres materias: " . number_format($promedio_general, 2) . "\n";



?>