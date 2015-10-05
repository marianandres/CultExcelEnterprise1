<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<!-- Start Footer Section -->
<footer>
    <div class="container">
        <div class="row footer-widgets">
            <!-- Start Contact Widget -->
            <div class="col-md-3 col-xs-12">
                <div class="footer-widget contact-widget">
                    <h4><img src="<?php echo routing::getInstance()->getUrlImg('footer/energiza.jpg') ?>" style="height: 300px" class="img-responsive" alt="Footer Logo" /></h4>
                   <p>PRUEBA LA DIFERENCIA: ENERGIZA</p>
                </div>
            </div><!-- .col-md-3 -->
            <!-- End Contact Widget -->
            <!-- Start Contact Widget -->
            <div class="col-md-3 col-xs-12">
                <div class="footer-widget contact-widget">
                    <h4><img src="<?php echo routing::getInstance()->getUrlImg('footer/revitaliza.jpg') ?>" style="height: 300px" class="img-responsive" alt="Footer Logo" /></h4>
                   <p>SIENTE LA DIFERENCIA: REVITALIZA</p>
                </div>
            </div><!-- .col-md-3 -->
            <!-- End Contact Widget -->
            <!-- Start Contact Widget -->
            <div class="col-md-3 col-xs-12">
                <div class="footer-widget contact-widget">
                    <h4><img src="<?php echo routing::getInstance()->getUrlImg('footer/armoniza.jpg') ?>" style="height: 300px" class="img-responsive" alt="Footer Logo" /></h4>
                    <p>HAZ LA DIFERENCIA: ARMONIZA</p>
                </div>
            </div><!-- .col-md-3 -->
            <!-- End Contact Widget -->
            <!-- Start Contact Widget -->
            <div class="col-md-3 col-xs-12">
                <div class="footer-widget contact-widget">
                    <h4><img src="<?php echo routing::getInstance()->getUrlImg('footer/socializa.jpg') ?>" style="height: 300px" class="img-responsive" alt="Footer Logo" /></h4>
                    <p>SE LA DIFERENCIA: SOCIALIZA</p>
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
                         <li><?php  ?></li>
                        <li><a href="#">PQRS</a>
                        </li>
                        <li><a href="#"><?php echo i18n::__('Politicas') ?></a>
                        </li>
                        <li><a href="<?php echo routing::getInstance()->getUrlWeb('contact', 'index') ?>"><?php echo i18n::__('Contacto') ?></a>
                        </li>
                    </ul>
                </div><!-- .col-md-6 -->                    
            </div><!-- .row -->
        </div>
        <!-- End Copyright -->
    </div>
</footer>
<!-- End Footer Section -->