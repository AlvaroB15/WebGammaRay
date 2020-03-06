<!-- <pre>

</pre> -->

<?php

$nombreA = $_POST['cancion_buscar'];


$conexion = new PDO("pgsql:dbname=d5435khnem8n0s;host=ec2-34-235-108-68.compute-1.amazonaws.com","rmyapjqexavwbp","965e4cd2f4648b57839d2bc78959d8f97acaecfcf0def9b691d372e93f0b339c");

// $conexion = mysqli_connect('localhost', 'root', '', 'gamma_ray');

$sentencia = $conexion->query("SELECT nombre_cancion FROM cancion WHERE nombre_cancion='$nombreA'");
$titulo = $sentencia->fetchAll(PDO::FETCH_OBJ);


if (!$conexion) {
    echo "Error en la conexion";
}

// $read = "SELECT nombre_cancion FROM cancion WHERE nombre_cancion='$nombreA'";

// echo "LOS DATOS DE LA TABLA ATENCION";





/*
$consult = $conexion->query($read);

while ($f = $consult->fetch_assoc()) {
    print "{$f["nombre_cancion"]}";
}

mysqli_close($conexion);  ?>
*/













<!-- <pre>
</pre> -->