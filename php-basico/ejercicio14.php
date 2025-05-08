<?php

/*En una Institución pública existen tres departamentos: Planeación, Gobierno y
Educación. El presupuesto anual del Instituto se reparte conforme a la siguiente
tabla: Planeación 30%, Gobierno 35%, Salud 35%. Si el usuario da una cantidad
presupuestal cualquiera, determinar que dinero recibirá cada departamento.
*/



// Solicita el presupuesto total
$presupuesto_total = (float) readline("Ingrese el presupuesto total del instituto: ");

// Cálculos por departamento
$planeacion = $presupuesto_total * 0.30;
$gobierno = $presupuesto_total * 0.35;
$salud = $presupuesto_total * 0.35;

// Mostrar resultados
echo "Distribución del presupuesto:\n";
echo "Planeación: $" . number_format($planeacion, 2) . "\n";
echo "Gobierno: $" . number_format($gobierno, 2) . "\n";
echo "Salud: $" . number_format($salud, 2) . "\n";




?>