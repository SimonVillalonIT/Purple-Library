<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
	<meta charset="utf-8">
	<title>Inicio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/f33a357731.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Splash&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url("css/Inicio_view.css") ?>">
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
		<div class="contenedor">
			<img src="<?php echo base_url("imgs/iconos/Logo.png") ?>" alt="" srcset="">
			<h1>Purple</h1>
			<div class="registro">
				<img src="<?php echo base_url(); ?>imgs/iconos/LogIn.png" id="login">
			</div>
		</div>
	</header>
	<?php if ($this->session->flashdata('message')) {
		echo '
					<div>
						' . $this->session->flashdata("message") . '
					</div>
				';
	} ?>
		<div class="form-error">
				<?php echo form_error('Contraseña');
				echo form_error('Email');  ?>
		</div>
	<main>
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
						<img src="<?php echo base_url(); ?>imgs/slider/1.jpg">
						<div class="capa">
							<h1 id="id1">Fantasia</h1>
						</div>
					</div>
					<div class="item-slide">
						<img src="<?php echo base_url(); ?>imgs/slider/romance.jpg">
						<div class="capa">
							<h1 id="id2">Romance</h1>
						</div>
					</div>
					<div class="item-slide">
						<img src="<?php echo base_url(); ?>imgs/slider/comedia.jpg">
						<div class="capa">
							<h1 id="id3">Comedia</h1>
						</div>
					</div>
					<div class="item-slide">
						<img src="<?php echo base_url(); ?>imgs/slider/4.jpg">
						<div class="capa">
							<h1 id="id4">Ciencia Ficción</h1>
						</div>
					</div>
					<div class="item-slide">
						<img src="<?php echo base_url(); ?>imgs/slider/Noficcion.jpg">
						<div class="capa">
							<h1 id="id5">No ficcion</h1>
						</div>
					</div>
					<div class="item-slide">
						<img src="<?php echo base_url(); ?>imgs/slider/6.jpg">
						<div class="capa">
							<h1 id="id6">Terror y Misterio</h1>
						</div>
					</div>
				</div>

				<div class="pagination">
					<label for="1" class="pagination-item">
						<img src="<?php echo base_url(); ?>imgs/slider/1.jpg">
					</label>
					<label for="2" class="pagination-item">
						<img src="<?php echo base_url(); ?>imgs/slider/romance.jpg">
					</label>
					<label for="3" class="pagination-item">
						<img src="<?php echo base_url(); ?>imgs/slider/comedia.jpg">
					</label>
					<label for="4" class="pagination-item">
						<img src="<?php echo base_url(); ?>imgs/slider/4.jpg">
					</label>
					<label for="5" class="pagination-item">
						<img src="<?php echo base_url(); ?>imgs/slider/Noficcion.jpg">
					</label>
					<label for="6" class="pagination-item">
						<img src="<?php echo base_url(); ?>imgs/slider/6.jpg">
					</label>
				</div>
			</div>
		</div>
	</main>
	<div class="overlay" id="overlay">
		<div class="popup" id="popUp">
			<i id="btn-cerrar-popup" class="btn-cerrar-popup fas fa-times"></i>
			<h3>Inicio de sesión</h3>
			<h4>Descubre tu próxima lectura</h4>
			<form action="<?php echo base_url('index.php/Login_controller/validacion') ?>" method="POST">
				<div class="contenedor-inputs">
					<label id="l-e">Ingrese su email</label>
					<input id="email" type="email" name="Email" placeholder="E-mail" value="<?php echo set_value("Email"); ?>">
					<label id="l-c">Ingrese su contraseña</label>
					<input id="contraseña" type="password" name="Contraseña" placeholder="Contraseña" value="<?php echo set_value("Contraseña"); ?>">
				</div>
				<input type="submit" class="btn-submit" value="Confirmar">
			</form>
			<p>¿Todavía no estás registrado? <a href="<?php echo base_url('index.php/Registrar_controller') ?>">Registrate aquí</a></p>
		</div>
	</div>

	<script src="<?php echo base_url("scripts/login.js") ?>"></script>
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
	<script src="<?php echo base_url("scripts/spinner.js") ?>"></script>
</body>

</html>