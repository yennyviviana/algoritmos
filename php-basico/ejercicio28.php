<?php

/*Automatice el proceso para obtener la cedula de ciudadanía. Que
información se solicita? Que información se requiere de salida?*/

// Información solicitada
$nombre = "Juan Pérez";
$fechaNacimiento = "01/01/1990";
$lugarNacimiento = "Cali";
$genero = "Masculino";
$documentoPrevio = "12345";
$direccion = "123 Calle Principal";
$foto = "URL de la foto";
$firma = "URL de la firma";
$huellasDactilares = "Datos de huellas dactilares";

// Proceso de generación de cédula
$numeroCedula = mt_rand(10000000, 99999999); // Número de cédula aleatorio
$fechaEmision = "07/11/2023"; // Fecha de emisión ficticia
$fechaVencimiento = "07/11/2033"; // Fecha de vencimiento ficticia

// Información requerida de salida
$cedulaSalida = [
    "Número de cédula" => $numeroCedula,
    "Fecha de emisión" => $fechaEmision,
    "Fecha de vencimiento" => $fechaVencimiento,
    "Nombre" => $nombre,
    "Fecha de nacimiento" => $fechaNacimiento,
    "Lugar de nacimiento" => $lugarNacimiento,
    "Género" => $genero,
    "Documento previo" => $documentoPrevio,
    "Dirección" => $direccion,
    "Foto" => $foto,
    "Firma" => $firma,
    "Huellas dactilares" => $huellasDactilares
];

// Mostrar la información de la cédula generada
foreach ($cedulaSalida as $campo => $valor) {
    echo "$campo: $valor\n";
}
?>
