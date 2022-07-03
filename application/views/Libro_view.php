<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png");?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro</title>
    <style>
        .comentario{
            display: flex;
        }
        .comentario p{
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Libro</h1>
    <h3>Datos</h3>
    <?php 
    foreach($resultado as $row){
        echo ('<h5>'.$row->Titulo.'</h5><h5>'.$row->Autor.'</h5><img src="'.base_url("imgs/libros/".$row->img).'">    
        <div class="comentarios">
        <form method="POST" action="'.base_url("index.php/Libro_controller/comentar/".$row->ID).'">
        <input type="text" name="comentario">
        <button type="submit"></button>)
    </form>
    </div>');}?>
    <?php foreach($comentarios as $row){
        echo '<div class="comentario"><p>'.$row->Contenido.'</p>';
        echo '<p>'.$row->Fecha.'</p>';
        echo '<p>'.$row->IDUsuario.'</p></div>';
    } ?>
</body>
</html>