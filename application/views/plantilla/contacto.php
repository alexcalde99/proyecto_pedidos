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
        <title>Contact - Grill Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_misc.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/testimonails-slider.css">

        <script src="../../../TEMPLATE/templatemo_417_grill/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
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
                                <h2>Contact Us</h2>
                                <span>Home / <a href="contacto.php">Contact Us</a></span>
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
                                <h2>Feel free to send a message</h2>
                                <img src="../../../TEMPLATE/templatemo_417_grill/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div id="contact-us">
                        <div class="container">
                            <div class="row">
                                <div class="product-item col-md-12">
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="message-form">
                                                <form action="<?=base_url("principal/send_mail")?>" method="post">
                                                    Correo electronico: <br/>
                                                    <input type="email" name="email" /><br/>
                                                    Asunto: <br/>
                                                    <input type="text" name="asunto" /><br/>
                                                    Mensaje:<br/>
                                                    <textarea name="mensaje"></textarea><br/>
                                                    <input type="submit" name="submit" value="Enviar"/>
                                                </form>
                                                <?php
                                                if($this->session->flashdata('envio')){
                                                    echo $this->session->flashdata('envio');
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="info">
                                                <p>Duis at pharetra neque, ut condimentum, purus nisl pretium quam, in pulvinar velit massa id elit. </p>
                                                <ul>
                                                    <li><i class="fa fa-phone"></i>090-080-0760</li>
                                                    <li><i class="fa fa-globe"></i>456 New Dagon City Studio, Yankinn, Digital Estate</li>
                                                    <li><i class="fa fa-envelope"></i><a href="#">info@company.com</a></li>
                                                </ul>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Find Us On Map</h2>
                                <img src="../../../TEMPLATE/templatemo_417_grill/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="googleMap" style="height:340px;"></div>
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

        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false">
        </script>
                
        <script>
		
		var map;
		
        function initialize()
        {
			var map_options = {
			  center: new google.maps.LatLng(16.8496189,96.1288854),
			  zoom: 15,
			  mapTypeId:google.maps.MapTypeId.ROADMAP
			  };
			var map = new google.maps.Map(document.getElementById("googleMap"), map_options);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
		google.maps.event.addDomListener(window, "resize", function() 
		{
		 	var center = map.getCenter();
		 	google.maps.event.trigger(map, "resize");
		 	map.setCenter(center); 
		});
        </script>

    </body>
</html>