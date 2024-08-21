<?php

/*Diseñe un algoritmo que calcule la nota final de un estudiante con los
siguientes porcentajes: primer parcial 30%, segundo parcial 30% y examen
final 40%.
*/


$parcialUno =  3;
$parcialDos= 4;
$examenFinal= 5;


//calculamos el promedio
$promedio = ($parcialUno * 0.3 + $parcialDos * 0.3  + $examenFinal * 0.4);


//calcular nota final
$nota_final =  $promedio;


echo "La nota final para el estudiante es:  ". $nota_final," en el semestre.\n";
















?>