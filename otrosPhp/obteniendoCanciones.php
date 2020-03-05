<pre>
</pre>

<?php

$nombreC = $_POST['cancion_buscar'];

$conexion = mysqli_connect('localhost', 'root', '', 'gamma_ray');


if (!$conexion) {
    echo "Error en la conexion";
}

$read = "SELECT letra_cancion FROM cancion WHERE nombre_cancion='$nombreC' ";

// echo "LOS DATOS DE LA TABLA ATENCION";

$consult = $conexion->query($read);

while ($f = $consult->fetch_assoc()) {
    print "{$f["letra_cancion"]}";
    echo "<br>";
}

mysqli_close($conexion);


?>

<pre>


</pre>

<a href="login.php">VOLVER A MENU</a>