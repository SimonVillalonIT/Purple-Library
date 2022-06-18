<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">

        body{
            background-color: #171717;
            font-family: "Century Gothic";
            margin: 0;
            color: white;
        }
        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #6F1DB9;;
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
        h1{
            margin: 0;
            margin-left: 20px;
        }
        header div{
            margin-bottom: 10px;
        }
        header a{
            margin-right: 20px;
            
        }
        .buscador{
            height: 40px;
            width: 300px;
            background-color: red;
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
        main{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .leyendo{
            width: 82.5%;
            height: auto;
            margin-top: 30px;
        }
        .leyendo .main{
            margin-top: 20px;
            background-color: rgba(218, 217, 217, 0.1);
            display: flex;
            overflow: hidden;
            border-radius: 5px;
        }

        .main img{
            margin: 20px;
            width: 120px;
            height: 200px;
        }
    </style>
</head>
<body>

    <header>
        <div class="logo"><h1>Logo</h1></div>
		<div class="buscador"></div>
        <div class="links">
            <li><a href="">Categorias</a></li>
            <li><a href="">Algo</a></li>
            <li><img id="User" src="<?php echo base_url("imgs/user.png");?>"></li>
            <li><img id="LogOut" src="<?php echo base_url("imgs/LogOut.png");?>"></li>   
        </div>
    </header>
    
    <main>
        <div class="leyendo">
            <h1>
                Leyendo
            </h1>
            <div class="main">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
               <img src="">
            </div>
        </div>
        <div class="recomendaciones"></div>
    </main>

    <footer>
        
    </footer>
<script> 

    const btn_logOut = document.getElementById("LogOut");
    const btn_user = document.getElementById("User");
    
    btn_logOut.addEventListener('click',()=>{
    window.location.href = "<?php echo base_url('index.php/private_area/logout');?>"
})
    btn_user.addEventListener('click', ()=>{
        window.location.href = "";
    });
</script>
</body>
</html>