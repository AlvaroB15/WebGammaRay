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
$letra = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<pre>


</pre>
