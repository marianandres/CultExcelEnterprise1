<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idLocalidad = localidadTableClass::ID ?>
<?php $localidad_id = localidadTableClass::LOCALIDAD_ID ?>
<?php $nombre = localidadTableClass::NOMBRE ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objLocalidad)) ? 'update' : 'register')) ?> <?php echo i18n::__('Localidad') ?>  <?php echo $objLocalidad[0]->$localidad ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('localidad', ((isset($objLocalidad)) ? 'update' : 'create')) ?>">
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
</div></br>