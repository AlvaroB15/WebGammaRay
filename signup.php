<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso de Usuarios</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <header>

        <?php require('cabeceraRaiz.php') ?>

    </header>

    <center>

        <p1>Creadno un Usuario</p1>

        <form action="procesos/registrar.php" method="post">

            <p><label for="nombres">Nombres: </label>
                <input type="text" name="nombres" id="nombres" required></p>

            <p><label for="celular">Celular: </label>
                <input type="text" name="celular" id="celular" required></p>

            <p><label for="correo">Correo: </label>
                <input type="text" name="correo" id="correo" required></p>

            <p><label for="contrasenna">Contraseña: </label>
                <input type="password" name="contrasenna" id="contrasenna" required></p>

            <p><input type="submit" value="Enviar"></p>

        </form>

    </center>
</body>

</html>