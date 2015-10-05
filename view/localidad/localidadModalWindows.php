<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\request\requestClass as request ?>

<div class="modal fade" id="newLocalidad" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-user"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('Localidad') ?> </h3>

            </div>
            <div class="modal-body">
                <form  method="post" action="<?php echo routing::getInstance()->getUrlWeb('localidad', ((isset($objLocalidad)) ? 'update' : 'create')) ?>">
                    <?php if (isset($objLocalidad) == true): ?>

                        <input name="<?php echo localidadTableClass::getNameField(localidadTableClass::ID, true) ?>" value="<?php echo $objLocalidad[0]->$idLocalidad ?>" type="hidden">
                    <?php endif ?>
                    <label for="localidadId" class="sr-only"><?php echo i18n::__('localidadId') ?>:</label>	  
                    <input class="form-control" value="<?php echo ((isset($objLocalidad) == true) ? $objLocalidad[0]->$localidad_id : '') ?>" type="text" name="<?php echo localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true) ?>" placeholder="Id Localidad" required autofocus>
                    <br>
                    <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
                    <input class="form-control" value="<?php echo ((isset($objLocalidad) == true) ? $objLocalidad[0]->$nombre : '') ?>" type="nombre" name="<?php echo localidadTableClass::getNameField(localidadTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
                    <br>

                    <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objLocalidad)) ? 'update' : 'register')) ?></button>
                    <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('localidad', 'index') ?>">Cancelar</a>

                </form>
            </div>
            <div class="modal-footer">
                <h6 align="center">Todos los Derechos Reservados Mariana Lopez, Andres Felipe Alvarez -  &copy; 2015</h6>
                <button type="button" value="btnNewUser" id="btnAction" name="btnAction" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span> Cerrar</button>
            </div>
        </div>
    </div>
</div>

