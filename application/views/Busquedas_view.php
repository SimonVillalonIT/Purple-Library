<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.min.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.themes.min.css"); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style type="text/css">
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
            padding-top: 80px;
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


        .error .texto {
            width: 97.5%;
            background-color: red;
            margin: 0;
            padding: 15px;
        }

        .error h2 {
            margin: 0;
        }

        .error {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            color: white;
        }

        .tarjeta {
            display: flex;
            width: 150px;
            flex-direction: column;
            margin: 0;
            padding: 5px;
            border-radius: 6px;
            margin: 10px;
            border: 1px solid white;
            background-color: rgba(111, 29, 185, 0.3);
            text-align: center;
            justify-content: space-between;
            transition: .3s;
        }

        .tarjeta:hover {
            border: 1px solid #6F1DB9;
            background-color: rgba(111, 29, 185, 0.8);
            transform: scale(1.05);
            box-shadow: 0px 0px 50px #6F1DB9;
        }

        .tarjeta img {
            width: 150px;
            height: 226px;
        }

        .tarjeta p {
            margin: 0;
            margin-bottom: 5px;
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
            <li><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png"); ?>"></li>
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
        if ($resultado == "error") {
            echo "<div class='error'><div class='texto'><h2>No se encontraron resultados para su busqueda</h2></div>
    <img src='" . base_url("imgs/iconos/piffle-error-unscreen.gif") . "'alt='Gift de error'></div>";
        } else {
            echo '<div class="body">';
            if (empty($resultado)) {
                echo "<div class='error'><div class='texto'><h2>No se encontraron resultados para su busqueda</h2></div>
    <img src='" . base_url("imgs/iconos/piffle-error-unscreen.gif") . "'alt='Gift de error'></div>";
            } else {
                foreach ($resultado as $row) {
                    echo ('<div class="tarjeta" onclick="redirigir(' . $row->ID . ')"><img src="' . base_url("imgs/libros/$row->img") . '"><div class="info"><p>' .
                        $row->Titulo . '</p><p>' . $row->Autor . '</p></div></div>');
                }
                echo '</div>';
            }
        }
        ?>
    </main>
    <script>
        const btn_logOut = document.getElementById("LogOut");
        const btn_user = document.getElementById("User");
        const btn_home = document.getElementById("Home");
        btn_home.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/private_area'); ?>";
        });
        btn_logOut.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/private_area/logout'); ?>"
        })
        btn_user.addEventListener('click', () => {
            window.location.href = "";
        });

        function redirigir(id) {
            window.location.href = "<?php echo base_url("index.php/Libro_controller/cargarpagina/"); ?>" + id
        };
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
        const barra = document.getElementById("barra");
        const nav = document.getElementById("nav");

        barra.addEventListener("click", () => {
            nav.classList.toggle("verse");
            nav.classList.toggle("animate__fadeInLeft")
        })
    </script>
</body>

</html>