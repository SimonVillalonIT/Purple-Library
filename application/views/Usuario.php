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

        .perfil {
            width: 30%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.41);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.41);
        }

        .Avatar {
            padding-top: 60px;
            border-radius: 100%;
            width: 150px;
            height: 150px;
            position: relative;
        }

        .file-select {
            position: relative;
            display: inline-block;
            transition: .3s;
        }

        .file-select::before {
            background-color: #6F1DB9;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            content: 'Cambiar avatar';
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            border-radius: 12px;
        }

        h1 {
            margin: 0;
        }

        .file-select input[type="file"] {
            opacity: 0;
            width: 200px;
            height: 32px;
            display: inline-block;
            cursor: pointer;
        }

        #submit {
            display: none;
        }

        .file-select:hover {
            transform: scale(1.1);
        }

        #Nombre {
            background: transparent;
            outline: transparent;
            border: none;
            font-size: 30px;
            color: white;
            text-align: center;
            width: m;
        }

        #pen {
            width: 20px;
            height: auto;
            cursor: pointer;
            transition: .3s;
        }

        #pen:hover {
            transform: scale(1.2);
        }

        #name-form {
            display: flex;
            align-items: center;
        }

        main {
            display: flex;
        }

        /* FORMULARIO DE CATEGORIAS */
        .btn-neon {
            position: relative;
            top: 30px;
            background-color: #6F1DB9;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 8px 20px;
            text-decoration: none;
            margin-top: 20px;
        }

        .btn-neon:hover {
            transform: scale(5);
        }

        .overlay {
            z-index: 99;
            background: rgba(0, 0, 0, 0.3);
            -webkit-backdrop-filter: blur(15px);
            backdrop-filter: blur(15px);
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            visibility: hidden;
        }

        .overlay h3 {
            text-shadow: 4px 2px #6f1db9;
        }

        .overlay.active {
            visibility: visible;
        }

        .popup {
            background: rgba(20, 20, 20, 0.5);
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
            border-radius: 6px;
            padding: 20px;
            text-align: center;
            width: 900px;
            opacity: 0;
            transition: .3s ease all;
            transform: scale(0.7);
        }

        .popup .btn-cerrar-popup {
            font-size: 16px;
            line-height: 16px;
            display: block;
            text-align: right;
            color: #bbbbbb;
            transition: 0.7 ease;
        }

        .popup .btn-cerrar-popup:hover {
            color: #000000;
            cursor: pointer
        }

        .popup.active {
            opacity: 1;
            transform: scale(1);
        }

        .popup a {
            color: #6F1DB9;
        }

        .popup h3 {
            margin: 12px;
            font-size: 40px;
            opacity: 0;
        }

        .popup h4 {
            color: #C4C4C4;
            text-decoration: none;
            margin-top: 20px;
            font-size: 20px;
            margin: 12px;
            opacity: 0;
            border-bottom: 1px solid #6f1db9;
            width: max-content;
            margin-right: auto;
            margin-left: auto;
        }

        .popup.active h3 {
            animation: entradaTitulo .7s ease .3s forwards;
        }

        .popup.active h4 {
            animation: entradaSubtitulo .7s ease .3s forwards;
        }

        .popup.active .categorias {
            animation: entradaInputs 1s ease 1s forwards;
        }

        .popup.active .btn-submit {
            opacity: 0;
            animation: entradaSubtitulo 1.5s ease 1.5s forwards;
        }

        @keyframes entradaTitulo {
            from {
                transform: translateY(-25px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes entradaSubtitulo {
            from {
                transform: translateY(25px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes entradaCategorias {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .categorias {
            display: flex;
            justify-content: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            width: 90%;
            justify-content: center;
            align-items: center;
        }

        .item-registro {
            cursor: pointer;
            position: relative;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            flex-grow: 0;
            max-width: 100%;
            margin: 10px;
            width: 150px;
            height: 150px;
            border: 2px solid white;
            transition: 0.5s;

        }

        .item-registro:hover {
            border: 2px solid #6F1DB9;
        }

        .seleccionado {
            border: 2px solid #6f1db9;
            transform: scale(1.05);
        }

        .seleccionado .capa {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .capa {
            display: none;
            transition: 1.0s;
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(0deg,
                    rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7))
        }

        .capa h1 {
            font-size: 30px;
            text-shadow: 4px 2px #6f1db9;
        }

        .item {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .formcontainer span {
            margin: 0;
            height: 30px;
        }

        span p {
            margin: 0;
            color: red;
        }

        .item-registro:hover>.capa {
            transition: 0.5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-submit {
            margin-top: 12px;
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            letter-spacing: 4px;
            font-size: 24px;
            background-color: transparent;
            color: white;
            text-decoration: none;
            overflow: hidden;
            transition: 0.2s;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            height: 60px;

        }

        .btn-submit:hover {
            background: #6F1DB9;
            box-shadow: 0 0 10px #6F1DB9, 0 0 40px #6F1DB9, 0 0 80px #6F1DB9;
        }

        .popup.active a:hover {
            text-shadow: 1px 1px 2px #6F1DB9;
        }

        .valorcategoria {
            display: none;
        }

        .derecha {
            width: 70%;
            padding-top: 50px;
            height: 86.5vh;
        }

        .derecha h1 {
            width: fit-content;
            margin-left: 40px;
            border-bottom: 2px solid #6F1DB9;
        }

        .libro {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .libro:hover>img {
            border: 2px solid #6F1DB9;
        }

        .glider-contain {
            margin-top: 10px;
            width: 90%;
        }

        .glider-contain button:hover {
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .glider img {
            border-radius: 6px;
            height: 220px;
            width: 155px;
            justify-content: center;
            border: 2px solid white;
            transition: .3s;
        }

        .Valoracion {
            width: 82.5%;
            height: auto;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
        }

        .cartel {
            display: none;
            transition: 0.5s;
        }

        .cartel h3 {
            margin-top: 3rem;
            font-size: 18px;
        }

        .cartel p {
            font-size: 14px;
        }

        .libro:hover>.cartel {
            width: 155px;
            border-radius: 6px;
            height: 220px;
            top: 2px;
            background: rgba(0, 0, 0, 0.7);
            -webkit-backdrop-filter: blur(3px);
            backdrop-filter: blur(3px);
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-align: center;
        }

        .botonCategorias {
            transition: .3s;
        }

        .botonCategorias:hover {
            transform: scale(1.1);
        }

        #cambiarEmail {
            margin-top: 35px;
        }
        .contenido{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;   
        }
        .contenido input{
            margin-top: 20px;
            border: none;
            border-bottom: 1px solid #6F1DB9;
            font-size: 16px;
            width: 335px;
            height: 40px;
            background:rgba(23, 23, 23, .6);
            outline: none;
            color: white;
            border-radius: 12px;

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
            <img id="avatar" class="Avatar" src="<?php echo base_url("index.php/Usuario/mostrarImagen/" . $user[0]->ID) ?>">
            <form id="name-form" action="<?php echo base_url("index.php/Usuario/cambiarNombreUsuario") ?>" method="post"><input id="Nombre" value="<?php echo $user[0]->Nombre ?>" name="Nombre"><img id="pen" src="<?php echo base_url("imgs/iconos/load.png") ?>" alt="" srcset=""></form>
            <form action="<?php echo base_url("index.php/Usuario/upload") ?>" method="post" enctype="multipart/form-data">
                <div class="file-select" id="src-file1"><input id="file" name="image" accept="image/*" type="file" aria-label="Avatar"></div>
                <input id="submit" type="submit" name="submit" value="UPLOAD" />
            </form>
            <form method="post" action="<?php echo base_url("index.php/Usuario/modificarCategorias/" . $user[0]->ID) ?>">
                <div class="botonCategorias"><a href="#" id="btn-continuar" class="btn-neon">Cambiar categorías</a></div>

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
            <form id="cambiarEmail" method="post" action="<?php echo base_url("index.php/Usuario/cambiarEmail/" . $user[0]->ID) ?>">
                <div class="botonCategorias"><a href="#" id="continuarEmail" class="btn-neon">Cambiar email</a></div>
                <div class="overlay" id="overlayEmail">
                    <div class="popup" id="popUpEmail">
                        <i id="btn-cerrar-popupEmail" class="btn-cerrar-popup fas fa-times"></i>
                        <h3>Cambiar Email</h3>
                        <div class="contenido">
                            <input type="email" name="" id="" placeholder="Anterior correo electrónico">
                            <input type="email" name="" id="" placeholder="Nuevo correo electrónico">
                        </div>
                        <input type="submit" class="btn-submit" name="Confirmar" value="Confirmar">

                    </div>
                </div>
            </form>
        </div>
        <div class="derecha">
            <h1>Libros Comentados</h1>
            <div class="glider-contain">
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
            <h1>Libros Valorados</h1>
            <div class="glider-contain">
                <div class="glider" id="glider">
                    <?php foreach ($valoraciones as $row) {
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
</body>

</html>