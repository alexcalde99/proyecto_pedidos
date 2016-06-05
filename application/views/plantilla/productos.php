<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<!-- 



-->


<head>
    <meta charset="utf-8">
    <title>Productos</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_misc.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/testimonails-slider.css">


    <script src="<?php echo base_url(); ?>assetsjs/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    <script type="text/javascript">
        // To conform clear all data in cart.
        function clear_cart() {
            var result = confirm('Are you sure want to clear all bookings?');

            if (result) {
                window.location = "<?php echo site_url('carrito/remove/all') ?>";
            } else {
                return false; // cancel button
            }
        }
        function finish_cart() {

            window.location = "<?php echo site_url('carrito/billing_view') ?>";
        }
    </script>
    <style>

        #table{font-size:15px;width:100%;}
        tr{bgcolor:#FFFFFF;}
        #main_heading{
            font-weight:bold;
            bgcolor:#FFFFFF;
        }
        table tr:nth-child(odd) {background-color: lightgrey;}

        table tr:nth-child(even) {background-color: white;}
        .fg-button.teal{
            color: #fff;
            background-color:orange;
        }
        .fg-button.teal:hover{
            background: orangered;
        }

    </style>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser
    today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better
    experience this site.</p>
<![endif]-->

<!-- *****INCLUDE HEADER PHP -->
<?php include "header.php"; ?>


<div id="heading">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-content">
                    <h2 style="color: orange">Nuestros productos</h2>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">


</div>


<div id="products-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="product-heading">
                    <h2>Nuestros productos</h2>
                    <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div id="text">
                <?php $cart_check = $this->cart->contents();

                // If cart is empty, this will show below message.
                if(empty($cart_check)) {

                    echo '<div class="alert alert-warning" role="alert">Para añadir productos al carrito pulse en "Añadir al carrito"</div>';
                }
                ?> </div>

            <table id="table" border="0" cellpadding="5px" cellspacing="1px">
                <?php
                // All values of cart store in "$cart".
                if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading" style="background-color: orange">
                        <td style="color: white">ID_Producto</td>
                        <td style="color: white">Nombre</td>
                        <td style="color: white">Precio</td>
                        <td style="color: white">Cantidad</td>
                        <td style="color: white">Cantidad</td>
                        <td style="color: white">Cancelar Producto</td>
                    </tr>
                    <?php
// Create form and send all values in "shopping/update_cart" function.
                    echo form_open('carrito/update_cart');
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
// echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
// Will produce the following output.
// <input type="hidden" name="cart[1][id]" value="1" />

                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);

/*
                        foreach ($productos as $producto) { */?><!--

                            <?php
/*                            echo form_hidden('cart['. $producto->id_restaurante);

                            */?>

                        --><?php /*} */?>


                        <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            $ <?php echo number_format($item['price'], 2); ?>
                        </td>
                        <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                        </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <td>
                            $ <?php echo number_format($item['subtotal'], 2) ?>
                        </td>
                        <td>

                            <?php

                            $path = "<img src='".base_url()."assets/images/eliminar.png' width='25px' height='20px'>";
                            echo anchor('carrito/remove/' . $item['rowid'], $path);

                            ?>
                        </td>
                    <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><b>Total pedido: $<?php

                                //Grand Total.
                                echo number_format($grand_total, 2); ?></b></td>

                        <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="1" style="width: 110px;float: right">
                            <input  class ='fg-button teal' type="button" value="Vaciar Carrito" onclick="clear_cart()">
                        </td>
                        <td>
                            <?php //submit button. ?>
                            <input class ='fg-button teal'  type="submit" value="Actualizar Carrito" onclick="update_cart()">
                            <?php echo form_close(); ?>
                        </td>
                        <td>

                            <!-- "Place order button" on click send "billing" controller -->
                            <input class ='fg-button teal' type="button" value="realizar Pedido" onclick="finish_cart()">
                        </td>

                    </tr>
                <?php endif; ?>
            </table>

            <!--<div class="filters col-md-12 col-xs-12">
                <ul id="filters" class="clearfix">
                    <li><span class="filter" data-filter="all">All</span></li>
                    <li><span class="filter" data-filter=".ginger">5-10€</span></li>
                    <li><span class="filter" data-filter=".pizza">Pizza</span></li>
                    <li><span class="filter" data-filter=".pasta">Pasta</span></li>
                    <li><span class="filter" data-filter=".drink">Drink</span></li>
                    <li><span class="filter" data-filter=".hamburger">Hamburger</span></li>
                </ul>
            </div>-->
        </div>

        <!-- *****CONTENEDOR PRODUCTOS -->
        <div class="row" id="Container">


            <?php

            foreach ($productos as $producto) { ?>

                <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">
                    <div class="portfolio-wrapper">
                        <div class="portfolio-thumb">
                            <img src='<?php echo base_url() . 'assets/images/' . $producto->imagen ?>'>

                            <div class="hover">
                                <div class="hover-iner">


                                    <a class='fancybox'
                                       href="<?php echo base_url() . 'assets/images/' . $producto->imagen ?>">

                                        <img src='<?php echo base_url() . "assets/images/open-icon.png" ?> '>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="label-text">
                            <h3> <?php echo $producto->descripcion ?> </h3>
                            <h6> <?php echo $producto->ingredientes ?> </h6>
                            <span class="text-category"> <?php echo $producto->precio ?> €</span>
                        </div>
                    </div>

                    <form action="<?php echo site_url('carrito/add') ?>" method="post">
                        <!-- ****ENVIAMOS POR POST LOS DATOS DEL PRODUCTO ****-->
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <input type="hidden" name="descripcion" value="<?php echo $producto->descripcion ?>">
                        <input type="hidden" name="precio" value="<?php echo $producto->precio ?>">
                        <input type="hidden" name="id_restaurante" value="<?php echo $producto->id_restaurante ?>">
                        <input type="submit" name="boton" value="Añadir al carrito" class="button" style="background-color: orange;color: white"/>
                    </form>

                </div>


            <?php } ?>

        </div>
        <!-- ***** FIN CONTENEDOR PRODUCTOS -->


      <!--  <div class="pagination">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
    </div>
</div>


<!-- ** include FOOTER.PHP*****-->
<?php include "footer.php" ?>

<script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/vendor/jquery.gmap3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/jcart/"></script>


</body>
</html>