<?php


/*Determine cuanto se le debe pagar a un empleado en una empresa según
las siguientes condiciones: Devenga un salario básico, tiene comisiones por
ventas, se le descuenta el aporte a cooperativas (2 % salario básico) y la
seguridad social ((7% salario básico) + comisiones).
*/

//pagos al empleado salario basico y comisiones.................
$salario_basico = 1800000;
$comisiones_ventas  =  300000;

//descuento  al aporte de coperativas( salario basico 2%)...............................
$aportes_coperativas = $salario_basico * 0.2;


//descuento a la seguridad social (7% del salario básico + comisiones por ventas).......................
$seguridad_social = ($salario_basico * 0.07) + ($comisiones_ventas * 0.07);



// Calcular el salario total que se le debe pagar al empleado..............................................
$salario_total = $salario_basico + $comisiones_ventas - $aportes_coperativas - $seguridad_social;


echo "Segun las condiciones se le debe pagar al empleado: ". $seguridad_social;



?>