<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idEstadoPqrs = estadoPqrsTableClass::ID ?>
<?php $actived = estadoPqrsTableClass::ACTIVED ?>
<?php $nombre = estadoPqrsTableClass::NOMBRE ?>
<?php $pqrs_id = estadoPqrsTableClass::PQRS_ID ?>


<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objEstadoPqrs)) ? 'update' : 'register')) ?> <?php echo i18n::__('Estado') ?>  <?php echo $objEstadoPqrs[0]->$estadoPqrs ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('estadoPqrs', ((isset($objEstadoPqrs)) ? 'update' : 'create')) ?>">
        <?php if (isset($objEstadoPqrs) == true): ?>

          <input name="<?php echo estadoPqrsTableClass::getNameField(estadoPqrsTableClass::ID, true) ?>" value="<?php echo $objEstadoPqrs[0]->$idEstadoPqrs ?>" type="hidden">
        <?php endif ?>
        <label for="actived" class="sr-only"><?php echo i18n::__('actived') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objEstadoPqrs) == true) ? $objEstadoPqrs[0]->$actived : '') ?>" type="actived" name="<?php echo estadoPqrsTableClass::getNameField(estadoPqrsTableClass::ACTIVED, true) ?>" placeholder="<?php echo i18n::__('actived') ?>" required autofocus>
        <br>
        <label for="nombre" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objEstadoPqrs) == true) ? $objEstadoPqrs[0]->$nombre : '') ?>" type="nombre" name="<?php echo estadoPqrsTableClass::getNameField(estadoPqrsTableClass::NOMBRE, true) ?>" placeholder="<?php echo i18n::__('Nom') ?>" required autofocus>
        <br>
        <label for="pqrs_id" class="sr-only"><?php echo i18n::__('pqrs') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objEstadoPqrs) == true) ? $objEstadoPqrs[0]->$pqrs_id : '') ?>" type="pqrs_id" name="<?php echo estadoPqrsTableClass::getNameField(estadoPqrsTableClass::PQRS_ID, true) ?>" placeholder="<?php echo i18n::__('pqrs') ?>" required autofocus>
        <br>


        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objEstadoPqrs)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('estadoPqrs', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

    </form>
</div></br>