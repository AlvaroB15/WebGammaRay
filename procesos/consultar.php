<?php

$email = $_POST['correo'];
$contra = $_POST['contrasenna'];



$conexion = mysqli_connect('localhost', 'root', '', 'gamma_ray');

echo "EMAIL: ", $email, "<br>";
echo "CONTRASENNA: ", $contra, "<br>";

if (!$conexion) {
    echo "Error en la conexion";
}

$read = "SELECT * FROM Usuario WHERE correo='$email' AND contrasenna = '$contra' ";

// echo "LOS DATOS DE LA TABLA ATENCION";

$consult = $conexion->query($read);

$count = mysqli_num_rows($consult);

if ($count == 1) {
    echo "Bienvenido a su cuenta\n";
    echo "<a href='../signup.php'>Volver</a>";


} else {   
    echo "No se ha encontrado una cuenta con los datos brindados. \n";
    echo "<br>";
    echo "Si desea registrarse, dele click al siguiente enlace ";
    echo "<a href='../signup.php'>REGISTRESE</a>";
}

echo "<br>";
echo "<br>";
echo "<br>";

mysqli_close($conexion);

echo "<br>";
echo "<br>";
echo "<br>";
echo "CONSULTA COMPLETADA CON EXITO";

?>

<pre>


</pre>

<a href="login.php">VOLVER A MENU</a>