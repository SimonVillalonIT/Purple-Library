<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="<?php echo base_url("imgs/iconos/Logo.png"); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        body {
            background-color: #171717;
            font-family: "Century Gothic";
            margin: 0;
            color: white;
        }

        h1 {
            color: white;
            margin: 0;
            margin-left: 20px;
        }

        header {
            background-color: #171717;
            position: fixed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #6F1DB9;
            width: 100%;
        }

        header a {
            margin-right: 20px;
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
            width: fit-content;
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

        .logo {
            width: 15%;
            display: flex;
            justify-content: center;
        }

        .recomendaciones {
            width: 82.5%;
            height: auto;
            margin-top: 30px;
            margin-left: auto;
            margin-right: auto;
        }

        .buscador {
            width: min-content;
            height: min-content;
        }

        .buscador form {
            display: flex;
            color: black;
        }

        #provider-json {
            margin-top: 10px;
            width: 600px;
        }

        #buscar {
            position: absolute;
            top: 30px;
            right: 410px;
            width: 20px;
            height: 20px;
            transition: .2s;
            filter: invert(84%) sepia(11%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%);
        }

        #buscar:hover {
            filter: invert(24%) sepia(91%) saturate(2378%) hue-rotate(261deg) brightness(70%) contrast(112%) drop-shadow(0 0 5px rgba(136, 33, 226, 1));
        }

        .logo img {
            width: 80px;
        }

        .links {
            list-style: none;
            display: flex;
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
            padding-top: 90px;
            display: flex;
            justify-content: center;
        }

        .container {
            width: 1200px;
            border-radius: px;
            border:2px solid rgba(136, 33, 226, .6);
        }
        .item{
            display: flex;
            width: 95%;
            padding: 5px;
            margin: 10px;
            border-bottom:2px solid rgba(136, 33, 226, 1);
        }
        .item img {
            width: 100px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo"><img src="<?php echo base_url("imgs/iconos/Logo.png") ?>"></div>
        <div class="buscador">
            <form method="POST" action="<?php echo base_url("index.php/Buscador_controller/paginabusquedas") ?>">
                <input id="provider-json" name="keyword">
                <input id="buscar" type="image" src="<?php echo base_url("imgs/iconos/lupa.png"); ?>">
            </form>
        </div>

        <div class="links">
            <li><a href="<?php echo base_url('index.php/private_area'); ?>"><img id="Home" src="<?php echo base_url("imgs/iconos/Home.png"); ?>"></a></li>
            <li><a href="<?php echo base_url("index.php/cart") ?>"><img id="Cart" src="<?php echo base_url("imgs/iconos/Cart.png"); ?>"></a></li>
            <li><img id="User" src="<?php echo base_url("imgs/iconos/user.png"); ?>"></li>
            <li><a href="<?php echo base_url('index.php/private_area/logout'); ?>"><img id="LogOut" src="<?php echo base_url("imgs/iconos/LogOut.png"); ?>"></a></li>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        // Update item quantity
        function updateCartItem(obj, rowid) {
            $.get("<?php echo base_url('index.php/cart/updateItemQty/'); ?>", {
                rowid: rowid,
                qty: obj.value
            }, function(resp) {
                if (resp == 'ok') {
                    location.reload();
                } else {
                    alert('Cart update failed, please try again.');
                }
            });
        }

        function alerta() {
            alert("hola");
        }
    </script>
    <main>
        <div class="container">
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th class="text-right">Subtotal</th>
            <th></th>
            </tr>
            <?php if ($this->cart->total_items() > 0) {
                foreach ($cartItems as $item) {
                echo('
                <div class="item">
                    <img src="'.base_url('imgs/libros/'.$item["image"]).'"><h1>'.$item["name"].'</h1>
                </div>
                ');
                 }
            } else { ?>
                <tr>
                    <td colspan="6">
                        <p>Your cart is empty.....</p>
                    </td>
                <?php } ?>
                <?php if ($this->cart->total_items() > 0) { ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><strong>Cart Total</strong></td>
                    <td class="text-right"><strong><?php echo '$' . $this->cart->total() . ' USD'; ?></strong></td>
                    <td></td>
                </tr>
            <?php } ?>
        </div>
    </main>
</body>

</html>