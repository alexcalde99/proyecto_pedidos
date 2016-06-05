<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
<html>
<head>
    <title>Codeigniter cart class</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
</head>
<body>
<div id="bill_info">

    <!-- *****INCLUDE HEADER PHP -->
    <?php include "header.php"; ?>

    <?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
    <form name="billing" method="post" action="<?php echo base_url() . 'shopping/save_order' ?>" >
        <input type="hidden" name="command" />
        <div align="center">
            <h1 align="center">Informacion del Pedido</h1>
            <table style="width:40%">
                <tr  style="background-color: orange;color: white">
                    <td>Producto</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                </tr>
                <?php foreach ($cart as $item){ ?>
                <tr>
                    <td><?php echo $item['name'] ?></td>
                    <td><?php echo $item['price'] . "€" ?></td>
                    <td><?php echo $item['qty'] ?></td>
                </tr>
                <?php } ?>
            </table>
            <table border="0" cellpadding="2px">
                <tr><td>Total Pedido:</td><td><strong><?php echo number_format($grand_total, 2); ?>€</strong></td></tr>
                <tr><td>Nombre:</td><td><input type="text" name="name" required=""/></td></tr>
                <tr><td>Direccion:</td><td><input type="text" name="address" required="" /></td></tr>
                <tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
                <tr><td>Telefono:</td><td><input type="text" name="phone" required="" /></td></tr>
                <tr><td><?php
                        // This button for redirect main page.
                        //echo "<a class ='fg-button teal'  id='back' href=" . base_url() . "index.php/shopping>Back</a>"; ?>
                    <!--</td><td><input class ='fg-button teal' type="submit" value="Realizar pedido" /></td></tr>-->

            </table>
        </div>
    </form>

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
        <input name="cmd" type="hidden" value="_cart" />
        <input name="upload" type="hidden" value="1" />
        <input name="business" type="hidden" value="UTALNWW4UB2YG" />
        <input name="shopping_url" type="hidden" value="ladirecciondetuweb" />
        <input name="currency_code" type="hidden" value="EUR" />

        <input name="return" type="hidden" value="http://localhost/pedidosaunclick/principal/pedido_realizado" />
        <input name="notify_url" type="hidden" value="http://mipagina.com/paypal_ipn.php" />

        <!-- tipo de envio, 1 GET 2 POST-->
        <input name="rm" type="hidden" value="2" />
        <?php $valor = 1 ?>
        <?php $cart = $this->cart->contents()?>
        <?php foreach ($cart as $item){ ?>
        <!--item_number_X-Identificador del producto
        item_name_X ;Nnombre del producto
        amount_X ;-Precio del producto
        quantity_X ;-Cantidad del producto-->

        <input name="item_number_<?php echo $valor ?>" type="hidden" value="<?php echo $item['id']; ?>" />
        <input name="item_name_<?php echo $valor ?>" type="hidden" value="<?php echo $item['name']; ?>" />
        <input name="amount_<?php echo $valor ?>" type="hidden" value="<?php echo $item['price']; ?>" />
        <input name="quantity_<?php echo $valor ?>" type="hidden" value="<?php echo $item['qty']; ?>" />

            <?php $valor++ ?>
<!--            --><?php //echo $valor ?>


        <?php }  ?>






        <!--<input name="item_number_2" type="hidden" value="PLÁTANOS15" />
        <input name="item_name_2" type="hidden" value="PLÁTANOS" />
        <input name="amount_2" type="hidden" value="3.00" />
        <input name="quantity_2" type="hidden" value="5" />-->
        <input type="submit" value="Realizar pedido" style="background-color: orange;color: white" />
    </form>
</div>
<!-- ** include FOOTER.PHP*****-->
<?php include "footer.php" ?>
</body>
</html>