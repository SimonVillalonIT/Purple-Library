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
    <title><?php 
        foreach($resultado as $row){
            echo $row->Titulo;
        }
    ?></title>
    <style>
        body {
            background-color: #171717;
            font-family: "Century Gothic";
            margin: 0;
            color: white;
        }

        h1 {
            color: white;
            margin: 0;
            margin-left: 20px;
        }

        header {
            background-color: #171717;
            position: fixed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #6F1DB9;
            width: 100%;
        }

        header a {
            margin-right: 20px;
        }

        header img {
            width: 20px;
            height: auto;
            transition: .2s;
        }

        .logo img {
            width: 80px;
        }

        .links {
            width: fit-content;
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

        .logo {
            width: 15%;
            display: flex;
            justify-content: center;
        }

        .recomendaciones {
            width: 82.5%;
            height: auto;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        .buscador{
            width: min-content;
            height: min-content;
        }
        .buscador form {
            display: flex;
            color: black;
        }

        #provider-json {
            margin-top: 10px;
            width: 600px;
        }

        #buscar {
            position: absolute;
            top: 30px;
            right: 410px;
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
            display: flex;
            padding: 10px;
            align-items: center;
        }

        main {
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
        .comentar{
            margin-top: 20px;
            width: 100%;
            margin-left: 70px;
        }
        .comentar input{
            width: 1000px;
            height: 50px;
        }
        .comentario p {
            margin: 10px;
        }

        .comentario img {
            width: 50px;
            height: auto;
        }
        .valoraciones{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-left: 100px;
        }
        .valoraciones label{
            font-size: 1.17em;
        }
        .pintado {
            color: RGB(118, 19, 183);
        }
        .valorar p{
            margin: 0;
            padding: 0;
        }
        .valorar{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .valorar form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .val-grl{
            height: fit-content;
        }
        .Estrellas{
            display: flex;
            margin: 0;
            margin-left:15px;
            align-items: center;
        }
        .Estrellas h3{
            margin: 0;
            padding:0;
        }
        .Valoracion{
            display: flex;
            flex-direction: column;
        }
        .ComprarLibro{
            background-color: rgba(136, 33, 226, 0.3);
            width: 120px;
            height: 50px;
            border-radius: 6px;
            color:white;
            font-size: 18px;
            border:3px solid #141414;
            cursor: pointer;
            transition: .3s;
        }
        .ComprarLibro:hover{
            transform: scale(1.1);
            border: 2px solid #7000F0;
        }
    </style>
</head>

<body>
<header>
        <div class="logo"><img src="<?php echo base_url("imgs/iconos/Logo.png") ?>"></div>
        <div class="buscador">
            <form method="POST" action="<?php echo base_url("index.php/Buscador_controller/paginabusquedas") ?>">
                <input id="provider-json" name="keyword">
                <input id="buscar" type="image" src="<?php echo base_url("imgs/iconos/lupa.png"); ?>">
            </form>
        </div>

        <div class="links">
            <li><a href="<?php echo base_url('index.php/private_area'); ?>"><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png"); ?>"></a></li>
            <li><a href="<?php echo base_url("index.php/cart")?>"><img id="Cart" src="<?php echo base_url("imgs/iconos/Cart.png");?>"></a></li>
            <li><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></li>
            <li><a href="<?php echo base_url('index.php/private_area/logout'); ?>"><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png"); ?>"></a></li>
        </div>
    </header>
    <main>
        <?php
        foreach ($resultado as $row) {
            echo ('<img class="imagenLibro" src="' . base_url("imgs/libros/" . $row->img) . '"><div class="info"><div class="textoLibro"><h2>' . $row->Titulo . '</h2><h3>' . $row->Autor . '</h3><p>' . $row->Descripcion . '</p></div><button class="ComprarLibro"><a href="'.base_url('index.php/products/addToCart/'.$row->ID).'" class="btn btn-primary">Add to Cart</a></button></div>');
        } ?>
        <div class="valoraciones">
        <?php
        foreach ($puntuacion->result() as $row) {
            echo '<div class="val-grl"><h3>Valoracion general: ★' . round($row->Valoracion, 2) . '</h3></div>';
        }        
        if (empty($valoracion)) {
            foreach($resultado as $row){
            echo ('
            <div class="valorar">
        <form method="POST" action="' . base_url("index.php/Libro_controller/valorar/".$row->ID) . '" id="#form">
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
</form></div>');}
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
        <div class="comentacion">
        <?php
        foreach ($resultado as $row) {
            echo (
        '<div class="comentar">
            <form method="POST" action="' . base_url("index.php/Libro_controller/comentar/" . $row->ID) . '">
                <input type="text" name="comentario">
                <button type="submit">Comentar</button>
            </form>
        </div>');
        }
        ?>
        <?php foreach ($comentarios as $row) {
            echo '<div class="comentario"><img src="' . base_url("imgs/iconos/avatar.svg") . '">';
            echo '<p>' . $row->Nombre . '</p>';
            echo '<p>' . $row->Contenido . '</p>';
            echo '<p>' . $row->Fecha . '</p></div>';
        } ?>
        </div>
    </main>
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
</body>

</html>