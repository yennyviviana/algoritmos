<?php
/*el dueño de una tienda compra un artículo a un precio determinado. Obtener el
precio en que lo debe vender para obtener una utilidad del 30%.
*/


$precio_compra = (float) readline("Ingrese el precio de compra del artículo: ");

// Calcular el precio de venta con 30% de utilidad
$precio_venta = $precio_compra * 1.30;

echo "El precio de venta para obtener una utilidad del 30% es: $" . number_format($precio_venta, 2) . "\n";

?>










