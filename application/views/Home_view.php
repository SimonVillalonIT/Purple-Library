<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('scripts/Gliderjs_master/glider.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.themes.css"); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url("css/Home_view.css") ?>">
    <title>Principal</title>
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

        <div class="recomendaciones">
            <h1>
                Recomendaciones
            </h1>
            <div class="glider-contain">
                <div class="glider">
                    <?php foreach ($recomendacion as $row) {
                        $libro = $row->IDLibro;
                        echo ("<div onclick='redirigir($row->IDLibro)' class=" . "libro" . "><img src=" . base_url("imgs/libros/$row->img") . ">
                    <div class='cartel'><h3>$row->Titulo</h3><div class='abajo'><p>$row->Autor</p>");
                        foreach ($valoracion as $line) {
                            if ($line->IDLibro == $libro) {
                                echo "<p>★" . round($line->Puntaje, 2) . "</p>";
                            }
                        }
                        echo "</div></div></div>";
                    }
                    ?>
                </div>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
        </div>

        <div class="Valoracion">
            <h1>Mejores valorados</h1>
            <div class="glider-contain">
                <div class="glider" id="glider">
                    <?php foreach ($mejores as $row) {
                        echo ("<div onclick='redirigir($row->IDLibro)' class=" . "libro" . "><img src=" . base_url("imgs/libros/$row->img") . ">
                            <div class='cartel'><h3>$row->Titulo</h3><div class='abajo'><p>$row->Autor</p>
                            <p>★" . round($row->Puntaje, 2) . "</p>
                            </div></div></div>");
                    }
                    ?>
                </div>
                <button aria-label="Previous" class="glider-prev" id="prev">«</button>
                <button aria-label="Next" class="glider-next" id="next">»</button>
                <div role="tablist" class="dots" id="dots"></div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js">
    </script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"); ?>"></script>
    <script src="<?php echo base_url("scripts/spinner.js") ?>"></script>
    <script>
        const btn_logOut = document.getElementById("LogOut");
        const btn_user = document.getElementById("User");
        const btn_home = document.getElementById("Home");
        btn_logOut.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/private_area/logout'); ?>";
        })
        btn_home.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/private_area'); ?>";
        });
        btn_user.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/Usuario') ?>";
        });

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
    <script src=<?php echo base_url("scripts/Gliderjs_master/glider.js") ?>></script>
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
        new Glider(document.querySelector('#glider'), {
            slidesToShow: 5,
            slidesToScroll: 1,
            draggable: true,
            dots: '#dots',
            arrows: {
                prev: '#prev',
                next: '#next'
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