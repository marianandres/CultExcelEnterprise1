<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<!-- Full Body Container -->
<div id="container" class="boxed-page">


    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!--  </header> -->
    <!-- End Header Section -->

    <!-- Start Services Section -->
    <div class="section service">
        <div class="container">
            <form id="eventForm" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'create') ?>" onSubmit="return validate();" >

            <div class="" style="background-image:url(<?php echo routing::getInstance()->getUrlImg('patterns/12.png') ?>); padding: 15px; border-radius: 10px;">      
                <div class="text-right">
                    <div class="col-md-offset-6">
                        
                            <a class="btn btn-danger btn-bordered" href="#"  style="color: whitesmoke; font-weight: bold;">Guardar</a>
                            <a class="btn btn-info" href="#"  style="color: whitesmoke; font-weight: bold;">Previsualizacion</a>
                            <a class="btn btn-success" href="#"  style="color: whitesmoke; font-weight: bold;">Publicar Evento</a>
                    </div>
                </div>
            </div>
            <div class="row">

                <hr style="height: 5px;
                    border-top: 0;
                    background: #c4e17f;
                    border-radius: 5px;
                    background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                    background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                    background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                    background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>        
                            <a class="navbar-brand" href="<?php echo routing::getInstance()->getUrlWeb('homepage', 'index') ?>"><h1><strong>Crear Evento<?php echo i18n::__('') ?>  |</strong></h1></a>          
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!--              <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                            <li><a href="#">Link</a></li>
                                          </ul>-->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="active" href="#">Editar</a></li>
                                <li><a href="#">Diseño</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <?php view::includeHandlerMessage() ?>
                <?php view::includePartial('eventos/formUser', array('mensaje' => $mensaje)) ?>
                <div  style="background-image:url(<?php echo routing::getInstance()->getUrlImg('parallax/back.png') ?>); padding: 10px; border-radius: 10px;">
                    <div class="text-center"></br>
                        <h1 style="color: whitesmoke;">Buena Esa! Ya Casi Has Terminado!.</h1></br>
                        <button class="btn btn-danger btn-bordered" href="#"  style="color: whitesmoke; font-weight: bold;">Guardar</button>
                        <a class="btn btn-info" href="#"  style="color: whitesmoke; font-weight: bold;">Previsualizacion</a>
                        <a class="btn btn-success" href="#"  style="color: whitesmoke; font-weight: bold;">Publicar Evento</a>
                    </div>
                </div>

            </div><!-- .row -->
            </form>
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