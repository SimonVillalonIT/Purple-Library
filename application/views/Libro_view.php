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
    <link rel="stylesheet" href="<?php echo base_url("css/Libro_view.css") ?>">
    <title><?php echo $resultado[0]->Titulo; ?></title>
</head>

<body class="oculto">
    <div class="centrado" id="onload">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
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
            <li><a href="<?php echo base_url('index.php/Usuario') ?>"><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></a></li>
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
                echo '<div class="comentario"><div class="referencia"><img src="' . base_url("index.php/Usuario/mostrarImagen/" . $row->IDUsuario) . '">';
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
    <script src="<?php echo base_url("scripts/spinner.js") ?>"></script>
</body>

</html>