<?php

$nombres =  $_POST['nombres'];
$correo =  $_POST['correo'];
$contenido =  $_POST['contenido'];

$fecha = new DateTime();
$fechas = $fecha->format('Y-m-d h:i:s');
// echo $fechas;

// Modelo para el insertado de la fecha en la base de datos'2020-02-25 03:11:15'

$conexion = mysqli_connect('localhost', 'root', '', 'gamma_ray');

echo "Nombre: ", $nombres, "<br>"; 
echo "Correo: ", $correo, "<br>";
echo "contenido: ", $contenido, "<br>";
echo "Fecha: ",$fechas, "<br>";

if (!$conexion) {
    echo "Error en la conexion";
}

$read = "INSERT INTO atencion (nombres,correo, descripcion ,fecha) VALUES ('$nombres','$correo','$contenido','$fechas')";

// echo "LOS DATOS DE LA TABLA ATENCION";

$consult = $conexion->query($read);

echo "<br>";
echo "<br>";
echo "<br>";

// while ($f = $consult->fetch_assoc()) {
//     print "Id: {$f["id_atencion"]} ,  Nombre: {$f["nombres"]}, Correo: {$f["correo"]}, Descripcion: {$f["descripcion"]},  Fecha: {$f["fecha"]}";
//     echo "<br>";
// }

mysqli_close($conexion);

echo "<br>";
echo "<br>";
echo "<br>";
echo "CONSULTA COMPLETADA CON EXITO";

?>

<pre>


</pre>

<a href="index.php">VOLVER A MENU</a>