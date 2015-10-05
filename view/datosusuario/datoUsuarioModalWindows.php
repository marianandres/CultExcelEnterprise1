<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\request\requestClass as request ?>

<div class="modal fade" id="newUserData" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-user"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('DatoUsu') ?> </h3>

            </div>
            <div class="modal-body">
                <form  method="post" action="<?php echo routing::getInstance()->getUrlWeb('datosusuario', ((isset($objDatoUsuario)) ? 'update' : 'create')) ?>">
                    <?php if (isset($objDatoUsuario) == true): ?>

                        <input name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ID, true) ?>" value="<?php echo $objDatoUsuario[0]->$idDatoUsuario ?>" type="hidden">
                    <?php endif ?>
                    <div class="form-group col-lg-6">
                        <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$nombre : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" placeholder="<?php echo i18n::__('Nom') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="apellido" class="sr-only"><?php echo i18n::__('Apellido') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$apellido : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" placeholder="<?php echo i18n::__('Apellido') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">

                        <label for="genero" class="sr-only"><?php echo i18n::__('Genero') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$genero : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" placeholder="<?php echo i18n::__('Genero') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">    
                        <label for="userid" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$userid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true) ?>" placeholder="<?php echo i18n::__('usuario_id') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="tipoDocumentoId" class="sr-only"><?php echo i18n::__('documento') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" placeholder="<?php echo i18n::__('Documento') ?>" required autofocus>

                    </div> 
                    <div class="form-group col-lg-6">
                        <label for="fechanacimiento" class="sr-only"><?php echo i18n::__('Nacimiento') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>" placeholder="<?php echo i18n::__('Nacimiento') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">    
                        <label for="correo" class="sr-only"><?php echo i18n::__('Correo') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" placeholder="<?php echo i18n::__('Correo') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="localidad" class="sr-only"><?php echo i18n::__('Localidad') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" placeholder="<?php echo i18n::__('Localidad') ?>" required autofocus>
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="organizacionId" class="sr-only"><?php echo i18n::__('organizacion') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" placeholder="<?php echo i18n::__('organizacion') ?>" required autofocus>
                    </div>
                    </br>
                    <div class="form-group col-lg-12">
                        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objDatoUsuario)) ? 'update' : 'register')) ?></button>
                        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('datosusuario', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>
                    </div>
                    </br>
                </form>
            </div>
            <div class="modal-footer">

                <h6 align="center">Todos los Derechos Reservados Mariana Lopez, Andres Felipe Alvarez -  &copy; 2015</h6>
                <button type="button" value="btnNewUser" id="btnAction" name="btnAction" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span> Cerrar</button>
            </div>
        </div>
    </div>
</div>

