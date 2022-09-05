<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.themes.css"); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title><?php
            foreach ($resultado as $row) {
                echo $row->Titulo;
            }
            ?></title>
    <style>
        body {
            background-color: #171717;
            font-family: "Century Gothic";
            margin: 0;
        }

        h1 {
            color: white;
            margin: 0;
            margin-left: 20px;
        }

        /*                 HEADER                  */

        header {
            z-index: 99;
            background-color: #171717;
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #6F1DB9;
        }

        header img {
            width: 20px;
            height: auto;
            transition: .2s;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #barra {
            position: absolute;
            width: 20px;
            height: 20px;
            left: 30px;
            cursor: pointer;
        }

        #barra:hover {
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .logo img {
            width: 80px;
        }

        .links {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links img:hover {
            cursor: pointer;
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .links li {
            margin: 0px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .links li a {
            margin: 0;
        }

        main {
            padding-top: 40px;
            color: white;
        }

        nav {
            display: none;
        }

        .verse {
            display: flex;
            flex-direction: column;
            margin-top: 75px;
            z-index: 99;
            background-color: rgba(23, 23, 23, 0.9);
            position: fixed;
            height: 100vh;
            width: 15%;
            color: white;
        }

        .verse li {
            text-decoration: none;
            list-style: none;
            margin-top: 20px;
            transition: .5s;
            cursor: pointer;
            border-bottom: 2px solid rgba(23, 23, 23, 0.9);
            width: fit-content;
        }

        .verse li:hover {
            border-bottom: 2px solid #6F1DB9;
        }

        .verse h3 {
            margin-left: 40px;
        }

        .verse a {
            text-decoration: none;
            color: white;
        }

        .logo {
            width: 150px;
            display: flex;
            justify-content: flex-end;
        }

        .recomendaciones {
            width: 82.5%;
            height: auto;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        .buscador form {
            display: flex;
        }

        #provider-json {
            margin-top: 10px;
            width: 600px;
        }

        #buscar {
            top: 15px;
            right: 30px;
            position: relative;
            width: 20px;
            height: 20px;
            transition: .2s;
            filter: invert(84%) sepia(11%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%);
        }


        #buscar:hover {
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .logo img {
            width: 80px;
        }

        .links {
            list-style: none;
            display: flex;
            justify-content: space-between;
        }

        .links img:hover {
            cursor: pointer;
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .links li {
            margin: 0px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .links li a {
            margin: 0;
        }

        h3 {
            margin: 0;
        }

        #form {
            width: 250px;
            margin: 0 auto;
            height: 50px;
            display: flex;
        }

        form p {
            text-align: end;
            width: max-content;
        }

        #form label {
            font-size: 40px;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            color: grey;
        }

        .clasificacion {
            direction: rtl;
            unicode-bidi: bidi-override;
            font-size: 20px;
            transition: .3s;
        }

        .clasificacion:hover {
            transform: scale(1.2);
        }

        label:hover,
        label:hover~label {
            color: RGB(118, 19, 183);
            cursor: pointer;
        }

        input[type="radio"]:checked~label {
            color: RGB(118, 19, 183);
        }

        .comentario {
            padding: 10px;
            align-items: center;
            margin-left: 60px;
            margin-top: 20px;
            border: 3px solid rgba(136, 33, 226, 0.3);
            border-radius: 10px;
        }

        main {
            padding: 0;
            margin: 0;
            display: flex;
            flex-wrap: wrap;
        }

        main .imagenLibro {
            width: 20%;
            height: 400px;
            margin-left: 75px;
            margin-top: 125px;
            -webkit-box-shadow: 0px 0px 50px 9px #871F78;
            border-radius: 6px;
            box-shadow: 0px 0px 50px 9px #871F78;
        }

        main .info {
            margin-top: 100px;
            margin-left: 75px;
            width: 60%;
            height: 455px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .comentar {
            margin-top: 20px;
            width: 100%;
            margin-left: 70px;
        }

        #caja {
            width: 1000px;
            height: 50px;
        }

        .comentario img {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        .valoraciones {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 100px;
        }

        .valoraciones label {
            font-size: 1.17em;
        }

        .pintado {
            color: RGB(118, 19, 183);
        }

        .valorar p {
            margin: 0;
            padding: 0;
        }

        .valorar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .valorar form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .val-grl {
            height: fit-content;
        }

        .Estrellas {
            display: flex;
            margin: 0;
            margin-left: 15px;
            align-items: center;
        }

        .Estrellas h3 {
            margin: 0;
            padding: 0;
        }

        .Valoracion {
            display: flex;
            flex-direction: column;
        }

        .ComprarLibro {
            background-color: rgba(136, 33, 226, 0.3);
            width: 120px;
            height: 50px;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            border: 3px solid #141414;
            cursor: pointer;
            transition: .3s;
        }

        .ComprarLibro:hover {
            transform: scale(1.1);
            border: 2px solid #7000F0;
        }

        .boton {
            background-color: rgba(136, 33, 226, 0.3);
            width: 120px;
            height: 50px;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            border: 3px solid #141414;
            cursor: pointer;
            transition: .3s;
        }

        .boton:hover {
            transform: scale(1.1);
            border: 2px solid #7000F0;
        }

        a {
            text-decoration: none;
            color: white;
        }

        #comentar {
            margin-left: 20px;
        }

        #caja {
            background-color: rgba(136, 33, 226, 0.1);
            border: none;
            border-radius: 6px;
            padding-left: 20px;
            color: white;
            transition: .3s;
        }

        #caja:focus {
            border-color: rgb(136, 33, 226);
            box-shadow: 0 1px 1px rgba(136, 33, 226, 0.075)inset, 0 0 8px rgba(136, 33, 226, 0.6);
            outline: 0 none;
            transform: scale(1.05);
            margin: 0 20px;
        }

        #caja:focus~#comentar {
            margin-left: 10px;
        }

        .referencia {
            display: flex;
            font-size: 15px;
        }

        .referencia p {
            margin: 10px;
        }

        .content {
            margin-left: 10px;
        }
        footer{
            height: 150px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img id="barra" src="<?php echo base_url("imgs/iconos/barra.png") ?>">
            <img src="<?php echo base_url("imgs/iconos/Logo.png") ?>">
        </div>
        <div class="buscador">
            <form method="POST" action="<?php echo base_url("index.php/Buscador_controller/paginabusquedas") ?>">
                <input id="provider-json" name="keyword">
                <input id="buscar" type="image" src="<?php echo base_url("imgs/iconos/lupa.png"); ?>">
            </form>
        </div>

        <div class="links">
            <li><a href="<?php echo base_url("index.php/Private_area") ?>"><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png"); ?>"></li>
            <li><a href="<?php echo base_url("index.php/cart") ?>"><img id="Cart" src="<?php echo base_url("imgs/iconos/Cart.png"); ?>"></a></li>
            <li><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></li>
            <li><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png"); ?>"></li>
        </div>
    </header>
    <nav class="animate__animated" id="nav">
        <h3>Categorias</h3>
        <ul>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/3") ?>">Romance</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/2") ?>">Fantasia</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/1") ?>">Ciencia Ficcion</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/5") ?>">No Ficcion</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/8") ?>">Misterio</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/4") ?>">Humor</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/7") ?>">Arte</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/6") ?>">Horror</a></li>
        </ul>
    </nav>
    <main>
        <?php
        foreach ($resultado as $row) {
            echo ('<img class="imagenLibro" src="' . base_url("imgs/libros/" . $row->img) . '"><div class="info"><div class="textoLibro"><h2>' . $row->Titulo . '</h2><h3>' . $row->Autor . '</h3><p>' . $row->Descripcion . '</p></div><button class="ComprarLibro"><a href="' . base_url('index.php/products/addToCart/' . $row->ID) . '" class="btn btn-primary">Agregar al carrito</a></button></div>');
        } ?>
        <div class="valoraciones">
            <?php
            foreach ($puntuacion->result() as $row) {
                if ($row->Valoracion == null) {
                    echo '<div class="val-grl"><h3>Valoraciones Insuficientes</h3></div>';
                } else {
                    echo '<div class="val-grl"><h3>Valoracion general: ★' . round($row->Valoracion, 2) . '</h3></div>';
                }
            }

            if (empty($valoracion)) {
                foreach ($resultado as $row) {
                    echo ('
            <div class="valorar">
        <form method="POST" action="' . base_url("index.php/Libro_controller/valorar/" . $row->ID) . '" id="#form">
            <p class="clasificacion">
            <input id="radio1" type="radio" name="estrellas" value="5">
            <label for="radio1">★</label>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label for="radio2">★</label>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label for="radio3">★</label>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label for="radio4">★</label>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label for="radio5">★</label>
        </p>
        <button class="ComprarLibro" type="submit">Calificar</button>
</form></div>');
                }
            } else {
                foreach ($valoracion as $row) {
                    if ($row->Valoracion == 1) {
                        echo ('
                    <div class="Valoracion">
                    <h3>Tu valoracion<h3>
                    <div class="Estrellas">
                        <h3 class="pintado">★<h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>
                    </div>');
                    } elseif ($row->Valoracion == 2) {
                        echo ('
                    <div class="Valoracion">
                    <h3>Tu valoracion<h3>
                    <div class="Estrellas">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>
                    </div>');
                    } elseif ($row->Valoracion == 3) {
                        echo ('
                    <div class="Valoracion">
                    <h3>Tu valoracion<h3>
                    <div class="Estrellas">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>
                    </div>');
                    } elseif ($row->Valoracion == 4) {
                        echo ('
                    <div class="Valoracion">
                    <h3>Tu valoracion<h3>
                    <div class="Estrellas">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3>★</h3>
                    </div>
                    </div>');
                    } elseif ($row->Valoracion == 5) {
                        echo ('
                    <div class="Valoracion">
                    <h3>Tu valoracion<h3>
                    <div class="Estrellas">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                    </div>
                    </div>');
                    }
                }
            }
            ?>
        </div>
        <div class="comentacion" data-aos="fade-up">
            <?php
            foreach ($resultado as $row) {
                echo ('<div class="comentar">
            <form method="POST" action="' . base_url("index.php/Libro_controller/comentar/" . $row->ID) . '">
                <input type="text" name="comentario" placeholder="Escribe tu comentario aquí" id="caja">
                <button class="boton" id="comentar" type="submit">Comentar</button>
            </form>
        </div>');
            }
            ?>
            <?php foreach ($comentarios as $row) {
                echo '<div class="comentario"><div class="referencia"><img src="' . base_url("index.php/Usuario/mostrarImagen") . '">';
                echo '<p>' . $row->Nombre . '</p>';
                echo '<p>' . $row->Fecha . '</p></div>';
                echo '<p class="content">' . $row->Contenido . '</p></div>';
            } ?>
        </div>
    </main>
    <footer>
    </footer>
    <script>
        const comprar = document.querySelector(".ComprarLibro");
        const tarjeta = document.querySelector(".libro");

        function redirigir(id) {
            window.location.href = "<?php echo base_url("index.php/Libro_controller/cargarpagina/"); ?>" + id;
        }
    </script>

    <script>
        var options = {
            url: "<?php echo base_url('index.php/Buscador_controller/buscar') ?>",
            getValue: "Titulo",
            theme: "light-blue",
            template: {
                type: "custom",
                method: function(value, item) {
                    return "<img src='<?php echo base_url("imgs/libros/") ?>" + item.img + "' /> | " + value + " | " + item.Autor;
                }
            },
            list: {
                maxNumberOfElements: 5,
                match: {
                    enabled: true
                },

                showAnimation: {
                    type: "fade", //normal|slide|fade
                    time: 400,
                    callback: function() {}
                },

                hideAnimation: {
                    type: "slide", //normal|slide|fade
                    time: 400,
                    callback: function() {}
                }
            },

        };

        $("#provider-json").easyAutocomplete(options);
    </script>
    <script>
        new Glider(document.querySelector('.gliders'), {
            slidesToShow: 5,
            slidesToScroll: 1,
            draggable: true,
            dots: '.dotss',
            arrows: {
                prev: '.glider-prevs',
                next: '.glider-nexts'
            }
        });
    </script>
    <script>
        window.addEventListener('load', function() {
            new Glider(document.querySelector('.glider'), {
                slidesToShow: 5,
                slidesToScroll: 5,
                draggable: true,
                dots: '.dots',
                arrows: {
                    prev: '.glider-prev',
                    next: '.glider-next'
                }
            });
        })
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        const barra = document.getElementById("barra");
        const nav = document.getElementById("nav");

        barra.addEventListener("click", () => {
            nav.classList.toggle("verse");
            nav.classList.toggle("animate__fadeInLeft")
        })
    </script>
</body>

</html>