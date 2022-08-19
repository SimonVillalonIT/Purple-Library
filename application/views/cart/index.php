<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src=<?php echo base_url("scripts/Gliderjs_master/glider.js") ?>></script>
    <script src="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/jquery.easy-autocomplete.min.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('scripts/Gliderjs_master/glider.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("scripts/EasyAutocomplete-1.3.5/easy-autocomplete.themes.css"); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Principal</title>
    <style type="text/css">
        body {
            background-color: #171717;
            font-family: "Century Gothic";
            margin: 0;
        }

        h1 {
            color: white;
            margin: 0;
            margin-left: 20px;
        }

        /*                 HEADER                  */
        header {
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #6F1DB9;
            background-color: #171717;
        }
        header img {
            width: 20px;
            height: auto;
            transition: .2s;
        }

        .logo img {
            width: 80px;
        }

        .links {
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .links img:hover {
            cursor: pointer;
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .links li {
            margin: 0px;
            margin-left: 10px;
            margin-right: 10px;
        }

        .links li a {
            margin: 0;
        }

        main {
            padding-top: 40px;
            color: white;
        }

        .logo {
            width: 150px;
            display: flex;
            justify-content: flex-end;
        }

        .recomendaciones {
            width: 82.5%;
            height: auto;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        .buscador form {
            display: flex;
        }

        #provider-json {
            margin-top: 10px;
            width: 600px;
        }

        #buscar {
            position: absolute;
            top: 30px;
            right: 395px;
            width: 20px;
            height: 20px;
            transition: .2s;
            filter: invert(84%) sepia(11%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%);
        }

        #buscar:hover {
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        main {
            padding-top: 90px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 1200px;
            border-radius: px;
            border: 2px solid rgba(136, 33, 226, .6);
        }

        .item {
            display: flex;
            width: 95%;
            padding: 5px;
            margin: 10px;
            border-bottom: 2px solid rgba(136, 33, 226, 1);
        }

        .item img {
            width: 100px;
            margin-left: 50px;
        }
        thead{
            border-color: #6F1DB9;
        }
        .table thead th{
            border-color: #6F1DB9;
        }
        .table th{
            border-color: #6F1DB9;
        }

        .table td{
            border-color: #6F1DB9;
        }
        .btn-danger{
            background-color: #6F1DB9;
            border-color: #6F1DB9;
        }
        .boton {
            background-color: rgba(136, 33, 226, 0.3);
            width: 120px;
            height: 50px;
            border-radius: 6px;
            color: white;
            font-size: 18px;
            border: 3px solid #141414;
            cursor: pointer;
            transition: .3s;
        }

        .boton:hover {
            transform: scale(1.1);
            border: 2px solid #7000F0;
        }
        #comprar{
            position: absolute;
            right: 20px;
        }
    </style>
</head>

<body>
<script>
// Update item quantity
function updateCartItem(obj, rowid){
    $.get("<?php echo base_url('index.php/cart/updateItemQty/'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Cart update failed, please try again.');
        }
    });
}
</script>
    <header>
        <div class="logo"><img src="<?php echo base_url("imgs/iconos/Logo.png") ?>"></div>
        <div class="buscador">
            <form method="POST" action="<?php echo base_url("index.php/Buscador_controller/paginabusquedas") ?>">
                <input id="provider-json" name="keyword">
                <input id="buscar" type="image" src="<?php echo base_url("imgs/iconos/lupa.png"); ?>">
            </form>
        </div>

        <div class="links">
            <li><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png"); ?>"></li>
            <li><a href="<?php echo base_url("index.php/cart")?>"><img id="Cart" src="<?php echo base_url("imgs/iconos/Cart.png");?>"></a></li>
            <li><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></li>
            <li><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png"); ?>"></li>
        </div>
    </header>

    <main>
    <?php if($this->cart->total_items() > 0){?>
    <table class="table table-striped">
<thead>
    <tr>
        <th width="10%"></th>
        <th width="30%">Producto</th>
        <th width="15%">Precio</th>
        <th width="13%">Cantidad</th>
        <th width="20%" class="text-right">Subtotal</th>
        <th width="12%"></th>
    </tr>
</thead>
        <?php }?>
<tbody>
    <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>
    <tr>
        <td>
            <?php $imageURL = !empty($item["image"])?base_url('imgs/libros/'.$item["image"]):base_url('assets/images/pro-demo-img.jpeg'); ?>
            <img src="<?php echo $imageURL; ?>" width="50"/>
        </td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo '$'.$item["price"].' USD'; ?></td>
        <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item['rowid']; ?>')"></td>
        <td class="text-right"><?php echo '$'.$item["subtotal"].' USD'; ?></td>
        <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Esta seguro que quiere borrar este libro?')?window.location.href='<?php echo base_url('index.php/cart/removeItem/'.$item['rowid']); ?>':false;">Borrar</button> </td>
    </tr>
    <?php } }else{ ?>
    <tr><td colspan="6"><p>Tu carrito esta vacío.....</p></td>
    <?php } ?>
    <?php if($this->cart->total_items() > 0){ ?>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td><strong>Cart Total</strong></td>
        <td class="text-right"><strong><?php echo '$'.$this->cart->total().' USD'; ?></strong></td>
        <td></td>
    </tr>
    <?php } ?>
</tbody>
</table>
    </main>
    <a href="<?php echo base_url("index.php/Compra/buy")?>"><button class="boton" id="comprar">Comprar</button></a>
    <footer>

    </footer>
    <script>
        const btn_logOut = document.getElementById("LogOut");
        const btn_user = document.getElementById("User");
        const btn_home = document.getElementById("Home");
        const tarjeta = document.querySelector(".libro");
        btn_logOut.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/private_area/logout'); ?>";
        })
        btn_home.addEventListener('click', () => {
            window.location.href = "<?php echo base_url('index.php/private_area'); ?>";
        });
        btn_user.addEventListener('click', () => {
            window.location.href = "";
        });

        function redirigir(id) {
            window.location.href = "<?php echo base_url("index.php/Libro_controller/cargarpagina/"); ?>" + id;
        }
    </script>

<script>
        var options = {
            url: "<?php echo base_url('index.php/Buscador_controller/buscar') ?>",
            getValue: "Titulo",
            theme: "light-blue",
            template: {
                type: "custom",
                method: function(value, item) {
                    return "<img src='<?php echo base_url("imgs/libros/") ?>" + item.img + "' /> | " + value + " | " + item.Autor;
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
</body>

</html>