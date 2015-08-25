<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>


    <!-- Start Home Page Slider -->
    <section id="home">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slider" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>

            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('slider/bgcontact.jpg') ?>" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated2">
                                <span><strong><?php echo i18n::__('Estamos') ?></strong></span>
                            </h2>
                            <h3 class="animated3">
                                <span style="color: #2b2b2b"><?php echo i18n::__('Responder') ?></span>
                            </h3>
                            <p class="animated4"><a href="#" class="slider btn btn-primary"><?php echo i18n::__('Contacto') ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->
            <!--
                   Controls 
                  <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                  </a>
                  <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                  </a>-->
        </div>
        <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->
    <!-- Start Map -->
    <div id="map" data-position-latitude="23.858092" data-position-longitude="90.262181"></div>
    <script>
      (function ($) {
          $.fn.CustomMap = function (options) {

              var posLatitude = $('#map').data('position-latitude'),
                      posLongitude = $('#map').data('position-longitude');

              var settings = $.extend({
                  home: {latitude: posLatitude, longitude: posLongitude},
                  text: '<div class="map-popup"><h4>Web Development | ZoOm-Arts</h4><p>A web development blog for all your HTML5 and WordPress needs.</p></div>',
                  icon_url: $('#map').data('marker-img'),
                  zoom: 15
              }, options);

              var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

              return this.each(function () {
                  var element = $(this);

                  var options = {
                      zoom: settings.zoom,
                      center: coords,
                      mapTypeId: google.maps.MapTypeId.ROADMAP,
                      mapTypeControl: false,
                      scaleControl: false,
                      streetViewControl: false,
                      panControl: true,
                      disableDefaultUI: true,
                      zoomControlOptions: {
                          style: google.maps.ZoomControlStyle.DEFAULT
                      },
                      overviewMapControl: true,
                  };

                  var map = new google.maps.Map(element[0], options);

                  var icon = {
                      url: settings.icon_url,
                      origin: new google.maps.Point(0, 0)
                  };

                  var marker = new google.maps.Marker({
                      position: coords,
                      map: map,
                      icon: icon,
                      draggable: false
                  });

                  var info = new google.maps.InfoWindow({
                      content: settings.text
                  });

                  google.maps.event.addListener(marker, 'click', function () {
                      info.open(map, marker);
                  });

                  var styles = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "on"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

                  map.setOptions({styles: styles});
              });

          };
      }(jQuery));

      jQuery(document).ready(function () {
          jQuery('#map').CustomMap();
      });
    </script>
    <!-- End Map -->




    <!-- Start Content -->
    <div id="content">
        <div class="container">

            <div class="row">

                <div class="col-md-8">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span><?php echo i18n::__('Contact') ?></span></h4>

                    <!-- Start Contact Form -->
                    <div id="contact-form" class="contatct-form">
                        <div class="loader"></div>
                        <form action="mail.php" class="contactForm" name="cform" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name"><?php echo i18n::__('Name') ?><span class="required">*</span></label>
                                    <span class="name-missing"><?php echo i18n::__('PleaseN') ?></span>  
                                    <input id="name" name="name" type="text" value="" size="30">
                                </div>
                                <div class="col-md-4">
                                    <label for="e-mail"><?php echo i18n::__('Email') ?><span class="required">*</span></label>
                                    <span class="email-missing"><?php echo i18n::__('PleaseE') ?></span> 
                                    <input id="e-mail" name="email" type="text" value="" size="30">
                                </div>
                                <div class="col-md-4">
                                    <label for="url"><?php echo i18n::__('Website') ?></label>
                                    <input id="url" name="url" type="text" value="" size="30">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="message"><?php echo i18n::__('Add') ?></label>
                                    <span class="message-missing"><?php echo i18n::__('Say') ?></span>
                                    <textarea id="message" name="message" cols="45" rows="10"></textarea>
                                    <input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

                <div class="col-md-4">

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span><?php echo i18n::__('Information') ?></span></h4>

                    <!-- Some Info -->
                    <p><?php echo i18n::__('') ?>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:10px;"></div>

                    <!-- Info - Icons List -->
                    <ul class="icons-list">
                        <li><i class="fa fa-globe">  </i> <strong><?php echo i18n::__('Address') ?></strong><?php echo i18n::__('street') ?> </li>
                        <li><i class="fa fa-envelope-o"></i> <strong><?php echo i18n::__('Email') ?></strong><?php echo i18n::__('@in') ?> </li>
                        <li><i class="fa fa-mobile"></i> <strong><?php echo i18n::__('Phone') ?></strong><?php echo i18n::__('+') ?></li>
                    </ul>

                    <!-- Divider -->
                    <div class="hr1" style="margin-bottom:15px;"></div>

                    <!-- Classic Heading -->
                    <h4 class="classic-title"><span><?php echo i18n::__('Working') ?></span></h4>

                    <!-- Info - List -->
                    <ul class="list-unstyled">
                        <li><strong><?php echo i18n::__('Monday') ?></strong><?php echo i18n::__('am') ?></li>
                        <li><strong><?php echo i18n::__('Saturday') ?></strong><?php echo i18n::__('pm') ?></li>
                        <li><strong><?php echo i18n::__('Sunday') ?></strong> <?php echo i18n::__('Closed') ?></li>
                    </ul>

                </div>

            </div>

        </div>
    </div>
    <!-- End content -->

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

<!-- Modal logout -->
<div class="modal fade" id="myModal" tabindex="-1" style="margin-top: 150px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo i18n::__('Cerrar') ?></h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h3><strong><?php echo i18n::__('Logout') ?></strong> <?php echo i18n::__('Confirmation') ?></h3>
                    <p><?php echo i18n::__('') ?>Are you sure want to logout from this awesome system?</p>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No!</button>
                <a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>"  class="btn btn-success"><?php echo i18n::__('Deseo') ?></a>
            </div>
        </div>
    </div>
</div>
<!-- end Modal logout -->
