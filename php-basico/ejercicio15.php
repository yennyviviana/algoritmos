<?php

/*Tres personas deciden invertir su dinero para fundar una empresa. Cada una de
ellas invierte una cantidad distinta. Obtener el porcentaje que cada quien invierte
con respecto a la cantidad total invertida...........
*/




// Ingreso de las inversiones individuales
$inversion1 = (float) readline("Ingrese la inversión de la persona 1: ");
$inversion2 = (float) readline("Ingrese la inversión de la persona 2: ");
$inversion3 = (float) readline("Ingrese la inversión de la persona 3: ");

// Suma total de inversión
$total_inversion = $inversion1 + $inversion2 + $inversion3;

// Cálculo de porcentajes
$porcentaje1 = ($inversion1 / $total_inversion) * 100;
$porcentaje2 = ($inversion2 / $total_inversion) * 100;
$porcentaje3 = ($inversion3 / $total_inversion) * 100;

// Mostrar resultados
echo "Porcentaje de inversión de cada persona:\n";
echo "Persona 1: " . number_format($porcentaje1, 2) . "%\n";
echo "Persona 2: " . number_format($porcentaje2, 2) . "%\n";
echo "Persona 3: " . number_format($porcentaje3, 2) . "%\n";

?>




?>