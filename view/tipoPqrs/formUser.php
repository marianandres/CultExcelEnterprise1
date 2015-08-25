<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idTipoPqrs = tipoPqrsTableClass::ID ?>
<?php $nombre = tipoPqrsTableClass::NOMBRE ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objTipoPqrs)) ? 'update' : 'register')) ?> <?php echo i18n::__('tipoPqrs') ?>  <?php echo $objTipoPqrs[0]->$tipoPqrs ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('tipoPqrs', ((isset($objTipoPqrs)) ? 'update' : 'create')) ?>">
        <?php if (isset($objTipoPqrs) == true): ?>

          <input name="<?php echo tipoPqrsTableClass::getNameField(tipoPqrsTableClass::ID, true) ?>" value="<?php echo $objTipoPqrs[0]->$idTipoPqrs ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objTipoPqrs) == true) ? $objTipoPqrs[0]->$nombre : '') ?>" type="nombre" name="<?php echo tipoPqrsTableClass::getNameField(tipoPqrsTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
        <br>


        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objTipoPqrs)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('tipoPqrs', 'index') ?>">Cancelar</a>

    </form>
</div></br>