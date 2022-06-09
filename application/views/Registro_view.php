<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        body{
            font-family: 'Century Gothic';
			color: white;
			margin: 0;
            background-color: #171717;
        }
        #particles-js{
            height: 100vh;
            width: 100%;
            position: fixed;
            z-index: -1;
        }
        .main-container{
            position: relative;
            z-index: 99;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .main-container h1{
         margin-left: auto;
         margin-right: auto;   
        }
        .formcontainer{
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            width: max-content;
        }
        .parrafo{
            align-items: center;
            display: flex;
            flex-wrap: nowrap;
        }
        .par-item{
            align-items: flex-start;
            display: flex;
            flex-direction: column;
            margin-right: 30px;
        }
        input{
            border: none;
			border-bottom: 1px solid #6F1DB9;
			font-size: 16px;
            width: 335px;
			height: 40px;
			margin-bottom: 40px;
			background: #171717;
			outline: none;
			color: white;
            border-radius: 12px;
        }
        .abajo{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: max-content;
        }
        .abajo input{
            width: 710px;
        }

        .btn-neon{
            position: relative;
            display: inline-block;
            padding: 15px 30px;
            color: #fff;
            letter-spacing: 4px;
            font-size: 24px;
            text-decoration: none;
            overflow: hidden;
            transition: 0.2;
        }
        .btn-neon:hover{
            background: #6F1DB9;
            cursor: pointer;
            box-shadow: 0 0 10px #6F1DB9, 0 0 40px #6F1DB9, 0 0 80px #6F1DB9;
            transition-delay: 1s;
            transition: 5s;
        }
        .btn-neon span{
            position: absolute;
            display: block;
        }
        #span1{
            top: 0%;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg,transparent,#6F1DB9);
        }
        .btn-neon:hover #span1{
            left:100%;
            transition: 1s;
        }
        #span3{
            bottom: 0%;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg,transparent,#6F1DB9);
        }
        .btn-neon:hover #span3{
            right: 100%;
            transition: 1s;
            transition-delay: 0.5s;
        }
        #span2{
            top: -100%;
            right: -0%;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg,transparent,#6F1DB9);
        }
        .btn-neon:hover #span2{
            top: 100%;
            transition: 1s;
            transition-delay: 0.25s;
        }
        #span4{
            bottom: -100%;
            left: -0%;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg,transparent,#6F1DB9);
        }
        .btn-neon:hover #span4{
            bottom: 100%;
            transition: 1s;
            transition-delay: 0.75s;
        }
        .overlay{
			background: rgba(0, 0, 0, 0.3);
			-webkit-backdrop-filter:blur(15px);
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
        .overlay h3{
            text-shadow: 4px 2px #6f1db9;
        }
		.overlay.active{
			visibility: visible;
		}
		.popup{
			background: rgba(20,20,20,0.5);
			box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
			border-radius: 6px;
			padding: 20px;
			text-align: center;
			width: 900px;
			opacity: 0;
			transition: .3s ease all;
			transform: scale(0.7);
		}
		.popup.active{
			opacity: 1;
			transform: scale(1);
		}
		.popup a{
			color: #6F1DB9;
		}
		.popup h3{
			margin: 12px;
			font-size: 40px;
			opacity: 0;
		}
		.popup h4{
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
		.popup.active h3{animation: entradaTitulo .7s ease .3s forwards;}
		.popup.active h4{animation: entradaSubtitulo .7s ease .3s forwards;}
		.popup.active .categorias{animation: entradaInputs 1s ease 1s forwards;}
		.popup.active .btn-submit{opacity: 0; animation: entradaSubtitulo 1.5s ease 1.5s forwards;}
		@keyframes entradaTitulo{
			from{
				transform: translateY(-25px);
				opacity: 0;
			}
			to{
				transform: translateY(0);
				opacity: 1;
			}
		}
		@keyframes entradaSubtitulo{
			from{
				transform: translateY(25px);
				opacity: 0;
			}
			to{
				transform: translateY(0);
				opacity: 1;
			}
		}
		@keyframes entradaCategorias{
			from{
				opacity: 0;
			}
			to{
				opacity: 1;
			}
		}
        .categorias{
            display: flex;
            flex-wrap: wrap;
        }
        .item-registro{
            cursor: pointer;
            position: relative;
            display: flex;
			flex-direction: column;
			flex-shrink: 0;
			flex-grow: 0;
			max-width: 100%;
            margin: 10px;
            width: 200px;
            height: 200px;
            border: 2px solid white;
            transition: 0.5s;

        }
        .item-registro:hover{
            border: 2px solid #6F1DB9;
        }
        .seleccionado{
            border:2px solid #6f1db9;
            transform: scale(1.05);
        }
        .seleccionado .capa{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .capa{
            display: none;
            transition: 1.0s;
			position: absolute;
			width: 100%;
			height: 100%;
			background: linear-gradient(
				0deg,
				rgba(0,0,0,0.7),
				rgba(0,0,0,0.7)
			)
		}
        .capa h1{
            text-shadow: 4px 2px #6f1db9;
        }
        .item-registro:hover > .capa{
            transition: 0.5;
            display: flex;
            justify-content: center;
            align-items: center;
		}
		.btn-submit{
			margin-top: 12px;
			position:relative;
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
		.btn-submit:hover{
			background: #6F1DB9;
			box-shadow: 0 0 10px #6F1DB9, 0 0 40px #6F1DB9, 0 0 80px #6F1DB9;
		}

		.popup.active a:hover{
			text-shadow: 1px 1px 2px #6F1DB9;
		}
        

    </style>
</head>
<body>
        <div id="particles-js">
        </div>
        <div class="main-container">
            <h1>Registro de usuario</h1>
            <?php if ($this->session->flashdata('message')){
                echo '
                    <div>
                        '.$this->session->flashdata('message').'
                    <div>
                ';
            } ?>
            <form action="<?php echo base_url('index.php/Registrar_controller/validacion')?>" method="post">
                <div class="formcontainer">
                    <div class="parrafo">
                        <div class="par-item">
                            <label for="Nombre">Nombre</label>
                            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre" value="<?php echo set_value('Nombre'); ?>">
                            <span><?php echo form_error('Nombre'); ?></span>
                        </div>
                        <div class="par-item">
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="Apellido" id="Apellido" placeholder="Apellido" value="<?php echo set_value('Apellido'); ?>">    
                            <span><?php echo form_error('Apellido'); ?></span>
                        </div>
                    </div>
                    <div class="abajo">
                        <div class="abajo-item">
                            <div class="item">
                                <label for="Email">Correo Electrónico</label>
                            </div>
                            <div class="item">
                                <input type="email" name="Email" id="Email" placeholder="Correo Electronico" value="<?php echo set_value('Email'); ?>" >
                                <span><?php echo form_error('Email'); ?></span>
                            </div>
                        </div>    
                        <div class="abajo-item">
                            <div class="item">
                                <label for="Contraseña">Contraseña</label>
                            </div>
                            <div class="item">
                                <input type="password" name="Contraseña" id="Contraseña" placeholder="Contraseña" value="<?php echo set_value('Contraseña'); ?>">
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
				            <h3>Categorías</h3>
				            <h4>Descubre libros estre nuestras categorías</h4>
					        <div class="categorias">
                                <div class="item-registro" id="cnc-fic">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/ciencia_ficcion.jpg">
                                    <div class="capa"><h1>Ciencia Ficción</h1></div>
                                </div>
                                <div class="item-registro" id="fant">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/fantasia.jpg">
                                    <div class="capa"><h1>Fantasia</h1></div>
                                </div>
                                <div class="item-registro" id="rom">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/romance.jpg">
                                    <div class="capa"><h1>Romance</h1></div>
                                </div>
                                <div class="item-registro" id="com">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/humor.jpg">
                                    <div class="capa"><h1>Humor</h1></div>
                                </div>
                                <div class="item-registro" id="poli">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/policial.jpg">
                                    <div class="capa"><h1>Policial</h1></div>
                                </div>
                                <div class="item-registro" id="hor">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/horror.jpg">
                                    <div class="capa"><h1>Horror</h1></div>
                                </div>
                                <div class="item-registro" id="mus">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/musica.jpg">
                                    <div class="capa"><h1>Musica</h1></div>
                                </div>
                                <div class="item-registro" id="mist">
                                    <img class="opcion" src="<?php echo base_url();?>imgs/categorias/misterio.jpg">
                                    <div class="capa"><h1>Misterio</h1></div>  
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
</body>
</html>