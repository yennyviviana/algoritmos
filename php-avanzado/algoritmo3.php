<h3>Pida el nombre de un estudiante y luego escribiendo su nombre en pantalla
solicítele número de identificación, fecha de nacimiento y valor de matrícula.</h3>


s
<form method="POST">

<label for="nombre">Nombre:</label>
<input type="text" id="nombre" name="nombre" class="form-control"><br><br>
<label>Identificacion:</label>
<input type="number" id="identificacion" name="identificacion" class="form-control"><br><br>
<label>Fecha de nacimiento:</label>
<input type="date" id="fecha" name="fecha" class="fecha"><br><br>
<label>Valor de la matricula:</label>
<input type="number" id="matricula" name="matricula" class="form-control"><br><br>

<button type="submit"  name="submit" class="btn btn-primary" value="enviar">Enviar</button>
</form>


<?php

// Capturando POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$fecha = $_POST ['fecha'];
$matricula =$_POST['matricula'];

}



//Imprimir mensaje pantalla......

echo  "el nombre es :  ". $nombre;
echo  "la identificacion es: ". $identificacion;
echo   "la fecha es : ". $fecha;
echo   " la matricula es: ". $matricula;

?>