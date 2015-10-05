<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>

    <!-- Start Purchase Section -->
    <div class="section service">
        <div class="container">
            <div class="row">

                <!--Sidebar-->
                <div class="col-md-3 sidebar left-sidebar">

                    <!-- Search Widget -->
                    <!-- Categories Widget -->
                    <div class="widget widget-categories">
                        <h4>Acerca De Nosotros <span class="head-line"></span></h4>
                        <ul>
                            <li>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('vision', 'index') ?>">Vision</a>
                            </li>
                            <li>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('mision', 'index') ?>" style="color: #ee1e2d">Mision</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!--End sidebar-->

                <!-- Start Blog Posts -->
                <div class="col-md-9 blog-box">
                    <!-- Start Post -->
                    <div class="blog-post standard-post">
                        <!-- Post Thumb -->
<!--                        <div class="post-head">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                            <img alt="" src="<?php echo routing::getInstance()->getUrlImg('vision&mision/vision.jpg') ?>">
                        </div>-->
                        <!-- Post Content -->
                        <div class="post-content">
                            <h1 class="page-header">Mision</h1>
                            <p class="JustifyFull">
                            <h3>Nuestra misión,</br></h3>
                            </br>

                            Brindar y  un excelente y completo servicio en publicación de eventos, donde la seriedad y 
                            cumplimiento son la garantía para lograr una ocasión inolvidable, donde proveeremos las mejores 
                            herramientas y el mejor liderazgo para asistir a los miembros de nuestro team en el desarrollo 
                            de un negocio solido del NETWORK MARKETING, y convertirse, de la manera más efectiva y eficiente,
                            en ejecutivos exitosos.
                            </p>

                        </div>
                    </div>
                    <!-- End Post -->
                </div>
                <!-- End Blog Posts -->

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