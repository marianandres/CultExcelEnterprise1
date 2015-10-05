<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\request\requestClass as request ?>

<div class="modal fade" id="newOrganization" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-user"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('Organizacion') ?> </h3>

            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', ((isset($objOrganizacion)) ? 'update' : 'create')) ?>">
                    <?php if (isset($objOrganizacion) == true): ?>

                        <input name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::ID, true) ?>" value="<?php echo $objOrganizacion[0]->$idOrganizacion ?>" type="hidden">
                    <?php endif ?>
                    <div class="form-group col-lg-6">
                        <label for="correo" class="sr-only"><?php echo i18n::__('Correo') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$correo : '') ?>" type="correo" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::CORREO, true) ?>" placeholder="Correo" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="direccion" class="sr-only"><?php echo i18n::__('Direccion') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$direccion : '') ?>" type="direccion" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true) ?>" placeholder="Direccion" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="fax" class="sr-only"><?php echo i18n::__('fax') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$fax : '') ?>" type="fax" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::FAX, true) ?>" placeholder="Fax" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nombre" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$nombre : '') ?>" type="nombre" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="pagina_web" class="sr-only"><?php echo i18n::__('pagina') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$pagina_web : '') ?>" type="pagina_web" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true) ?>" placeholder="Pagina Web" required autofocus>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="telefono" class="sr-only"><?php echo i18n::__('telefono') ?>:</label>	  
                        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$telefono : '') ?>" type="telefono" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true) ?>" placeholder="Telefono" required autofocus>
                    </div>

                    <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objOrganizacion)) ? 'update' : 'register')) ?></button>
                    <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'index') ?>">Cancelar</a>

                </form>
            </div>
            <div class="modal-footer">
                <h6 align="center">Todos los Derechos Reservados Mariana Lopez, Andres Felipe Alvarez -  &copy; 2015</h6>
                <button type="button" value="btnNewUser" id="btnAction" name="btnAction" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span> Cerrar</button>
            </div>
        </div>
    </div>
</div>

