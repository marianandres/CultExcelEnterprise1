<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idCredencial = credencialTableClass::ID ?>
<?php $nombre = credencialTableClass::NOMBRE ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objCredencial)) ? 'update' : 'register')) ?> <?php echo i18n::__('credencial') ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('credencial', ((isset($objCredencial)) ? 'update' : 'create')) ?>">
        <?php if (isset($objCredencial) == true): ?>

          <input name="<?php echo credencialTableClass::getNameField(credencialTableClass::ID, true) ?>" value="<?php echo $objCredencial[0]->$idCredencial ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objCredencial) == true) ? $objCredencial[0]->$nombre : '') ?>" type="name" name="<?php echo credencialTableClass::getNameField(credencialTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objCredencial)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>"><?php echo i18n::__('Cancelar') ?>Cancelar</a>

    </form>
</div></br>