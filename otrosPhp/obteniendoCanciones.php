<pre>
</pre>

<?php

$nombreC = $_POST['cancion_buscar'];

$conexion = new PDO("pgsql:dbname=d5435khnem8n0s;host=ec2-34-235-108-68.compute-1.amazonaws.com","rmyapjqexavwbp","965e4cd2f4648b57839d2bc78959d8f97acaecfcf0def9b691d372e93f0b339c");

// $conexion = mysqli_connect('localhost', 'root', '', 'gamma_ray');


if (!$conexion) {
    echo "Error en la conexion";
}

$sentencia = $conexion->query("SELECT letra_cancion FROM cancion WHERE nombre_cancion='$nombreC' ");
$mascotas = $sentencia->fetchAll(PDO::FETCH_OBJ);



/*
$read = "SELECT letra_cancion FROM cancion WHERE nombre_cancion='$nombreC' ";

// echo "LOS DATOS DE LA TABLA ATENCION";

$consult = $conexion->query($read);

while ($f = $consult->fetch_assoc()) {
    print "{$f["letra_cancion"]}";
    echo "<br>";
}

mysqli_close($conexion);
*/

?>

<pre>


</pre>

<a href="login.php">VOLVER A MENU</a>