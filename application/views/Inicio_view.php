<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f33a357731.js" crossorigin="anonymous"></script>
	<style type="text/css">
		body{
			font-family: 'Century Gothic';
			color: white;
			background: radial-gradient(circle, rgba(111,29,185,1) 0%, rgba(82,26,133,1) 33%, rgba(66,24,104,1) 49%, rgba(33,21,43,1) 82%, rgba(20,20,20,1) 100%);
			margin: 0;
		}
		header{
			border-bottom: 1px solid #fff;
			background: #171717
		}
		.contenedor{
			display: flex;
			justify-content: space-between;
		}
		.contenedor h1{
			margin-left: 40px;
		}
		.registro{
			margin: 10px 30px;
		}
		.registro img{
			cursor: pointer;
			margin-top: 12px;
			width: 35px;
			transition: .2s;
		}	
		.registro img:hover{
			filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136,33,226,1));
		}
		/* Slider*/
		.slider{
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 5px;
			
		}
		.slider img{
			max-width: 100%;
		}
		.container-all{
			position: relative;
			max-width: 1000px;
			width: 100%;
			border-radius: 6px;	
			overflow: hidden;

		}
		.slide{
			display: flex;
			transform: translate3d(0, 0, 0);
			transition: all 500ms;
			animation-name: autoplay;
			animation-duration: 15s;
			animation-direction: alternate;
			animation-fill-mode: forwards;
			animation-iteration-count: infinite;
		}
		.item-slide{
			position:relative;
			display: flex;
			flex-direction: column;
			flex-shrink: 0;
			flex-grow: 0;
			max-width: 100%;
		}
		.item-slide img{
			width: 1000px;
			height: 562px;
		}
		.item-slide .capa{
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
			font-size: 80px;
			text-align: center;
			line-height: 440px;
		}
		#id1{
			text-shadow: 4px 2px #68D1E5;
		}
		#id2{
			text-shadow: 3px 2px #FFD544
		}
		#id3{
			text-shadow: 3px 2px black
		}
		#id4{
			text-shadow: 3px 2px #294F4F
		}
		#id5{
			text-shadow: 3px 2px #C91916
		}
		#id6{
			text-shadow: 3px 2px gray
		}
		.pagination{
			position: absolute;
			bottom: 20px;
			left: 0;
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
			width: 100%;
		}
		.pagination-item{
			display: flex;
			flex-direction: column;
			align-items: center;
			border: 2px solid white;
			width: 16px;
			height: 16px;
			border-radius: 4px;
			overflow: hidden;
			cursor: pointer;
			background: rgba(255, 255, 255, 0.5);
			margin: 0 10px;
			text-align: center;
			transition: all 300ms;
		}
		.pagination-item:hover{
			transform: scale(2);
		}
		.pagination-item img{
			display: inline-block;
			max-width: none;
			height: 100%;
			transform: scale(1);
			opacity: 0;
			transition: all 300ms;
		}
		.pagination-item:hover img{
			opacity: 1;
			transform: scale(1);
		}
		input[id="1"]:checked ~ .slide{
			animation: none;
			transform: translate3d(0, 0, 0);
		}
		input[id="1"]:checked ~ .pagination .pagination-item[for="1"]{
		 	background: #6F1DB9;
		}
		input[id="2"]:checked ~ .slide{
			animation: none;
			transform: translate3d(calc(-100% * 1), 0, 0);
		}
		input[id="2"]:checked ~ .pagination .pagination-item[for="2"]{
		 	background: #6F1DB9;
		}
		input[id="3"]:checked ~ .slide{
			animation: none;
			transform: translate3d(calc(-100% * 2), 0, 0);
		}
		input[id="3"]:checked ~ .pagination .pagination-item[for="3"]{
		 	background: #6F1DB9;
		}
		input[id="4"]:checked ~ .slide{
			animation: none;
			transform: translate3d(calc(-100% * 3), 0, 0);
		}
		input[id="4"]:checked ~ .pagination .pagination-item[for="4"]{
		 	background: #6F1DB9;
		}
		input[id="5"]:checked ~ .slide{
			animation: none;
			transform: translate3d(calc(-100% * 4), 0, 0);
		}
		input[id="5"]:checked ~ .pagination .pagination-item[for="5"]{
		 	background: #6F1DB9;
		}
		input[id="6"]:checked ~ .slide{
			animation: none;
			transform: translate3d(calc(-100% * 5), 0, 0);
		}
		input[id="6"]:checked ~ .pagination .pagination-item[for="6"]{
		 	background: #6F1DB9;
		}
		@keyframes autoplay{
			16.66%{
				transform: translate3d(calc(-100% * 0), 0, 0)
			}
			33.32%{
				transform: translate3d(calc(-100% * 1), 0, 0);
			}
			50%{
				transform: translate3d(calc(-100% * 2), 0, 0)
			}
			66.64%{
				transform: translate3d(calc(-100% * 3), 0, 0)
			}
			83.3%{
				transform: translate3d(calc(-100% * 4), 0, 0)
			}
			100%{
				transform: translate3d(calc(-100% * 5), 0, 0)
			}
		}
		/*Log-in*/
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
		.overlay.active{
			visibility: visible;
		}
		.popup{
			background: #141414;
			box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
			border-radius: 6px;
			padding: 20px;
			text-align: center;
			width: 500px;
			opacity: 0;
			transition: .3s ease all;
			transform: scale(0.7);
		}
		.popup form .contenedor-inputs{
			margin-top: 40px;
			opacity: 0;
		}
		#l-e{
			font-size: 22px;
		}
		#l-c{
			font-size: 22px;
		}
		#email {
			border: none;
			border-bottom: 1px solid #6F1DB9;
			font-size: 16px;
			width: 450px;
			height: 40px;
			margin-bottom: 40px;
			background: transparent;
			outline: none;
			color: white;
		}
		#contraseña{
			border: none;
			border-bottom: 1px solid #6F1DB9;
			font-size: 16px;
			height: 40px;
			width: 450px;
			background: transparent;
			outline: none;
			color: white;

		}
		.popup.active{
			opacity: 1;
			transform: scale(1);
		}
		.popup .btn-cerrar-popup{
			font-size: 16px;
			line-height: 16px;
			display: block;
			text-align: right;
			color: #bbbbbb;
			transition: 0.7 ease;
		}
		.popup .btn-cerrar-popup:hover{
			color: #000000;
			cursor: pointer
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
		.popup.active .contenedor-inputs{animation: entradaInputs 1s ease 1s forwards;}
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
		@keyframes entradaInputs{
			from{
				opacity: 0;
			}
			to{
				opacity: 1;
			}
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
		<header>
			<div class="contenedor">
				<h1>Logo</h1>
				<div class="registro">
						<img src="<?php echo base_url();?>imgs/LogIn.png" id="login">
				</div>
			</div>
		</header>
		<?php if($this->session->flashdata('message')){
				echo '
					<div>
						'.$this->session->flashdata("message").'
					</div>
				';
			} ?>
		<div class="slider">
		<div class="container-all">
			<input type="radio" name="image-slide" id="1" hidden />
			<input type="radio" name="image-slide" id="2" hidden /> 
			<input type="radio" name="image-slide" id="3" hidden />
			<input type="radio" name="image-slide" id="4" hidden />
			<input type="radio" name="image-slide" id="5" hidden />
			<input type="radio" name="image-slide" id="6" hidden />
		
			<div class="slide">
				<div class="item-slide">
					<img src="<?php echo base_url();?>imgs/1.jpg" >
					<div class="capa"><h1 id="id1">Fantasia</h1></div>
				</div>
				<div class="item-slide">
					<img src="<?php echo base_url();?>imgs/romance.jpg" >
					<div class="capa"><h1 id="id2">Romance</h1></div>
				</div>
				<div class="item-slide">
					<img src="<?php echo base_url();?>imgs/comedia.jpg" >
					<div class="capa"><h1 id="id3">Comedia</h1></div>
				</div>
				<div class="item-slide">
					<img src="<?php echo base_url();?>imgs/4.jpg" >
					<div class="capa"><h1 id="id4">Ciencia Ficción</h1></div>
				</div>
				<div class="item-slide">
					<img src="<?php echo base_url();?>imgs/policial.jpg" >
					<div class="capa"><h1 id="id5">Policial</h1></div>
				</div>
				<div class="item-slide">
					<img src="<?php echo base_url();?>imgs/6.jpg" >
					<div class="capa"><h1 id="id6">Terror y Misterio</h1></div>
				</div>
			</div>

			<div class="pagination">
				<label for="1" class="pagination-item">
					<img src="<?php echo base_url();?>imgs/1.jpg">
				</label>
				<label for="2" class="pagination-item">
					<img src="<?php echo base_url();?>imgs/romance.jpg">
				</label>
				<label for="3" class="pagination-item">
					<img src="<?php echo base_url();?>imgs/comedia.jpg">
				</label>
				<label for="4" class="pagination-item">
					<img src="<?php echo base_url();?>imgs/4.jpg">
				</label>
				<label for="5" class="pagination-item">
					<img src="<?php echo base_url();?>imgs/policial.jpg">
				</label>
				<label for="6" class="pagination-item">
					<img src="<?php echo base_url();?>imgs/6.jpg">
				</label>
			</div>
		</div>
		</div>
		<div class="overlay" id="overlay">
			<div class="popup" id="popUp">
				<i id="btn-cerrar-popup" class="btn-cerrar-popup fas fa-times"></i>
				<h3>Inicio de sesión</h3>
				<h4>Descubre tu próxima lectura</h4>
				<form action="<?php echo base_url('index.php/Login_controller/validacion')?>" method="POST">
					<div class="contenedor-inputs">
						<label id="l-e">Ingrese su email</label>
						<input id="email" type="email" name="Email" placeholder="E-mail" value="<?php echo set_value("Email"); ?>">
						<span><?php echo form_error('Email'); ?></span>
						<label id="l-c">Ingrese su contraseña</label>
						<input id="contraseña" type="password" name="Contraseña" placeholder="Contraseña" value="<?php echo set_value("Contraseña"); ?>">
						<span><?php echo form_error('Contraseña'); ?></span>
					</div>
					<input type="submit" class="btn-submit" value="Confirmar">
				</form>
				<p>¿Todavía no estás registrado? <a href="<?php echo base_url('index.php/Registrar_controller') ?>">Registrate aquí</a></p>
			</div>
		</div>

		<script src="<?php echo base_url("scripts/login.js")?>"></script>
</body>
</html>
