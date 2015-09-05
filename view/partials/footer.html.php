<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<!-- Start Footer Section -->
<footer>
    <div class="container">
        <div class="row footer-widgets">


            <!-- Start Subscribe & Social Links Widget -->
            <div class="col-md-3 col-xs-12">
                <div class="footer-widget mail-subscribe-widget">
                    <h4>Get in touch<span class="head-line"></span></h4>
                    <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                    <form class="subscribe">
                        <input type="text" placeholder="mail@example.com">
                        <input type="submit" class="main-button" value="Send">
                    </form>
                </div>
                <div class="footer-widget social-widget">
                    <h4>Follow Us<span class="head-line"></span></h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                        </li>

                        <li>
                            <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                        </li>

                    </ul>
                </div>
            </div><!-- .col-md-3 -->
            <!-- End Subscribe & Social Links Widget -->


            <!-- Start Contact Widget -->
            <div class="col-md-3 col-xs-12">
                <div class="footer-widget contact-widget">
                    <h4><img src="<?php echo routing::getInstance()->getUrlImg('footer-margo.png') ?>" class="img-responsive" alt="Footer Logo" /></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    <ul>
                        <li><span>Phone Number:</span> +01 234 567 890</li>
                        <li><span><?php echo i18n::__('Email') ?></span><?php echo i18n::__('@') ?></li>
                        <li><span>Website:</span> www.yourdomain.com</li>
                    </ul>
                </div>
            </div><!-- .col-md-3 -->
            <!-- End Contact Widget -->


        </div><!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy;<?php echo i18n::__('Derechos') ?><a href="#"><?php echo i18n::__('Autores') ?> </a> </p>
                </div><!-- .col-md-6 -->
                <div class="col-md-6">
                    <ul class="footer-nav">
                        <li><a href="#">Sitemap</a>
                        </li>
                        <li><a href="#"><?php echo i18n::__('Politicas') ?></a>
                        </li>
                        <li><a href="#"><?php echo i18n::__('Contacto') ?></a>
                        </li>
                    </ul>
                </div><!-- .col-md-6 -->                    
            </div><!-- .row -->
        </div>
        <!-- End Copyright -->

    </div>
</footer>
<!-- End Footer Section -->
