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

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->

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
                    <h2 style="color: orange"> Promociones</h2>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="product-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <img src="<?php echo base_url() ?>/assets/images/promociones.png" alt=""/>
                    <h4>Descarga nuestras promociones y enséñalas en nuestros restaurantes para poder disfrutar de ellas </h4>
                </div>
            </div>
        </div>
        <div class="row">


            <?php

            foreach ($promociones as $promocion) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo base_url() . 'assets/images/' . $promocion->imagen ?>" alt="">

                        <div class="caption">
                            <h3><?php echo $promocion->descripcion ?></h3>

                            <form action="<?php echo site_url('principal/downloadFile') ?>" method="post">
                                <input type="hidden" name="imagen" value="<?php echo $promocion->imagen ?>">
                                <input type="submit" class="btn btn-primary" role="button" value="Descargar">
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div id="single-blog" class="page-section first-section">
            <div class="container">
                <div class="row">
                    <div class="product-item col-md-12">
                        <div class="row">

                        </div>
                    </div>
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