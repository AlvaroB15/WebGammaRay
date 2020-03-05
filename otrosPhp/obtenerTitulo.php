<!-- <pre>

</pre> -->

<?php

$nombreA = $_POST['cancion_buscar'];

$conexion = mysqli_connect('localhost', 'root', '', 'gamma_ray');


if (!$conexion) {
    echo "Error en la conexion";
}

$read = "SELECT nombre_cancion FROM cancion WHERE nombre_cancion='$nombreA'";

// echo "LOS DATOS DE LA TABLA ATENCION";

$consult = $conexion->query($read);

while ($f = $consult->fetch_assoc()) {
    print "{$f["nombre_cancion"]}";
}

mysqli_close($conexion);  ?>
<!-- <pre>
</pre> -->