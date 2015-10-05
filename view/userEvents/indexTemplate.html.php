<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php
use mvc\config\configClass as config ?>
<?php
use \mvc\request\requestClass as request ?>
<?php $fechafnlpublicacion = eventoTableClass::FECHA_FINAL_PUBLICACION ?>
<?php $fechainipublicacion = eventoTableClass::FECHA_INICIAL_PUBLICACION ?>
<?php $fechafnlevento = eventoTableClass::FECHA_FINAL_EVENTO ?>
<?php $fechainievento = eventoTableClass::FECHA_INICIAL_EVENTO ?>
<?php $direccion = eventoTableClass::DIRECCION ?>
<?php $descripcion = eventoTableClass::DESCRIPCION ?>
<?php $usu = eventoTableClass::NOMBRE ?>
<?php $id = eventoTableClass::ID ?>
<?php $costo = eventoTableClass::COSTO ?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Eventos</h2>
                    <p>Eventos Recientes </p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Inicio</a></li>
                        <li>Eventos</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!--Sidebar-->
    <div class="col-md-3 sidebar left-sidebar">

<!--         Categories Widget 
        <div class="widget widget-categories">
            <h4>Categories <span class="head-line"></span></h4>
            <ul>
                <li>
                    <a href="#">Brandign</a>
                </li>
                <li>
                    <a href="#">Design</a>
                </li>
                <li>
                    <a href="#">Development</a>
                </li>
                <li>
                    <a href="#">Graphic</a>
                </li>
            </ul>
        </div>-->

        <!-- Popular Posts widget -->
        <!--        <div class="widget widget-popular-posts">
                    <h4>Popular Post <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
                            </div>
                            <div class="widget-content">
                                <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                                <span>Jul 29 2013</span>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>-->

    </div>
    <!--End sidebar-->

    <!-- Start Purchase Section -->
    <div class="section service">
        <div class="container">
            <div class="row">
                <h1 class="page-header">Mis Eventos</h1>
                <div class="  col-sm-9 ">
                    <ul class="event-list">
                        <?php foreach ($objEventos as $eventos): ?>
                        <li>
                                <time datetime="2014-07-20 0000">
                                    <span class="day"><?php echo $eventos->$fechainievento ?></span>

                                </time>
                                <div class="info">
                                    <h2 class="title"><?php echo $eventos->$usu ?></h2>
                                    <p class="desc"><?php echo $eventos->$descripcion ?></p>
                                    <p class="desc">Direccion: <?php echo $eventos->$direccion ?></p>
                                    <p class="desc">inicio:<?php echo $eventos->$fechainievento ?>  Fin: <?php echo $eventos->$fechafnlevento ?></p>
                                    
                                    <ul>
                                        <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Publicado: <?php echo $eventos->$fechainipublicacion ?></a></li>
                                        <li style="width:50%;"><span class="fa fa-money"></span> <?php echo $eventos->$costo ?></li>
                                    </ul>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
                                        <li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
                                        <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div><!-- .container -->
    </div>
    <!-- End Purchase Section --> 

    <!--  </header> -->
    <!-- End Header Section -->

    <!-- Start Services Section -->
    <?php mvc\view\viewClass::includePartial('partials/footer.html') ?>
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