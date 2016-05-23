<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_misc.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/testimonails-slider.css">


        <script src="<?php echo base_url(); ?>assetsjs/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
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
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                                <li><span class="filter" data-filter="all">All</span></li>
                                <li><span class="filter" data-filter=".ginger">5-10€</span></li>
                                <li><span class="filter" data-filter=".pizza">Pizza</span></li>
                                <li><span class="filter" data-filter=".pasta">Pasta</span></li>
                                <li><span class="filter" data-filter=".drink">Drink</span></li>
                                <li><span class="filter" data-filter=".hamburger">Hamburger</span></li>
                            </ul>
                        </div>
                    </div>

                    <!-- *****CONTENEDOR PRODUCTOS -->
                    <div class="row" id="Container">

                        <?php

                        foreach($productos as $producto) {  ?>

                            <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-thumb">
                                        <img src='<?php echo base_url().'assets/images/'.$producto->imagen ?>'>
                                        <div class="hover">
                                            <div class="hover-iner">



                                                <a class='fancybox' href="<?php echo base_url().'assets/images/'.$producto->imagen  ?>">

                                                    <img src='<?php echo base_url() . "assets/images/open-icon.png"  ?> '>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="label-text">
                                        <h3> <?php echo $producto->descripcion ?> </h3>
                                        <h6> <?php  echo $producto->ingredientes ?> </h6>
                                        <span class="text-category"> <?php echo $producto->precio ?> €</span>
                                    </div>
                                </div>
                            </div>

                            <form method='post' action='<?php echo site_url("productos/add") ?>'>
                                <input type="hidden" name="id_producto" value= '<?php echo $producto->id ?>'>
                                <input type="hidden" name="descripcion" value= '<?php echo $producto->descripcion ?>'>
                                <input type="hidden" name="precio" value= '<?php echo $producto->precio ?>'>
                                <input type='submit' class='btn btn-warning'>
                                <input type="number" name="cantidad">
                            </form>


                        <?php } ?>

                    </div>
                    <!-- ***** FIN CONTENEDOR PRODUCTOS -->



                    <div class="pagination">
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
                    </div>     
                </div>
            </div>


        <!-- ** include FOOTER.PHP*****-->
        <?php include "footer.php" ?>
    
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/vendor/jquery.gmap3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>



    </body>
</html>