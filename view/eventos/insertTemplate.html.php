<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php $id = categoriaTableClass::ID ?>
<?php $nombre = categoriaTableClass::NOMBRE ?>
<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!--  </header> -->
    <!-- End Header Section -->

    <!-- Start Services Section -->
    <div class="section service">
        <div class="container">
            <form enctype="multipart/form-data" id="eventForm" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('eventos', 'create') ?>" >

                <div class="" style="background-image:url(<?php echo routing::getInstance()->getUrlImg('patterns/12.png') ?>); padding: 15px; border-radius: 10px;">      
                    <div class="text-right">
                        <div class="col-md-offset-6">
                            <button type="submit" class="btn btn-success" href="#"  style="color: whitesmoke; font-weight: bold;"><?php echo i18n::__('PublicarEvento') ?></button>
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
                                <a class="navbar-brand"><h1><strong><?php echo i18n::__('Crear') ?>  |</strong></h1></a>          
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <!--              <ul class="nav navbar-nav">
                                                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                                                <li><a href="#">Link</a></li>
                                              </ul>-->
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="active" href="#"><?php echo i18n::__('Editar') ?></a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    <?php view::includeHandlerMessage() ?>
                    <?php view::includePartial('eventos/formUser') ?>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>"> <?php echo i18n::__('TIPOEVENTO') ?>:</label>
                            <select class="form-control" name="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" required>
<!--                                <option><?php echo i18n::__('SelecTipoEvento') ?></option>-->
                                <?php foreach ($objCategoria as $categoria): ?>
                                    <option value="<?php echo $categoria->$id ?>"><?php echo $categoria->$nombre ?></option>
                                <?php endforeach ?>
        <!--                    <option value="2"><?php echo i18n::__('Categoria2') ?></option>-->
                            </select>
                        </div>
                    </div>
                </div>
        </div></br>
        <!-- end formilario-->
        <div  style="background-image:url(<?php echo routing::getInstance()->getUrlImg('parallax/back.png') ?>); padding: 10px; border-radius: 10px;">
            <div class="text-center"></br>
                <h1 style="color: whitesmoke;"><?php echo i18n::__('BuenaEsaTerminado') ?></h1></br>
                <button type="submit" class="btn btn-success"  style="color: whitesmoke; font-weight: bold;"><?php echo i18n::__('PublicarEvento') ?></button>
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