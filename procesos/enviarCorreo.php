<!-- TREMENDA WEB SOBRE LA CONEXION DE POSTGRESQL CON PHP -->
<!-- https://parzibyte.me/blog/2019/06/17/conectar-postgresql-php-pdo-crud/ -->

<?php
echo "Estoy en el branch de PostgreSql<br>";
$nombres =  $_POST['nombres'];
$correo =  $_POST['correo'];
$contenido =  $_POST['contenido'];

$fecha = new DateTime();
$fechas = $fecha->format('Y-m-d h:i:s'); // Modelo para el insertado de la fecha en la base de datos'2020-02-25 03:11:15'

echo "Antes de la conexion <br>";

// Conexion de forma Remota

// $conexion = new PDO("pgsql:dbname=d5435khnem8n0s;host=ec2-34-235-108-68.compute-1.amazonaws.com","rmyapjqexavwbp","965e4cd2f4648b57839d2bc78959d8f97acaecfcf0def9b691d372e93f0b339c");

// Conexion de foma Local





$contraseña = '';
$usuario = 'postgres';
$nombreBaseDeDatos = 'Webgammaray';
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
// $rutaServidor = 'postgres@LocalWebGammaRayHeroku';
$rutaServidor = 'localhost';

$puerto = '5432';


try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}


// try {
//     $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
//     $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (Exception $e) {
//     echo "Ocurrió un error con la base de datos: " . $e->getMessage();
// }







    // $dbuser = 'postgres';
    // $dbpass = '';
    // $host = 'localhost';
    // $dbname = 'postgres';

    // $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass, array(
    //     PDO::ATTR_PERSISTENT => true));	




// $dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser ,$dbpass);
// $conn_string = "host=localhost dbname=postgres user=postgres password=";
// $dbconn4 = pg_connect($conn_string);
// $conexion = new PDO("pgsql:dbname=postgres;host=localhost","postgres","");

// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);






// $contraseña = "";
// $usuario = "postgres";

// $nombreBaseDeDatos = "postgres";
// # Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
// $rutaServidor = "localhost";
// $puerto = "5432";

// // $base_de_datos = new PDO("pgsql:host=$rutaServidor;dbname=$nombreBaseDeDatos", $usuario, $contraseña);

// // $base_de_datos = new PDO("pgsql:host='localhost';port='5432';dbname='postgres'", "postgres", "");

// echo "Luego de la primera linea de conexion";

// $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "Luego de la conexion ";

// $sentencia = $conexion->prepare("INSERT INTO atencion (nombres,correo, descripcion ,fecha) VALUES ('$nombres','$correo','$contenido','$fechas')");
// $sentencia = $conexion->prepare("INSERT INTO atencion (nombres,correo, descripcion ,fecha) VALUES (?,?,?,?);");

// $resultado = $sentencia->execute([$nombres, $correo, $contenido, $fechas]);

// echo "luego del query";


// echo "Nombre: ", $nombres, "<br>"; 
// echo "Correo: ", $correo, "<br>";
// echo "contenido: ", $contenido, "<br>";
// echo "Fecha: ",$fechas, "<br>";

// echo "<br>";
// echo "<br>";
// echo "<br>";


// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "CONSULTA COMPLETADA CON EXITO";  ?>

<pre>


</pre>

<a href="index.php">VOLVER A MENU</a>