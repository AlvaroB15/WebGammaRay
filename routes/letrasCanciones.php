<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letras de Canciones de Gamma Ray</title>
    <link rel="stylesheet" href="../estilos/style.css">

</head>

<body>

    <header>

    <?php require('../empaquetado/cabecera.php') ?>

    </header>

    <h1 id="tituloPrincipalC">Letras de Canciones de Gamma Ray</h1>

    <center>
        <h3>Cancion a Buscar</h3>

        <form action="" method="post">

            <label for="cancion_buscar">Titulo de la Cancion</label>
            <!-- <input type="text" name="cancion_buscar" id="cancion_buscar"> -->

            <input type="search" name="cancion_buscar" id="cancion_buscar">

            <!-- <input type="submit" value="Buscar"> -->

        </form>
        <p></p>
        <p>Solo estan disponibles las canciones y sus respectivos audios, hasta ahora, se debe escribir igual: </p>
        <p>Anywhere In The Galaxy</p>
        <p>Insurrection</p>
    </center>


    <br>
    <br>
    <div class="tituloCancion">
        <?php require('../procesos/obtenerTitulo.php') ?>
        <?php foreach ($titulo as $titulos) { ?>
            <?php echo $titulos->nombre_cancion ?>
        <?php } ?>
    </div>

    <br>
    <br>


    <center>
        <audio controls>
            <source src="<?php echo "../multimedia/$nombreA.mp3"; ?>" type="audio/mp3">
            <!-- <source src="../multimedia/Anywhere In The Galaxy.mp3" type="audio/mp3"> -->
            Audio element not supported by your browser.
        </audio>
    </center>

    <div class="contenidoCancion">
        <?php require('../procesos/obteniendoCanciones.php') ?>
        <?php foreach ($letra as $letras) { ?>
            <?php echo $letras->letra_cancion ?>
        <?php } ?>
    </div>

    <pre>

    </pre>

    <div class="espacioFinal"></div>

    <?php require('../empaquetado/footer.php') ?>

</body>

</html>