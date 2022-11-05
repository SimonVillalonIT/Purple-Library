<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('css/verificacion_email_view.css') ?>">
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

    <?php
    echo $message;
    ?>
    </div>
    <script src="<?php echo base_url("scripts/particles.min.js") ?>"></script>
    <script src="<?php echo base_url("scripts/particles-config.js") ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?php echo base_url("scripts/spinner.js") ?>"></script>
</body>

</html>