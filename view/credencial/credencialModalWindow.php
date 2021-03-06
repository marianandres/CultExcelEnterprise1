<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idCredencial = credencialTableClass::ID ?>
<?php $nombre = credencialTableClass::NOMBRE ?>

<div class="modal fade" id="newUserCredencial" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-users"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('credencial') ?> </h3>  
            </div>
            <div class="modal-body">
                <form id="createCredencial" method="post" action="<?php echo routing::getInstance()->getUrlWeb('credencial', ((isset($objCredencial)) ? 'update' : 'create')) ?>">
                    <?php if (isset($objCredencial) == true): ?>

                        <input name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>" value="<?php echo $objCredencial[0]->$idCredencial ?>" type="hidden">
                    <?php endif ?>
                    <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
                    <input class="form-control" value="<?php echo ((isset($objCredencial) == true) ? $objCredencial[0]->$nombre : '') ?>" type="name" id="<?php echo credencialTableClass::getNameField(credencialTableClass::NOMBRE, true) ?>" name="<?php echo credencialTableClass::getNameField(credencialTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
                    <br>

                    <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objCredencial)) ? 'update' : 'register')) ?></button>
                    <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

                </form>
            </div>
            <div class="modal-footer">
                <h6 align="center">Todos los Derechos Reservados Mariana Lopez, Andres Felipe Alvarez -  &copy; 2015</h6>
                <button type="button" value="btnNewUserCredencial" id="btnAction" name="btnAction" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span> Cerrar</button>
            </div>
        </div>
    </div>
</div>