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
        <title>Pedidos a un click | Pedidos online de los mejores restaurantes de Gandia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo_misc.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/testimonails-slider.css">

        <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- *****INCLUDE HEADER PHP -->
        <?php include "header.php"; ?>

            <div><?php
                //si no esta vacia, muestralo
                if(!empty($respuesta)){
                    echo $respuesta;
                }
                 ?></div>

            <div id="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                        <div class="slider-caption">
                            <h1>Pide comida a domicilio online</h1>
                            <p>Todos los restaurantes de Gandia a solo un click.</p>
                            <a href="#restaurantes"><span>Restaurantes</span></a>
                        </div>
                      <img src="<?php echo base_url(); ?>assets/images/slide1.jpg" alt="" />
                    </li>
                      <li>
                          <div class="slider-caption">
                              <h1>Pide comida a domicilio online</h1>
                              <p>Todos los restaurantes de Gandia a solo un click.</p>
                              <a href="#restaurantes"><span>Restaurantes</span></a>
                          </div>
                          <img src="<?php echo base_url(); ?>assets/images/slide2.jpg" alt="" />
                      </li>
                      <li>
                          <div class="slider-caption">
                              <h1>Pide comida a domicilio online</h1>
                              <p>Todos los restaurantes de Gandia a solo un click.</p>
                              <a href="#restaurantes"><span>Restaurantes</span></a>
                          </div>
                          <img src="<?php echo base_url(); ?>assets/images/slide3.jpg" alt="" />
                      </li>
                  </ul>
                </div>
            </div>

            <div>

            </div>
            <div id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <div align="center">
                                    <img src="<?php base_url(); ?>assets/images/proceso.png">
                                    <p style="font-family: 'Lato', sans-serif;font-size: medium;margin-top: 10px">
                                        <span style="color: orange">Pedidos a un click</span> te propone la mejor y más rápida forma
                                        de pedir comida a domicilio online de los mejores restaurantes de la Cuidad de Gandia.
                                        Pponemos a disposición nuestro servicio de "Take Away" donde podrás disfrutar de una gran variedad
                                        de platos y cocinas del mundo, aptas para los paladares más exigentes. Disfruta de todos
                                        los tipos de restaurantes de Gandia en la comidad e tu salón. Ofrecemos la oportunidad de hacer
                                        el pago con uno de los sistemas más seguros del mundo, Paypal.
                                        ¡No dudes en darle al click!
                                    </p>
                                </div>
                                <h2>Pedidos a un click</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <h4>Fácil de usar</h4>
                                <p>Búsqueda tu plato favorito entre todos nuestros restaurantes y con solo un click recibelo en
                                    puerta de tu casa u oficina </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bullhorn"></i>
                                </div>
                                <h4>Promociones</h4>
                                <p>Subscribete a nuestro newsletter y recibe grandes ofertas y promociones.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-bell"></i>
                                </div>
                                <h4>La mejor opción</h4>
                                <p>Mismo precio que si pidieras al restaurante. Miles de platos diferentes
                                    entre los que elegir</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <h4>Satisfacción</h4>
                                <p>Garantia 100% en nuestros productos.Revisa las opiniones de nuestros usuarios satisfechos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div id="latest-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>NUESTROS RESTAURANTES</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>

                    <!--********RESTAURANTES
                    //se genera automaticamente desde la base de datos
                    -->
                    <div class="row">
                        <a name="restaurantes"></a>
                        <?php
                        foreach($restaurantes as $restaurante){
                            //del restarante cojemos el nombre telefono etc......
                            echo "<div class=\"col-md-4 col-sm-6\">";
                            echo "<div class=\"blog-post\">";
                            echo "<div class=\"blog-thumb\">";
                            echo '<img src="'.base_url()."assets/images/".$restaurante->imagen.'">'."\n";
                            echo "</div>";
                            echo " <div class=\"blog-content\">";
                            echo "<div class=\"content-show\">";
                            echo "<h4><a style='text-decoration: underline' href='".site_url('productos/listadoProductos/'.$restaurante->id)."'>$restaurante->nombre</a></h4>";
                            echo "<span class=\"fa fa-home\"> $restaurante->direccion</span>";
                            echo "<br>";
                            echo "<span class=\"fa fa-phone\" style='color: white'> $restaurante->telefono</span>";
                            echo "</div>";
                            echo "<div class=\"content-hide\">";
                            echo "<p>$restaurante->descripcion</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }

                        ?>



                    </div>
                </div>
            </div>


            <div id="testimonails">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h2>Que dicen de nosotros</h2>
                                <img src="<?php echo base_url(); ?>assets/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="testimonails-slider">
                              <ul class="slides">
                                <li>
                                    <div class="testimonails-content">
                                        <p>Excelente trabajo, gracias a ellos he aumentado mis ventas y he porporcionado a mis clientes un trabajo que no tenia.</p>
                                        <h6>Eduardo - <a href="#">Pizzeria & Restaurante La Gondola</a></h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="testimonails-content">
                                        <p>Estoy muy satisfecho con el servicio que me ofrece pedidosaunclick.com ya que ha mejorado mis ventas mensuales.</p>
                                        <h6>Andrés - <a href="#">Restaurante La presumida</a></h6>
                                    </div> 
                                </li>
                                <!--<li>
                                    <div class="testimonails-content">
                                        <p>Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus. Ut dignissim nec arcu nec hendrerit sed arcu odio, sagittis vel diam in, malesuada malesuada risus. Aenean a sem leo. Nam ultricies dolor et mi tempor, non pulvinar felis sollicitudin.</p>
                                        <h6>Tanya - <a href="#">Creative Director</a></h6>
                                    </div>
                                </li>-->
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