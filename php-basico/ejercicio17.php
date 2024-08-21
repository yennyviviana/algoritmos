<?php


/*Un estudiante de algoritmos desea saber cuánto debe obtener como nota mínima
para aprobar la asignatura. Sabe que su profesor le hará tres parciales y que
tienen un valor porcentual de 30, 30 y 40 cada uno de ellos respectivamente.
Ayude a este pobre estudiante a resolver su problema............................
*/


//pidiendo al  estudiante que ingrese las notas 1,2,3
$nota1 = 3;
$nota2 = 4;
$nota3 = 3;


//calculamos el promedio en porcentaje
$promedio = ($nota1 * 0.3 + $nota2 * 0.3 + $nota3 * 0.4);

// Calcular la nota mínima requerida para aprobar
$nota_minima =  3.0 - $promedio;


echo "para obtener la nota minima para aprobar ". $nota_minima," en el próximo parcial.\n";





?>