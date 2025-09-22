<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sitio Web de Venom.">
    <meta name="keywords" content="html5, responsive, grid, accesibilidad">
    <meta name="author" content="Jorge Sanchez Linkia FP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="./script.js" defer></script>
    <title>Sitio Web Venom</title>
</head>

<body>

    <?php
        include_once("./templates/header.php");

    ?>

    <main class="container main">
        <div class="container-main">
            <hgroup>
                <div class="main-titulo">
                    <img src="./img/logo venom.png" alt="">
                    <h3>Sobre mí</h3>
                </div>

                <h3 class="main-titulo__cita">Eddie Brook como el nuevo anfitrión del extraterrestre que se convertiría
                    en el villano Venon, utilizando los acontecimientos de la historia de "sin Eater"</h3>
            </hgroup>
        </div>

        <section class="container-images">
            <h1>Novedades</h1>

            <div class="layout-shifter container-grid">
                <div class="imagen1">
                    <img src="./img/Venom_cara.jpg" alt="Cara de Venom">
                </div>

                <div class="imagen2">
                    <img src="./img/Venom_dientes.webp" alt="Venom Dientes">
                </div>

                <div class="imagen3">
                    <img src="./img/venom-spider.webp" alt="">
                </div>

                <div class="imagen4">
                    <img src="./img/eddie.jpg" alt="">
                </div>
            </div>
        </section>
    </main>

   <?php

        include_once("./templates/footer.php");

    ?>
</body>

</html>