<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <title><?php echo $user[0]->Nombre; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.css"); ?>">
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
            position: absolute;
            top: 30px;
            right: 370px;
            width: 20px;
            height: 20px;
            transition: .2s;
            filter: invert(84%) sepia(11%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%);
        }

        #buscar:hover {
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
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
            <li><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png"); ?>"></li>
            <li><a href="<?php echo base_url("index.php/cart") ?>"><img id="Cart" src="<?php echo base_url("imgs/iconos/Cart.png"); ?>"></a></li>
            <li><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></li>
            <li><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png"); ?>"></li>
        </div>
    </header>
    <script>
        const btn_logOut = document.getElementById("LogOut");
        const btn_user = document.getElementById("User");
        const btn_home = document.getElementById("Home");
        const tarjeta = document.querySelector(".libro");
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

</body>

</html>