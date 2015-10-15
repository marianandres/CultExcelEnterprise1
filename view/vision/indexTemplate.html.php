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
                        <h4><?php echo i18n::__('Nosotros') ?> <span class="head-line"></span></h4>
                        <ul>
                            <li>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('vision', 'index') ?>" style="color: #ee1e2d"><?php echo i18n::__('Vision') ?></a>
                            </li>
                            <li>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('mision', 'index') ?>"><?php echo i18n::__('Mision') ?></a>
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
                            <a href="#">
                                <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                <img alt="" src="images/blog-05.jpg">
                            </a>
                        </div>-->
                        <!-- Post Content -->
                        <div class="post-content">
                            <h1 class="page-header"><?php echo i18n::__('Vision') ?></h1>
                            <p class="JustifyFull">
                            </br><?php echo i18n::__('nuestraempresa') ?>
                            
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