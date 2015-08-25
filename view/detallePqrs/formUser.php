<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idDetallePqrs = detallePqrsTableClass::ID ?>
<?php $pqrs_id = detallePqrsTableClass::PQRS_ID ?>
<?php $respuesta = detallePqrsTableClass::RESPUESTA ?>
<?php $usuario_id = detallePqrsTableClass::USUARIO_ID ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objDetallePqrs)) ? 'update' : 'register')) ?> <?php echo i18n::__('detallePqrs') ?>  <?php echo $objDetallePqrs[0]->$detallePqrs ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('detallePqrs', ((isset($objDetallePqrs)) ? 'update' : 'create')) ?>">
        <?php if (isset($objDetallePqrs) == true): ?>

          <input name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::ID, true) ?>" value="<?php echo $objDetallePqrs[0]->$idDetallePqrs ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('pqrs') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDetallePqrs) == true) ? $objDetallePqrs[0]->$pqrs_id : '') ?>" type="text" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::PQRS_ID, true) ?>" placeholder="<?php echo i18n::__('pqrs') ?>" required autofocus>
        <br>
        <label for="respuesta" class="sr-only"><?php echo i18n::__('respuesta') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDetallePqrs) == true) ? $objDetallePqrs[0]->$respuesta : '') ?>" type="respuesta" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::RESPUESTA, true) ?>" placeholder="<?php echo i18n::__('respuesta') ?>" required autofocus>
        <br>
        <label for="usuario_id" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDetallePqrs) == true) ? $objDetallePqrs[0]->$usuario_id : '') ?>" type="usuario_id" name="<?php echo detallePqrsTableClass::getNameField(detallePqrsTableClass::USUARIO_ID, true) ?>" placeholder="<?php echo i18n::__('usuario_id') ?>" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objDetallePqrs)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('detallePqrs', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

    </form>
</div></br>