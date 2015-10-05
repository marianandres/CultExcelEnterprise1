<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\request\requestClass as request ?>

<div class="modal fade" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-user"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('Categoria') ?> </h3>

            </div>
            <div class="modal-body">
                <form  method="post" action="<?php echo routing::getInstance()->getUrlWeb('categoria', ((isset($objCategoria)) ? 'update' : 'create')) ?>">
                    <?php if (isset($objCategoria) == true): ?>

                        <input name="<?php echo categoriaTableClass::getNameField(categoriaTableClass::ID, true) ?>" value="<?php echo $objCategoria[0]->$idCategoria ?>" type="hidden">
                    <?php endif ?>
                    <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
                    <input class="form-control" value="<?php echo ((isset($objCategoria) == true) ? $objCategoria[0]->$nombre : '') ?>" type="text" name="<?php echo categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
                    <br>

                    <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objCategoria)) ? 'update' : 'register')) ?></button>
                    <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('categoria', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

                </form>
            </div>
            <div class="modal-footer">
                <h6 align="center">Todos los Derechos Reservados Mariana Lopez, Andres Felipe Alvarez -  &copy; 2015</h6>
                <button type="button" value="btnNewUser" id="btnAction" name="btnAction" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span> Cerrar</button>
            </div>
        </div>
    </div>
</div>

