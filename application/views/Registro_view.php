<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f33a357731.js" crossorigin="anonymous"></script>
    <title>Registro</title>
    <link rel="stylesheet" href="<?php echo base_url("css/Registro_view.css") ?>">
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
    <div id="particles-js">
    </div>
    <div class="main-container">
        <h1>Registro de usuario</h1>
        <?php if ($this->session->flashdata('message')) {
            echo '
                    <div>
                        ' . $this->session->flashdata('message') . '
                    <div>
                ';
        } ?>
        <form action="<?php echo base_url('index.php/Registrar_controller/validacion') ?>" method="post">
            <div class="formcontainer">
                <div class="abajo">
                    <div class="abajo-item">
                        <div class="item">
                            <label for="Nombre">Nombre de usuario</label>
                            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre de Usuario" value="<?php echo set_value('Nombre'); ?>">
                            <span><?php echo form_error('Nombre'); ?></span>
                        </div>
                    </div>

                    <div class="abajo-item">
                        <div class="item">
                            <label for="Email">Correo Electrónico</label>
                            <input type="text" name="Email" id="Email" placeholder="Correo Electronico" value="<?php echo set_value('Email'); ?>">
                            <span><?php echo form_error('Email'); ?></span>
                        </div>
                    </div>
                    <div class="abajo-item">
                        <div class="item">
                            <label for="Contraseña">Contraseña</label>
                            <input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña" value="<?php echo set_value('Contraseña'); ?>">
                            <span><?php echo form_error('Contraseña'); ?></span>
                        </div>
                        <div class="item">
                            <label for="Re-contraseña">Confirme su contraseña</label>
                            <input type="password" name="Re-contraseña" id="Re-contraseña" placeholder="Reingrese la contraseña" value="<?php echo set_value('Re-contraseña'); ?>">
                            <span><?php echo form_error('Re-contraseña'); ?></span>
                        </div>
                    </div>
                    <div class="abajo-item">
                        <div id="btn-continuar" class="item">
                            <a href="#" class="btn-neon">
                                <span id="span1"></span>
                                <span id="span2"></span>
                                <span id="span3"></span>
                                <span id="span4"></span>
                                CONTINUAR
                            </a>
                        </div>
                    </div>
                </div>
                <div class="overlay" id="overlay">
                    <div class="popup" id="popUp">
                        <i id="btn-cerrar-popup" class="btn-cerrar-popup fas fa-times"></i>
                        <h3>Categorías</h3>
                        <h4>Descubre libros entre nuestras categorías</h4>
                        <div class="categorias">
                            <input type="checkbox" name="checkbox[]" value="1" id="CNC-FIC" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="2" id="FANT" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="3" id="ROM" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="4" id="COM" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="5" id="NOF" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="6" id="HOR" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="7" id="ARTE" class="valorcategoria">
                            <input type="checkbox" name="checkbox[]" value="8" id="MIST" class="valorcategoria">
                            <div class="item-registro" id="cnc-fic">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/ciencia_ficcion.jpg">
                                <div class="capa">
                                    <h1>Ciencia Ficción</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="fant">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/fantasia.jpg">
                                <div class="capa">
                                    <h1>Fantasia</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="rom">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/romance.jpg">
                                <div class="capa">
                                    <h1>Romance</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="com">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/humor.jpg">
                                <div class="capa">
                                    <h1>Humor</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="nof">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/no_ficcion.jpg">
                                <div class="capa">
                                    <h1>No Ficción</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="hor">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/horror.jpg">
                                <div class="capa">
                                    <h1>Horror</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="arte">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/musica.jpg">
                                <div class="capa">
                                    <h1>Música</h1>
                                </div>
                            </div>
                            <div class="item-registro" id="mist">
                                <img class="opcion" src="<?php echo base_url(); ?>imgs/categorias/misterio.jpg">
                                <div class="capa">
                                    <h1>Misterio</h1>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn-submit" name="Confirmar" value="Confirmar">
                    </div>
                </div>


            </div>
        </form>
    </div>




    <script src="<?php echo base_url("scripts/particles.min.js") ?>"></script>
    <script src="<?php echo base_url("scripts/particles-config.js") ?>"></script>
    <script src="<?php echo base_url("scripts/registro.js") ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?php echo base_url("scripts/spinner.js") ?>"></script>
</body>

</html>