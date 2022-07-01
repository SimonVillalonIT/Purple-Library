<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js");?>"></script>
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.themes.min.css");?>">
    <style type="text/css">
        body{
        background-color: #171717;
        font-family: "Century Gothic";
        margin: 0;
    }
        header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 2px solid #6F1DB9;
        margin-bottom: 0;
    }
        header img{
            width: 20px;
            height: auto;
            transition: .2s;
            cursor: pointer;
    }	
	    header img:hover{
			filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136,33,226,1));
	}
        
        header div{
            margin-bottom: 10px;
        }
        header a{
            margin-right: 20px;
            
        }
        h1{
            color: white;
            margin: 0;
            margin-left: 20px;
        }
        .links{
            list-style: none;
            display: flex;
            justify-content: space-around;
        }
        .links li{
            margin: 10px;
        }
        .links li a{
            margin: 0;
        }
        .buscador form{
            display: flex;
        }
        #provider-json{
            margin-top: 10px;
            width: 250px;
        }
        #buscar{
            margin-left: 5px;
            margin-top: 10px;
            width: 25px;
            height: 30px;
            transition: .2s;
        }
        #buscar:hover{
			filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136,33,226,1));
        }
        .error .texto{
            width: 97.5%;
            background-color: red;
            margin:0;
            padding: 15px;
        }
        .error h2{
            margin: 0;
        }
        .error{
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .body{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            color: white;
        }
        .tarjeta{
            display: flex;
            width: 150px;
            flex-direction: column;
            margin: 0;
            padding: 5px;
            border-radius: 6px;
            margin: 10px;
            border: 1px solid white;
            background-color: rgba(111,29,185,0.3);
            text-align: center;
            transition: .3s;
        }
        .tarjeta:hover{
            border: 1px solid #6F1DB9;
            background-color: rgba(111,29,185,0.8);
            cursor: pointer;
            transform: scale(1.05);
        }
        .tarjeta img{
            width: 150px;
            height: 226px;
        }
        .tarjeta p{
            margin: 0;
            margin-bottom: 5px; 
        }
</style>
</head>
<body>
    <header>
        <div class="logo"><h1>Logo</h1></div>
		<div class="buscador">
            <form method="POST" action="<?php echo base_url("index.php/Buscador_controller/paginabusquedas") ?>">
                <input id="provider-json" name="keyword">
                <input id="buscar" type="image" src="<?php echo base_url("imgs/iconos/lupa.png");?>">
            </form>
        </div>

        <div class="links">
            <li><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png");?>"></li>
            <li><a href="">Categorias</a></li>
            <li><img id="User" src="<?php echo base_url("imgs/iconos/user.png");?>"></li>
            <li><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png");?>"></li>   
        </div>
    </header>
    <main>
   <?php 
   if($resultado=="error"){
    echo "<div class='error'><div class='texto'><h2>No se encontraron resultados para su busqueda</h2></div>
    <img src='".base_url("imgs/iconos/piffle-error-unscreen.gif")."'alt='Gift de error'></div>";
   }
    else{
    echo '<div class="body">';
    if(empty($resultado)){
        echo "<div class='error'><div class='texto'><h2>No se encontraron resultados para su busqueda</h2></div>
        <img src='".base_url("imgs/iconos/piffle-error-unscreen.gif")."'alt='Gift de error'></div>";
    }
    else{
    foreach($resultado as $row){
        echo ('<div class="tarjeta"><img src="'.base_url("imgs/libros/$row->img").'"><p>'. 
        $row->Titulo.'</p><p>'.$row->Autor.'</p></div>');
   }
    echo '</div>';}}
   ?>
   </main>




<script> 

const btn_logOut = document.getElementById("LogOut");
const btn_user = document.getElementById("User");
const btn_home = document.getElementById("Home") 
btn_home.addEventListener('click', ()=>{
        window.location.href = "<?php echo base_url('index.php/private_area');?>";
    });
btn_logOut.addEventListener('click',()=>{
window.location.href = "<?php echo base_url('index.php/private_area/logout');?>"
})
btn_user.addEventListener('click', ()=>{
    window.location.href = "";
});
</script>

<script>
var options = {
url: "<?php echo base_url('index.php/Buscador_controller/buscar')?>",
getValue: "Titulo",
theme:"purple",
template: {
    type: "custom",
    method: function(value, item) {
        return "<img src='<?php echo base_url("imgs/libros/")?>" + item.img + "' /> | " + value + " | " + item.Autor;
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
window.addEventListener('load', function(){
new Glider(document.querySelector('.glider'), {
slidesToShow: 5,
slidesToScroll: 5,
draggable: true,
dots: '.dots',
arrows: {
prev: '.glider-prev',
next: '.glider-next'
}
});})
</script> 
</body>
</html>