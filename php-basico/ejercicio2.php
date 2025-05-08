<?php

/* Calcular el salario mensual de un empleado. El salario de calcula con base en un sueldo básico,
 descuentos por seguridad social y bonificaciones por ventas...........
*/

$sueldo_basico = readline("Ingrese el sueldo basico: ");
$descuento_seguridad = readline("Ingrese descuento por seguridad social :");
$bonificacion_ventas = readline("Ingresar la bonificaciones por ventas :");



$salario_mensual= $sueldo_basico - $descuento_seguridad + $bonificacion_ventas;


if ($salario_mensual > 0){
    echo "El salario calculado es: ". number_format ($salario_mensual,2);

} else{
    echo "El salario mensual es incorrecto";
}
?>