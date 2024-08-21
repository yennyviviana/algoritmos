<?php


/*Un estudiante desea saber cuál será su promedio general en las tres materias mas
difíciles que cursa y cuál será el promedio que obtendrá en cada una de ellas.
Estas materias se evalúan como se muestra a continuación: Parcial 30%, Talleres
20%, Evaluación final 50%.
*/

//definimos las 3 materias
$materia1 = 2.5;
$materia2 = 4;
$materia3 = 5;


//evaluacion de las materias
$evaluacion_parcial = 0.30;
$evaluacion_talleres = 0.20;
$evaluacion_final  =  0.50;


//calcular promedio cada una de las materias

// Para la materia 1
$promedio_materia1 = ($materia1 * 0.30 + $materia1 * 0.20 + $materia1 * 0.50) / (0.30 + 0.20 + 0.50);
// Para la materia 2
$promedio_materia2 = ($materia2 * 0.30 + $materia2 * 0.20 + $materia2 * 0.50) / (0.30 + 0.20 + 0.50);
// Para la materia 3
$promedio_materia3 = ($materia3 * 0.30 + $materia3 * 0.20 + $materia3 * 0.50) / (0.30 + 0.20 + 0.50);


// Calcular el promedio general
$promedio_general = ($promedio_materia1 + $promedio_materia2 + $promedio_materia3) / 3;

// Mostrar resultados
echo "Promedio Materia 1: " . $promedio_materia1 . "<br>";
echo "Promedio Materia 2: " . $promedio_materia2 . "<br>";
echo "Promedio Materia 3: " . $promedio_materia3 . "<br>";
echo "Promedio General: " . $promedio_general;

?>