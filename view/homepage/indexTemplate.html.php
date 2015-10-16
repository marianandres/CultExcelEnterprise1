<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n;
use mvc\view\viewClass as view;
use mvc\session\sessionClass as session;
?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">
    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!-- Start Home Page Slider -->
    <section id="home">
        <?php echo view::includeHandlerMessage() ?>
        <?php if (session::getInstance()->isUserAuthenticated() == true) { ?>
            <?php if (usuarioTableClass::getVerifyUser(mvc\session\sessionClass::getInstance()->getUserId()) == 0) { ?>
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Warning!</strong> Bienvenido! Te has registrado en El Portal Cult Excel Enterprise. Porfavor Ingrese a Su Correo electronico Para Verificar su Cuenta! <a data-toggle="modal" data-target="#userVerify"><i class="fa fa-link"></i> Verificar!</a>
                </div>
            <?php } ?>
        <?php } ?>
        <!-- Carousel -->
        <div id="main-slide" class="carousel slider" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
                <li data-target="#main-slide" data-slide-to="3"></li>
            </ol>
            <!--/ Indicators end-->
            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('slider/bg1.jpg') ?>" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated2">
                                <span><?php echo i18n::__('Bienvenida') ?><strong><?php echo i18n::__('EXCEL') ?></strong></span>
                            </h2>
                            <h3 class="animated3">
                                <span><?php echo i18n::__('Gente') ?></span>
                            </h3>
                            <p class="animated4"><a href="#" class="slider btn btn-primary"><?php echo i18n::__('Quienes') ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('slider/bg2.jpg') ?>" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4">
                                <span><strong><?php echo i18n::__('EXCEL') ?></strong>    <?php echo i18n::__('evento') ?></span>
                            </h2>
                            <h3 class="animated5">
                                <span><?php echo i18n::__('Clave') ?></span>
                            </h3>	
<!--                            <p class="animated6"><a href="#" class="slider btn btn-primary">Buy Now</a>-->
                            <!--                            </p>-->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('slider/bg3.jpg') ?>" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated7 white">
                                <span><?php echo i18n::__('Publicar') ?><strong><?php echo i18n::__('Evento') ?></strong></span>
                            </h2>
                            <h3 class="animated8 white">
                                <span><?php echo i18n::__('Esperar') ?></span>
                            </h3>	
                            <div class="">
                                <a class="animated4 slider btn btn-primary btn-min-block" href="#"><?php echo i18n::__('Cuando') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                <div class="item">
                    <img class="img-responsive" src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('slider/bg4.jpg') ?>" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated7 white">
                                <span> <span style="color: #f7931e;"><?php echo i18n::__('mejor') ?></span> <strong><?php echo i18n::__('Arte') ?></strong></span>
                            </h2>
                            <h3 class="animated8 white">
                                <span style="color: #f7931e;"><?php echo i18n::__('Disfruta') ?></span>
                            </h3>	
                            <div class="">
                                <a class="animated4 slider btn btn-primary btn-min-block" href="#"><?php echo i18n::__('Conocer') ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->
    <!-- Start Services Section -->
    <div class="section service">
        <div class="container">
            <div class="row">

                <!--                 Start Service Icon 1 
                                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
                                    <div class="service-icon">
                                        <i class="fa fa-leaf icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>High Quality Theme</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                
                                    </div>
                                </div>
                                 End Service Icon 1 
                
                                 Start Service Icon 2 
                                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
                                    <div class="service-icon">
                                        <i class="fa fa-desktop icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Full Responsive</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                                    </div>
                                </div>
                                 End Service Icon 2 
                
                                 Start Service Icon 3 
                                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
                                    <div class="service-icon">
                                        <i class="fa fa-eye icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Retina Display Ready</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                                    </div>
                                </div>
                                 End Service Icon 3 
                
                                 Start Service Icon 4 
                                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="04">
                                    <div class="service-icon">
                                        <i class="fa fa-code icon-large"></i>
                                    </div>
                                    <div class="service-content">
                                        <h4>Clean Modern Code</h4>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat Lorem pariatur</p>
                                    </div>
                                </div>
                                 End Service Icon 4 -->

                <!-- Start Service Icon 5 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="05">

                    <div class="service-content">
                        <h2><?php echo i18n::__('Crea') ?></h2>
                        <p><?php echo i18n::__('detalle') ?></p>
                    </div>
                </div>
                <!-- End Service Icon 5 -->

                <!-- Start Service Icon 6 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="06">

                    <div class="service-content">
                        <h2><?php echo i18n::__('Compartir') ?></h2>
                        <p><?php echo i18n::__('Invitacion') ?></p>
                    </div>
                </div>
                <!-- End Service Icon 6 -->

                <!-- Start Service Icon 7 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="07">

                    <div class="service-content">
                        <h2><?php echo i18n::__('Gratis') ?></h2>
                        <p><?php echo i18n::__('Gratuitos') ?></p>
                    </div>
                </div>
                <!-- End Service Icon 7 -->

                <!-- Start Service Icon 8 -->
                <div class="col-md-3 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="08">

                    <div class="service-content">
                        <h2><?php echo i18n::__('Tarifas') ?></h2>
                        <p><?php echo i18n::__('Ofrecemos') ?></p>
                    </div>
                </div>
                <!-- End Service Icon 8 -->

            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- End Services Section -->


    <!-- Start Purchase Section -->
    <div class="section purchase">
        <div class="container">

            <!-- Start Video Section Content -->
            <div class="section-video-content text-center">

                <!-- Start Animations Text -->
                <h1 class="fittext wite-text uppercase tlt">
                    <span class="texts">
                        <span><?php echo i18n::__('Moderno') ?></span>
                        <span><?php echo i18n::__('Eficaz') ?></span>
                        <span><?php echo i18n::__('Innovador') ?></span>
                        <span><?php echo i18n::__('Sencillo') ?></span>
                        <span><?php echo i18n::__('Amigable') ?></span>
                    </span>
                    <?php echo i18n::__('Manera') ?><br/><?php echo i18n::__('Forma') ?><strong><?php echo i18n::__('Para') ?></strong> <?php echo i18n::__('Nube') ?>
                </h1>
                <!-- End Animations Text -->


                <!-- Start Buttons -->
                <a href="#" class="btn-system btn-large border-btn btn-wite"><i class="fa fa-tasks"></i><?php echo i18n::__('Conoce') ?></a>
                <a href="#" class="btn-system btn-large btn-wite"><i class="fa fa-download"></i> <?php echo i18n::__('Registrate') ?></a>

            </div>
            <!-- End Section Content -->

        </div><!-- .container -->
    </div>
    <!-- End Purchase Section -->









    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

        <!-- Start Big Heading -->
        <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
            <h1><strong><?php echo i18n::__('Disfrute') ?>  <?php echo i18n::__('Evento') ?>  <?php echo i18n::__('Ciudad') ?></strong></h1>
        </div>
        <!-- End Big Heading -->

        <!-- Start Recent Projects Carousel -->
        <ul id="portfolio-list" data-animated="fadeIn">
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/1.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('GANOEXCEL') ?></span>
                    <p class="body"><?php echo i18n::__('REGIONAL') ?></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/1.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/2.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('CENTROEVENTOS') ?></span>
                    <p class="body"><?php echo i18n::__('SUPERSABADO') ?></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/2.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/3.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('NUEVAVIDA') ?></span>
                    <p class="body"><?php echo i18n::__('2015') ?></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/3.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/4.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('Sr') ?></span>
                    <p class="body"><?php echo i18n::__('CONFERENCIA') ?></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/4.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/5.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('RicosMundo') ?></span>
                    <p class="body"><?php echo i18n::__('BuscanTrabajo') ?></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/5.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/6.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('TODOQUIERES') ?></span>
                    <p class="body"></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/6.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/7.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('OPEN') ?></span>
                    <p class="body"><?php echo i18n::__('Edicionespecial') ?></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/7.png') ?>"><i class="more">+</i></a>

            </li>
            <li>
                <img src="<?php echo routing::getInstance()->getUrlImg('Portfolio/8.png') ?>" alt="" />
                <div class="portfolio-item-content">
                    <span class="header"><?php echo i18n::__('Luchandosueños') ?></span>
                    <p class="body"></p>
                </div>
                <a href="<?php echo routing::getInstance()->getUrlImg('Portfolio/8.png') ?>"><i class="more">+</i></a>

            </li>

        </ul>
        <!-- End Recent Projects Carousel -->
    </div>
    <!-- Start Team Member Section -->
    <div class="section" style="background:#000000;">
        <div class="container">

            <!-- Start Big Heading -->
            <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
                <h1><strong><?php echo i18n::__('TESTIMONIOSVIDA') ?></strong></h1>
            </div>
            <!-- End Big Heading -->

            <!-- Some Text -->
            <p class="text-center"><h3><strong>" <?php echo i18n::__('secreto') ?>"</strong></h3>
            <br>

            <!-- Start Team Members -->
            <div class="row">

                <!-- Start Memebr 1 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
                    <div class="team-member modern">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo">
                            <img src="<?php echo routing::getInstance()->getUrlImg('team/face_1.png') ?>" alt="" />
                            <div class="member-name"><?php echo i18n::__('AndresGuzman') ?> <span><?php echo i18n::__('DiamanteRoyal') ?></span>
                            </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info">
                            <p> <a href="https://www.youtube.com/results?search_query=testimonios+andres+guzman">https://www.youtube.com/results?search_query=testimonios+andres+guzman<a/></p>
                        </div>
                        <!-- Start Progress Bar 1 -->

                        <!-- Memebr Social Links -->

                    </div>
                </div>
                <!-- End Memebr 1 -->

                <!-- Start Memebr 2 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="04">
                    <div class="team-member modern">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo">
                            <img src="<?php echo routing::getInstance()->getUrlImg('team/face_2.png') ?>" alt="" />
                            <div class="member-name"><?php echo i18n::__('AuraSanchez') ?> <span><?php echo i18n::__('Diamante') ?></span>
                            </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info">
                            <p><a href="https://www.youtube.com/watch?v=qq_vkVxE2Uw">https://www.youtube.com/watch?v=qq_vkVxE2Uw<a/> </p>
                        </div>

                    </div>
                </div>
                <!-- End Memebr 2 -->

                <!-- Start Memebr 3 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="05">
                    <div class="team-member modern">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo">
                            <img src="<?php echo routing::getInstance()->getUrlImg('team/face_3.png') ?>" alt="" />
                            <div class="member-name"><?php echo i18n::__('HugoDiaz') ?>
                            </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info">
                            <p><a href="https://www.youtube.com/watch?v=lZMW-slEZso">https://www.youtube.com/watch?v=lZMW-slEZso<a/> </p>
                        </div>

                    </div>
                </div>
                <!-- End Memebr 3 -->

                <!-- Start Memebr 4 -->
                <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="06">
                    <div class="team-member modern">
                        <!-- Memebr Photo, Name & Position -->
                        <div class="member-photo">
                            <img src="<?php echo routing::getInstance()->getUrlImg('team/face_4.png') ?>" alt="" />
                            <div class="member-name"><?php echo i18n::__('JuanPabloPineda') ?> <span><?php echo i18n::__('Diamante') ?></span>
                            </div>
                        </div>
                        <!-- Memebr Words -->
                        <div class="member-info">
                            <p><a href="https://www.youtube.com/watch?v=jbTX4KYGTpQ">https://www.youtube.com/watch?v=jbTX4KYGTpQ<a/> </p>
                        </div>

                    </div>
                </div>
                <!-- End Memebr 4 -->
            </div>
            <!-- End Team Members -->
        </div><!-- .container -->
    </div>
    <!-- End Team Member Section -->
<!--    <div id="parallax-one" class="parallax" style="background-image:url(<?php echo routing::getInstance()->getUrlImg('parallax/bg-02.jpg') ?>);">
        <div class="parallax-text-container-1">
            <div class="parallax-text-item">
                <div class="container">
                    <div class="row">
                         Start Video Section Content 
                        <div class="section-video-content text-center">

                             Start Animations Text 
                            <h1 class="fittext wite-text uppercase tlt">
                                <span class="texts">
                                    <span><?php echo i18n::__('Creacion') ?></span>
                                    <span><?php echo i18n::__('Imagina') ?></span>

                                </span>
                                <strong><?php echo i18n::__('Propio') ?></strong></br>
                                <?php echo i18n::__('Reune') ?> </br>
                                <?php echo i18n::__('Excel') ?>
                            </h1>
                             End Animations Text 
                             Start Buttons 
                            <a href="<?php echo routing::getInstance()->getUrlWeb('registrar', 'insert') ?>" class="btn-system btn-large btn-wite"><i class="fa fa-plus-square-o"></i> <?php echo i18n::__('Comenzar') ?></a>
                        </div>
                         End Section Content   
                    </div>         
                </div>       
            </div>
        </div>        
    </div>-->
    <!-- Start Pricing Table Section -->
    <div class=" section pricing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Start Big Heading -->
                    <div class="big-title text-center">
                        <h1><strong><?php echo i18n::__('Ahorra') ?></strong><strong><?php echo i18n::__('Ti') ?></strong></h1>
                    </div>
                    <!-- End Big Heading -->


                </div>
            </div>
            <div class="row pricing-tables">

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="pricing-table highlight-plan">
                        <div class="plan-name">
                            <h3><?php echo i18n::__('Basico') ?></h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value"><?php echo i18n::__('$180.000') ?><span></div>

                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><strong><?php echo i18n::__('Recibes4') ?></li>
                                <li><strong> <?php echo i18n::__('RecibesCodigo') ?></li>
                                <li><strong><?php echo i18n::__('Capacitacion') ?></strong></li>
                                <li><strong><?php echo i18n::__('Ganasdosformas') ?></strong></li>

                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="http://www.ganoexcel.com.co/" class="btn-system btn-small border-btn"><?php echo i18n::__('Registrar') ?></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="pricing-table highlight-plan">
                        <div class="plan-name">
                            <h3><?php echo i18n::__('Relampago') ?></h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value"><?php echo i18n::__('$450.000') ?></div>
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><strong><?php echo i18n::__('9Cajas') ?></strong><?php echo i18n::__('GanoCafé') ?></li>
                                <li><strong><?php echo i18n::__('TuPagina') ?></strong><?php echo i18n::__('Web') ?> </li>
                                <li><strong><?php echo i18n::__('Capacitacion') ?></strong></li>
                                <li><strong><?php echo i18n::__('12Formas') ?></strong> <?php echo i18n::__('Ganar') ?></li>
                                <li><strong><?php echo i18n::__('20%') ?></strong> <?php echo i18n::__('Bonos') ?> </li>
                                <li><strong><?php echo i18n::__('Ganas$56.250') ?></strong><?php echo i18n::__('Afiliaciónesnuevas') ?></li>
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="http://www.ganoexcel.com.co/" class="btn-system btn-small border-btn"><?php echo i18n::__('Registrar') ?></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="pricing-table highlight-plan">
                        <div class="plan-name">
                            <h3><?php echo i18n::__('Profesional') ?></h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value"><?php echo i18n::__('$1´125.000') ?></div>
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><strong><?php echo i18n::__('22Cajas') ?></strong><?php echo i18n::__('GanoCafé') ?></li>
                                <li><strong><?php echo i18n::__('TuPagina') ?></strong><?php echo i18n::__('Web') ?> </li>
                                <li><strong><?php echo i18n::__('Capacitacion') ?></strong></li>
                                <li><strong><?php echo i18n::__('12Formas') ?></strong> <?php echo i18n::__('Ganar') ?></li>
                                <li><strong><?php echo i18n::__('50%') ?></strong>  <?php echo i18n::__('Bonos') ?></li>
                                <li><strong><?php echo i18n::__('Ganas$168.500') ?></strong><?php echo i18n::__('Afiliaciónesnuevas') ?></li>
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="http://www.ganoexcel.com.co/" class="btn-system btn-small border-btn"><?php echo i18n::__('Registrar') ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="pricing-table highlight-plan">
                        <div class="plan-name">
                            <h3><?php echo i18n::__('Premium') ?></h3>
                        </div>
                        <div class="plan-price">
                            <div class="price-value"><?php echo i18n::__('$2´250.000') ?> </span></div>
                        </div>
                        <div class="plan-list">
                            <ul>
                                <li><strong><?php echo i18n::__('45Cajas') ?></strong><?php echo i18n::__('GanoCafé') ?></li>
                                <li><strong><?php echo i18n::__('TuPagina') ?></strong><?php echo i18n::__('Web') ?> </li>
                                <li><strong><?php echo i18n::__('Capacitacion') ?></strong></li>
                                <li><strong><?php echo i18n::__('12Formas') ?></strong> <?php echo i18n::__('Ganar') ?></li>
                                <li><strong><?php echo i18n::__('100%') ?></strong><?php echo i18n::__('Bonos') ?></li>
                                <li><strong><?php echo i18n::__('Ganas$337.000') ?></strong><?php echo i18n::__('Afiliaciónesnuevas') ?></li>
                            </ul>
                        </div>
                        <div class="plan-signup">
                            <a href="http://www.ganoexcel.com.co/" class="btn-system btn-small border-btn"><?php echo i18n::__('Registrar') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pricing Table Section -->
    <!-- Start Client/Partner Section -->
    <div class="partner">
        <div class="container">
            <div class="row">
                <!--
                                 Start Big Heading 
                                <div class="big-title text-center">
                                    <h1>Our Happy <strong>Clients</strong></h1>
                                    <p class="title-desc">Partners We Work With</p>
                                </div>
                                 End Big Heading 
                                Start Clients Carousel
                                <div class="our-clients">
                                    <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">
                
                                         Client 1 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c1.png" alt="" /></a>
                                        </div>
                
                                         Client 2 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c2.png" alt="" /></a>
                                        </div>
                
                                         Client 3 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c3.png" alt="" /></a>
                                        </div>
                
                                         Client 4 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c4.png" alt="" /></a>
                                        </div>
                
                                         Client 5 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c5.png" alt="" /></a>
                                        </div>
                
                                         Client 6 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c6.png" alt="" /></a>
                                        </div>
                
                                         Client 7 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c7.png" alt="" /></a>
                                        </div>
                
                                         Client 8 
                                        <div class="client-item item">
                                            <a href="#"><img src="images/c8.png" alt="" /></a>
                                        </div>
                
                                    </div>
                                </div>
                                 End Clients Carousel -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- End Client/Partner Section -->
    <!-- Start Footer Section -->
    <?php mvc\view\viewClass::includePartial('partials/footer.html') ?>
    <!-- End Footer Section -->
</div>
<!-- End Full Body Container -->
<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>