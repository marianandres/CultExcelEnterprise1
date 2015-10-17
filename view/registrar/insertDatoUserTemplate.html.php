<?php
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php
$locNombre = localidadTableClass::NOMBRE;
$locId = localidadTableClass::ID;
$tipoDocNombre = tipoDocumentoTableClass::NOMBRE;
$tipoDocId = tipoDocumentoTableClass::ID;
?>
<!-- Full Body Container -->
<div id="container" class="boxed-page">
    <?php view::includePartial('partials/header.html') ?>    
    <div class="section purchase">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class=" col-lg-6 col-md-8 col-sm-12 col-xs-12">
                    <?php view::includeHandlerMessage() ?>
                    </br>
                    <?php // view::includePartial('registrar/formDatoUser')  ?>
                    <form  id="registerForm" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('registrar', 'createDatoUser') ?>">
                        <div class="row form-register">
                            <h2> Informacion De La Cuenta <small><?php echo i18n::__('Disfrutalo') ?></small>
                        </div>
                        <hr style="height: 5px;
                            border-top: 0;
                            background: #c4e17f;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -moz-linear-gradieRegistratent(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                            background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" placeholder="Nombres" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" class="form-control input-lg" placeholder="Apellidos" required>
                                </div>
                            </div>  
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>"> Seleccionar Genero :</label>
                                    <select class="form-control" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" required>
                                        <option value="1"> Masculino</option>
                                        <option value="2"> Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>"> Fecha De Nacimiento :</label>
                                    <input class="form-control input-lg"  type="date" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>"  required >
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="form-group">
                                    <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>"> Selecciona Tu Ciudad :</label>
                                    <select class="form-control" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" required>
                                        <?php foreach ($objLocalidad as $localidad): ?>
                                            <option value="<?php echo $localidad->$locId ?>"><?php echo $localidad->$locNombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <!--                                <div class="form-group">
                                                                    <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" placeholder="Organizacion Id" required >
                                                                </div>-->-->
                            </div> 
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>"> Seleccionar Tipo De Documeto:</label>
                                    <select class="form-control" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" required>
                                        <?php foreach ($objTipoDoc as $TipoDoc): ?>
                                            <option value="<?php echo $TipoDoc->$tipoDocId ?>"><?php echo $TipoDoc->$tipoDocNombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label for="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::DOCUMENTOID, true) ?>"> Selecciona Tu Ciudad :</label>
                                    <input class="form-control input-lg" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::DOCUMENTOID, true) ?>" placeholder="Numero Tipo Documento" required >
                                </div> 
                            </div>
                            <!--    <div class="row form-register">
                                    <div class="col-xs-4 col-sm-3 col-md-3">
                                        <span class="button-checkbox">
                                            <button type="button" class="btn" data-color="info" ><?php echo i18n::__('acuerdo') ?> </button>
                            
                                            <input type="checkbox" name="acceptTerms" id="t_and_c" class="hidden">
                                        </span>
                                    </div>
                                    <div class="col-xs-8 col-sm-9 col-md-9 ">
                            <?php echo i18n::__('Click') ?> <strong class="label label-primary"><?php echo i18n::__('Registrarse') ?>,</strong><?php echo i18n::__('Acuerdo') ?><a href="#" style="color: #CC0000"  data-toggle="modal" data-target="#t_and_c_m"><?php echo i18n::__('Terminos') ?></a> <?php echo i18n::__('Establecido') ?>    </div>
                                </div>-->
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
                                    <button type="submit" class="btn btn-success btn-block btn-lg"> Actualizar</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div><!-- .container -->
    </div>
</div>
<?php view::includePartial('partials/footer.html') ?>
<!-- Go To Top Link -->
<a href="#" class="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
<div id="loader" style="display: none;">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!--<div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: 999999999; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;">
    <div style="position: relative; top: 0px; float: right; width: 5px; height: 74px; border: 0px; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; background-color: rgb(51, 51, 51); background-clip: padding-box;">
    </div>
</div>-->
</div>
<!-- End Full Body Container -->
