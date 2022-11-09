<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <title><?php echo $user[0]->Nombre; ?></title>
    <script src="https://kit.fontawesome.com/f33a357731.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url('scripts/Gliderjs_master/glider.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/Usuario_view.css') ?>">
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
            <li><a href="<?php echo base_url('index.php/Usuario') ?>"><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></a></li>
            <li><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png"); ?>"></li>
        </div>
    </header>
    <nav class="animate__animated" id="nav">
        <h3>Categorias</h3>
        <ul>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/3") ?>">Romance</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/2") ?>">Fantasia</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/1") ?>">Ciencia Ficción</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/5") ?>">No Ficción</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/8") ?>">Misterio</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/4") ?>">Humor</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/7") ?>">Arte</a></li>
            <li><a href="<?php echo base_url("index.php/Buscador_controller/buscar_categoria/6") ?>">Horror</a></li>
        </ul>
    </nav>
    <main>
        <div class="perfil">
            <?php if ($this->session->flashdata('message')) {
                echo $this->session->flashdata('message');
            } ?>
            <span class="form-error"><?php echo form_error('ContraseñaNueva'); ?><?php echo form_error('nuevoCorreo'); ?></span>
            <img id="avatar" class="Avatar" src="<?php echo base_url("index.php/Usuario/mostrarImagen/" . $user[0]->ID) ?>">
            <form id="name-form" action="<?php echo base_url("index.php/Usuario/cambiarNombreUsuario") ?>" method="post"><input id="Nombre" value="<?php echo $user[0]->Nombre ?>" name="Nombre"><img id="pen" src="<?php echo base_url("imgs/iconos/load.png") ?>" alt="" srcset=""></form>
            <div class="botones">
                <form action="<?php echo base_url("index.php/Usuario/upload") ?>" method="post" enctype="multipart/form-data">
                    <div class="file-select" id="src-file1"><input id="file" name="image" accept="image/*" type="file" aria-label="Avatar"></div>
                    <input id="submit" type="submit" name="submit" value="UPLOAD" />
                </form>
                <div class="botonCategorias"><a href="#" id="btn-continuar" class="btn-neon">Cambiar categorías</a></div>
                <div class="botonCategorias"><a href="#" id="continuarEmail" class="btn-neon">Cambiar email</a></div>
                <div class="botonCategorias"><a href="#" id="continuarPassword" class="btn-neon">Cambiar contraseña</a></div>
            </div>
        </div>
        <div class="derecha">
            <h1>Libros Comentados</h1>
            <div class="glider-contain">
                <?php if (empty($comentario)) {
                    echo "<h3 class='Error'>No has comentado ningún libro aún...</h3>";
                } ?>
                <div class="glider">
                    <?php foreach ($comentario as $row) {
                        $libro = $row->ID;
                        echo ("<div onclick='redirigir($row->ID)' class=" . "libro" . "><img src=" . base_url("imgs/libros/$row->img") . ">
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
            <h1>Libros Favoritos</h1>
            <div class="glider-contain">
                <?php if (empty($valoraciones)) {
                    echo "<h3 class='Error'>No has votado ningún libro aún...</h3>";
                } ?>
                <div class="glider" id="glider">
                    <?php
                    foreach ($valoraciones as $row) {
                        $libro = $row->ID;
                        echo ("<div onclick='redirigir($row->ID)' class=" . "libro" . "><img src=" . base_url("imgs/libros/$row->img") . ">
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
                <button aria-label="Previous" class="glider-prev" id="glider-prev">«</button>
                <button aria-label="Next" class="glider-next" id="glider-next">»</button>
                <div role="tablist" class="dots" id="dots"></div>
            </div>
        </div>
        <form id="cambiarEmail" method="post" action="<?php echo base_url("index.php/Usuario/cambiarEmail/" . $user[0]->ID) ?>">
            <div class="overlay" id="overlayEmail">
                <div class="popup" id="popUpEmail">
                    <i id="btn-cerrar-popupEmail" class="btn-cerrar-popup fas fa-times"></i>
                    <h3>Cambiar Email</h3>
                    <div class="contenido">
                        <input type="email" name="anteriorCorreo" id="anteriorCorreo" placeholder="Anterior correo electrónico">
                        <input type="email" name="nuevoCorreo" id="nuevoCorreo" placeholder="Nuevo correo electrónico">
                    </div>
                    <input type="submit" class="btn-submit" name="Confirmar" value="Confirmar">

                </div>
            </div>
        </form>
        <form method="post" action="<?php echo base_url("index.php/Usuario/modificarCategorias/" . $user[0]->ID) ?>">
            <div class="overlay" id="overlay">
                <div class="popup" id="popUp">
                    <i id="btn-cerrar-popup" class="btn-cerrar-popup fas fa-times"></i>
                    <h3>Cambiar categorias</h3>
                    <div class="categorias">
                        <div class="container">
                            <?php
                            if (in_array(1, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="1" id="CNC-FIC" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="1" id="CNC-FIC" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(2, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="2" id="FANT" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="2" id="FANT" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(3, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="3" id="ROM" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="3" id="ROM" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(4, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="4" id="COM" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="4" id="COM" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(5, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="5" id="NOF" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="5" id="NOF" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(6, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="6" id="HOR" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="6" id="HOR" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(7, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="7" id="ARTE" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="7" id="ARTE" class="valorcategoria">');
                            } ?>
                            <?php
                            if (in_array(8, $categorias)) {
                                echo ('<input type="checkbox" name="checkbox[]" value="8" id="MIST" class="valorcategoria" checked>');
                            } else {
                                echo ('<input type="checkbox" name="checkbox[]" value="8" id="MIST" class="valorcategoria">');
                            } ?>

                            <?php if (in_array(1, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="cnc-fic">
                                <img class="opcion" src="' . base_url("imgs/categorias/ciencia_ficcion.jpg") . '">
                                <div class="capa">
                                    <h1>Ciencia Ficción</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="cnc-fic">
                                <img class="opcion" src="' . base_url("imgs/categorias/ciencia_ficcion.jpg") . '">
                                <div class="capa">
                                    <h1>Ciencia Ficción</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(2, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="fant">
                                <img class="opcion" src="' . base_url("imgs/categorias/fantasia.jpg") . '">
                                <div class="capa">
                                    <h1>Fantasia</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="fant">
                                <img class="opcion" src="' . base_url("imgs/categorias/fantasia.jpg") . '">
                                <div class="capa">
                                    <h1>Fantasia</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(3, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="rom">
                                <img class="opcion" src="' . base_url("imgs/categorias/romance.jpg") . '">
                                <div class="capa">
                                    <h1>Romance</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="rom">
                                <img class="opcion" src="' . base_url("imgs/categorias/romance.jpg") . '">
                                <div class="capa">
                                    <h1>Romance</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(4, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="com">
                                <img class="opcion" src="' . base_url("imgs/categorias/humor.jpg") . '">
                                <div class="capa">
                                    <h1>Humor</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="com">
                                <img class="opcion" src="' . base_url("imgs/categorias/humor.jpg") . '">
                                <div class="capa">
                                    <h1>Humor</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(5, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="nof">
                                <img class="opcion" src="' . base_url("imgs/categorias/no_ficcion.jpg") . '">
                                <div class="capa">
                                    <h1>No Ficción</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="nof">
                                <img class="opcion" src="' . base_url("imgs/categorias/no_ficcion.jpg") . '">
                                <div class="capa">
                                    <h1>No Ficción</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(6, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="hor">
                                <img class="opcion" src="' . base_url("imgs/categorias/horror.jpg") . '">
                                <div class="capa">
                                    <h1>Horror</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="hor">
                                <img class="opcion" src="' . base_url("imgs/categorias/horror.jpg") . '">
                                <div class="capa">
                                    <h1>Horror</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(7, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="arte">
                                <img class="opcion" src="' . base_url("imgs/categorias/musica.jpg") . '">
                                <div class="capa">
                                    <h1>Arte</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="arte">
                                <img class="opcion" src="' . base_url("imgs/categorias/musica.jpg") . '">
                                <div class="capa">
                                    <h1>Arte</h1>
                                </div>
                                </div>');
                            } ?>
                            <?php if (in_array(8, $categorias)) {
                                echo ('
                                <div class="item-registro seleccionado" id="mist">
                                <img class="opcion" src="' . base_url("imgs/categorias/misterio.jpg") . '">
                                <div class="capa">
                                    <h1>Misterio</h1>
                                </div>
                                </div>');
                            } else {
                                echo ('
                                <div class="item-registro" id="mist">
                                <img class="opcion" src="' . base_url("imgs/categorias/misterio.jpg") . '">
                                <div class="capa">
                                    <h1>Misterio</h1>
                                </div>
                                </div>');
                            } ?>

                        </div>
                    </div>

                    <input type="submit" class="btn-submit" name="Confirmar" value="Confirmar">

                </div>
            </div>
        </form>
        <form id="cambiarPassword" method="post" action="<?php echo base_url("index.php/Usuario/cambiarContrasena/" . $user[0]->ID) ?>">
            <div class="overlay" id="overlayPassword">
                <div class="popup" id="popUpPassword">
                    <i id="btn-cerrar-popupPassword" class="btn-cerrar-popup fas fa-times"></i>
                    <h3>Cambiar contraseña</h3>
                    <div class="contenido">
                        <input type="password" name="AContraseña" id="Acontraseña" placeholder="Anterior contraseña">
                        <input type="password" name="ContraseñaNueva" id="ContraseñaNueva" placeholder="Nueva contraseña">
                    </div>
                    <input type="submit" class="btn-submit" name="Confirmar" value="Confirmar">
                </div>
            </div>
        </form>
    </main>

    <script src="<?php echo base_url("scripts/registro.js") ?>"></script>
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

        document.getElementById("file").onchange = function() {
            document.getElementById("submit").click();
        };

        document.getElementById("pen").onclick = function() {
            document.getElementById("name-form").submit();
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
        const barra = document.getElementById("barra");
        const nav = document.getElementById("nav");

        barra.addEventListener("click", () => {
            nav.classList.toggle("verse");
            nav.classList.toggle("animate__fadeInLeft")
        })
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
        window.addEventListener('load', function() {
            new Glider(document.querySelector('#glider'), {
                slidesToShow: 5,
                slidesToScroll: 5,
                draggable: true,
                dots: '#dots',
                arrows: {
                    prev: '#glider-prev',
                    next: '#glider-next'
                }
            });
        })
    </script>
    <script>
        let btnContinuarEmail = document.getElementById("continuarEmail");
        let overlayEmail = document.getElementById("overlayEmail");
        let popUpEmail = document.getElementById("popUpEmail");
        let btnCerrarPopUpEmail = document.getElementById("btn-cerrar-popupEmail")

        btnContinuarEmail.addEventListener("click", function() {
            overlayEmail.classList.add("active");
            popUpEmail.classList.add("active");
        })
        btnCerrarPopUpEmail.addEventListener("click", function() {
            overlayEmail.classList.remove("active");
            popUpEmail.classList.add("active")
        })
    </script>
    <script>
        let btnContinuarPassword = document.getElementById("continuarPassword");
        let overlayPassword = document.getElementById("overlayPassword");
        let popUpPassword = document.getElementById("popUpPassword");
        let btnCerrarPopUpPassword = document.getElementById("btn-cerrar-popupPassword")

        btnContinuarPassword.addEventListener("click", function() {
            overlayPassword.classList.add("active");
            popUpPassword.classList.add("active");
        })
        btnCerrarPopUpPassword.addEventListener("click", function() {
            overlayPassword.classList.remove("active");
            popUpPassword.classList.add("active")
        })
    </script>
    <script src="<?php echo base_url("scripts/spinner.js") ?>"></script>
</body>

</html>