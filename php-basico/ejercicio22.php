<?php

/*Un computador se compone de 5 elementos básicos. Solicite al usuario el nombre
y valor de cada elemento y calcule finalmente el costo del computador incluyendo
un incremento por mano de obra de ensamble
*/

// Definir variables para cada elemento y costo total
$costoTotal = 0;

// Solicitar al usuario el nombre 
$elemento1 = 'hadware';
$elemento2 =  'mouse';
$elemento3 =  'teclado';
$elemento4 =  'sofware';
$elemento5 =  'memoria';


//valor de cada elemento
$valorElemento1 = '3000000';
$valorElemento2 =  '100000';
$valorElemento3  =  '70000';
$valorElemento4  =  '5000000';
$valorElemento5  =  '50000';




//calcular el costo total de cada elemento
$costoTotal = $valorElemento1 + $valorElemento2  +  $valorElemento3  +  $valorElemento4  + $valorElemento5;

// Calcular el incremento por mano de obra de ensamblaje
$incrementoManoDeObra = 0.15 * $costoTotal; // 10% del costo total

// Calcular el costo total, incluyendo el incremento por mano de obra
$costoTotalConManoDeObra = $costoTotal + $incrementoManoDeObra;

// Mostrar los resultados..........
echo "el costo total del computador es: ".$costoTotal;
echo "incremento por mano de obra de ensamble es: ".  $incrementoManoDeObra;
?>
