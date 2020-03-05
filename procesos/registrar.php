<?php

$nombres = $_POST['nombres'];
$celular = $_POST['celular'];

$email = $_POST['correo'];
$contra = $_POST['contrasenna'];

$conexion = new PDO("pgsql:dbname=gamma-ray;host=localhost","postgres","root");


echo "EMAIL: ", $email, "<br>";
echo "CONTRASENNA: ", $contra, "<br>";

if (!$conexion) {
    echo "Error en la conexion";
}

$read = "SELECT * FROM Usuario WHERE correo='$email'";

// echo "LOS DATOS DE LA TABLA ATENCION";

$consult = $conexion->query($read);

$count = mysqli_num_rows($consult);

if ($count == 1) {
    echo "Este correo ya esta registrado, intente con otro o acceda con el\n";
    echo "<a href='../signup.php'>Intenta de Nuevo</a>";


} else {
    echo "<br>";
    echo $count;
    $create = "INSERT INTO Usuario(nombres, celular,correo,contrasenna) VALUES ('$nombres', '$celular', '$email', '$contra') ";

    $consult1 = $conexion->query($create);  
    
    echo "Se ha registrado correctamenre tu cuenta de usuario";
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