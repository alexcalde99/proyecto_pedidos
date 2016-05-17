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

                        foreach($productos as $producto){
                           echo "<div class=\"col-md-3 col-sm-6 mix portfolio-item Pizza\">";
                           echo "<div class=\"portfolio-wrapper\"> ";
                           echo "<div class=\"portfolio-thumb\">";
                           echo '<img src="'.base_url()."assets/images/".$producto->imagen.'" >';
                           echo "<div class=\"hover\">";
                           echo "<div class=\"hover-iner\">";

                           echo "<a class=\"fancybox\" href=".base_url()."assets/images/".$producto->imagen.">";

                            echo '<img src="'.base_url()."assets/images/open-icon.png".'" >';
                           echo "</a>";
                           echo "</div>";
                           echo "</div>";
                           echo "</div>";
                           echo "<div class=\"label-text\">";
                           echo "<h3>$producto->descripcion</h3>" ;
                           echo "<h6>$producto->ingredientes</h6>";
                           echo "<span class=\"text-category\">$producto->precio €</span>";
                           echo "</div>";
                           echo "</div>";
                           echo "</div>";
                           echo "<form method='post' action='".base_url()."productos/add_productos"."'>";
                           echo '<input type="hidden" name="id_producto" value=" '.$producto->id.'">';
                           echo '<input type="hidden" name="descripcion" value=" '.$producto->descripcion.'">';
                           echo '<input type="hidden" name="precio" value=" '.$producto->precio.'">';
                           echo "<input type=\"submit\" value=\"añadir\">";
                           echo " </form>";

                        }

                        ?>




<form




<!--
                        <div class="col-md-3 col-sm-6 mix portfolio-item Pizza">
                            <div class="portfolio-wrapper">
                                <div class="portfolio-thumb">
                                    <img src="images/product1.jpg" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="images/product1_big.jpg"><img src="images/open-icon.png" alt="" /></a>
                                            <span>Pizza</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="label-text">
                                    <h3><a href="single-post.html">Vege Pizza</a></h3>
                                    <span class="text-category">$16.00</span>
                                </div>
                            </div>
                        </div>-->



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