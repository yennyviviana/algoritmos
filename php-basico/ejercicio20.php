<?php

/*Solicitar cuatro números en variables e intercambiar los valores de las
variables entre si*/


/* 1. Leer los cuatro números */
$num1 = readline("Ingrese el valor de la variable 1: ");
$num2 = readline("Ingrese el valor de la variable 2: ");
$num3 = readline("Ingrese el valor de la variable 3: ");
$num4 = readline("Ingrese el valor de la variable 4: ");

/* Mostrar antes del intercambio */
echo "\nAntes del intercambio:\n";
echo "Variable 1 = $num1\n";
echo "Variable 2 = $num2\n";
echo "Variable 3 = $num3\n";
echo "Variable 4 = $num4\n\n";

/* 2. Intercambiar valores
   En este ejemplo haremos un **rotado**:
   num1 → num2 → num3 → num4 → num1
*/
$temp = $num1;
$num1 = $num2;
$num2 = $num3;
$num3 = $num4;
$num4 = $temp;

/* 3. Mostrar después del intercambio */
echo "Después del intercambio (rotado):\n";
echo "Variable 1 = $num1\n";
echo "Variable 2 = $num2\n";
echo "Variable 3 = $num3\n";
echo "Variable 4 = $num4\n";

?>

