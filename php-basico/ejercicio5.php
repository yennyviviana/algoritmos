<?php

/* Calcular el salario mensual de un empleado. El salario de calcula con base en un sueldo básico,
 descuentos por seguridad social y bonificaciones por ventas...........
*/


//variables
$sueldo_basico= 3000000;
$descuentosSeguridad = 250000;
$bonificacionesVentas = 2400000;


$salarioMensual = $sueldo_basico  + $bonificacionesVentas - $descuentosSeguridad;


echo "El salario   mensual del empleado  es  " . $salarioMensual;






?>