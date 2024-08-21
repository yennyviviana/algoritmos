<?php

/*Tres personas deciden invertir su dinero para fundar una empresa. Cada una de
ellas invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte
con respecto a la cantidad total invertida...........
*/




// Inversiones de las tres personas.....
$inversionPersona1 = 5000;
$inversionPersona2 = 7000;
$inversionPersona3 = 8000;

// Cálculo de la cantidad total invertida......
$cantidadTotalInvertida = $inversionPersona1 + $inversionPersona2 + $inversionPersona3;

// Cálculo del porcentaje de inversión de cada persona.....
$porcentajePersona1 = ($inversionPersona1 / $cantidadTotalInvertida) * 100;
$porcentajePersona2 = ($inversionPersona2 / $cantidadTotalInvertida) * 100;
$porcentajePersona3 = ($inversionPersona3 / $cantidadTotalInvertida) * 100;


// Mostrar los resultados...........
echo "Porcentaje de inversión de Persona 1: " . $porcentajePersona1 . "%<br>";
echo "Porcentaje de inversión de Persona 2: " . $porcentajePersona2 . "%<br>";
echo "Porcentaje de inversión de Persona 3: " . $porcentajePersona3 . "%<br>";



?>