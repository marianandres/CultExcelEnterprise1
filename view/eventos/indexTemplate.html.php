<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php // $lugarlatitud = eventoTableClass::LUGAR_LATITUD         ?>
<?php // $fechafnlpublicacion = eventoTableClass::FECHA_FINAL_PUBLICACION         ?>
<?php // $fechainipublicacion = eventoTableClass::FECHA_INICIAL_PUBLICACION         ?>
<?php // $fechafnlevento = eventoTableClass::FECHA_FINAL_EVENTO         ?>
<?php // $fechainievento = eventoTableClass::FECHA_INICIAL_EVENTO         ?>
<?php // $direccion = eventoTableClass::DIRECCION         ?>
<?php // $descripcion = eventoTableClass::DESCRIPCION         ?>
<?php // $usu = eventoTableClass::NOMBRE         ?>
<?php // $id = eventoTableClass::ID         ?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">


    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>

    <!-- Start Purchase Section -->
    <div class="section purchase">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">

                    <form role="form"  method="post" action="<?php echo routing::getInstance()->getUrlWeb('registrar', ((isset($objUsuario)) ? : 'create')) ?>">
                        <h2 style="color: #FFF;">Registrate <small style="color: #FFF;">Es Gratis ! Disfrutalo...</small></h2>
                        <hr style="height: 5px;
                            border-top: 0;
                            background: #c4e17f;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Nombre" tabindex="1" autofocus>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Apellido" tabindex="2">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="display_name" id="display_name" class="form-control input-lg" placeholder="Nombre Usuario" tabindex="3">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="4">
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirmar Password" tabindex="6">
                                </div>
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'>Expiration</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'> </label>
                                <input class="form-control" type="date">
                            </div>
                        </div>
                        <div class="row form-register">
                            <div class="col-xs-4 col-sm-3 col-md-3">
                                <span class="button-checkbox">
                                    <button type="button" class="btn" data-color="info" tabindex="7">  De Acuerdo</button>
                                    <input type="checkbox" name="t_and_c" id="t_and_c" class="hidden" value="1">
                                </span>
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-9 ">
                                Al Dar Click En <strong class="label label-primary">Registrarse</strong>, Tu Estas De Acuerdo Con <a href="#" style="color: #CC0000"  data-toggle="modal" data-target="#t_and_c_m">Los Terminos Y Condiciones</a> Establecido Por El Sitio Web, Incluyendo El Uso De Cookies.
                            </div>
                        </div>

                        <hr style="height: 5px;
                            border-top: 0;
                            background: #c4e17f;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <button type="submit" class="btn btn-success btn-block btn-lg" tabindex="7">Registrarse</button>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('homepage', 'index') ?>" class="btn btn-block btn-danger"><i class="fa fa-arrow-left"></i>  Regresar</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>


        </div><!-- .container -->
    </div>
    <!-- End Purchase Section --> 

    <!--  </header> -->
    <!-- End Header Section -->

    <!-- Start Services Section -->
    <div class="section service">
        <div class="container">

            <h1 class="page-header"><i class="fa fa-calendar"></i>  <?php echo i18n::__('eventos') ?></h1>
            <div class="row">



            </div><!-- .row -->
        </div><!-- .container -->
    </div>
    <!-- End Services Section -->


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