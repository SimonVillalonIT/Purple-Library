<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
            .Verificar{
            display: flex;
            width: 100%;
            background: rgba(20,20,20,0.5);
            font-size: 18px;
            color: #6F1DB9;
            justify-content: center;
            border-radius: 12px;
            transition: 0.3s;
        }
        a:hover{
            color: #D620FA;
        }
        #error{
            display: flex;
            width: 100%;
            background: rgba(20,20,20,0.5);
            font-size: 24px;
            color: red;
            border-radius: 12px;
            justify-content: center;
        }
        </style>
    </head>
    <body>
        <div id="particles-js">
        </div>
        
        <?php 
        echo $message;
        ?>
        </div>
        <script src="<?php echo base_url("scripts/particles.min.js") ?>"></script>
        <script src="<?php echo base_url("scripts/particles-config.js") ?>"></script>
    </body>
    </html>

