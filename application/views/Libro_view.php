<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png");?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <style>
        h3{
            margin: 0;
        }
       #form {
        width: 250px;
        margin: 0 auto;
        height: 50px;
        display: flex;
        }

        form p {
        text-align:end;
        width: max-content;
        }

        #form label {
        font-size: 40px;
        }

        input[type="radio"] {
        display: none;
        }

        label {
        color: grey;
        }

        .clasificacion {
        direction: rtl;
        unicode-bidi: bidi-override;
        }

        label:hover,
        label:hover ~ label {
        color: RGB(118,19,183);
        cursor: pointer;
        }

        input[type="radio"]:checked ~ label {
        color: RGB(118,19,183);
        }
        .comentario{
            display: flex;
            padding: 10px;
            align-items: center;
        }
        .comentario p{
            margin: 10px;
        }
        .comentario img{
            width: 50px;
            height: auto;
        }
        .pintado{
            color: RGB(118,19,183);
        }
        .Valoracion{
            display: flex;
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Libro</h1>
    <h3>Datos</h3>
    <?php 
    foreach($resultado as $row){
        echo ('<h5>'.$row->Titulo.'</h5><h5>'.$row->Autor.'</h5><img src="'.base_url("imgs/libros/".$row->img).'">    
        <div class="comentar">
        <form method="POST" action="'.base_url("index.php/Libro_controller/comentar/".$row->ID).'">
        <input type="text" name="comentario">
        <button type="submit">Comentar</button><div>
    </form>
    </div>');}?>
    <?php
    if(empty($valoracion)){
        echo('
        <form method="POST" action="'.base_url("index.php/Libro_controller/valorar/".$row->ID).'" id="#form">
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
        <button type="submit">Calificar</button>
</form>');} 
        else{
            foreach($valoracion as $row){
                if($row->Valoracion == 1){
                    echo('
                    <h3>Tu valoracion<h3>
                    <div class="Valoracion">
                        <h3 class="pintado">★<h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>');
                }
                elseif($row->Valoracion == 2){
                    echo('
                    <h3>Tu valoracion<h3>
                    <div class="Valoracion">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>');
                }
                elseif($row->Valoracion == 3){
                    echo('
                    <h3>Tu valoracion<h3>
                    <div class="Valoracion">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>');
                }
                elseif($row->Valoracion == 4){
                    echo('
                    <h3>Tu valoracion<h3>
                    <div class="Valoracion">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3>★</h3>
                    </div>');
                }
                elseif($row->Valoracion == 5){
                    echo('
                    <h3>Tu valoracion<h3>
                    <div class="Valoracion">
                        <h3 class="pintado">★<h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                        <h3 class="pintado">★</h3>
                    </div>');
                }
                else{
                    echo('
                    <h3>Tu valoracion<h3>
                    <div class="Valoracion">
                        <h3>★<h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                        <h3>★</h3>
                    </div>');
                }
            }
        }

    ?>
    <?php
        foreach($puntuacion->result() as $row){
            echo '<h3>Valoracion general:</h3>★'.$row->Valoracion;
        }    
    ?>
    <?php foreach($comentarios as $row){
        echo '<div class="comentario"><img src="'.base_url("imgs/iconos/avatar.svg").'">';
        echo '<p>'.$row->Nombre.'</p>';
        echo '<p>'.$row->Contenido.'</p>';
        echo '<p>'.$row->Fecha.'</p></div>';
    } ?>
</body>
</html>