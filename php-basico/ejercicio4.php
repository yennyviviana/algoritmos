<?php


/*Realizar las cuatro operaciones matemáticas básicas con dos número dados por el usuario 
y mostrar los resultados con un mensaje indicando el tipo de operación realizada para cada resultado.*/


$num1= (float) readline("Ingrese el num1:");
$num2 = (float) readline("Ingrese el num2:");

$sum = $num1 + $num2;
$resta = $num1 - $num2;
$multi = $num2 * $num2;
$divi =   $num1 / $num2;



echo  "La suma  es: ".  number_format($sum,2). "\n";
echo  "La  resta  es: ".  number_format($resta,2). "\n";
echo   "La multiplicacion es: ".  number_format($multi,2). "\n";
echo  "La  division  es: ".  number_format($divi,2). "\n";






?>