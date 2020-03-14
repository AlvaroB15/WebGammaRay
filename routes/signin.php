
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="/estilos/style.css">
</head>

<body>
    <header>

        <?php require('../empaquetado/cabecera.php') ?>

    <!-- Se mandara un formulario para quejas, o un feedback para poder mejorar el diseño o ideas a cambiar en la web -->

    <center>
        
        <p1>Acceso a Usuario</p1>

        <form action="procesos/consultar.php" method="post">

            <p><label for="correo">Correo: </label>
                <input type="text" name="correo" id="correo" required></p>

            <p><label for="contrasenna">Contraseña: </label>
                <input type="password" name="contrasenna" id="contrasenna" required></p>

            <p><input type="submit" value="Enviar"></p>

        </form>

    </center>
        
    </header>


    <div class="espacioFinal"></div>

    <?php require('../empaquetado/footer.php') ?>

</body>

</html>