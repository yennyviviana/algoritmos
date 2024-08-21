<?php

/*En una Institución pública existen tres departamentos: Planeación, Gobierno y
Educación. El presupuesto anual del Instituto se reparte conforme a la siguiente
tabla: Planeación 30%, Gobierno 35%, Salud 35%. Si el usuario da una cantidad
presupuestal cualquiera, determinar que dinero recibirá cada departamento.
*/



// Cantidad total del presupuesto (por ejemplo, $1,000,000)...................
$presupuesto_total = 1000000;

// Porcentajes para cada departamento.....................
$porcentaje_planeacion = 0.30;
$porcentaje_gobierno = 0.35;
$porcentaje_educacion = 0.35;

// Calcular el presupuesto asignado a cada departamento.........................
$presupuesto_planeacion = $presupuesto_total * $porcentaje_planeacion;
$presupuesto_gobierno = $presupuesto_total * $porcentaje_gobierno;
$presupuesto_educacion = $presupuesto_total * $porcentaje_educacion;

// Mostrar los presupuestos asignados a cada departamento..........................
echo "El presupuesto del departamento de Planeación es: $" . $presupuesto_planeacion . PHP_EOL;
echo "El presupuesto del departamento de Gobierno es: $" . $presupuesto_gobierno . PHP_EOL;
echo "El presupuesto del departamento de Educación es: $" . $presupuesto_educacion . PHP_EOL;



?>