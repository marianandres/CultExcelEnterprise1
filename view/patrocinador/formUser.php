<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idPatrocinador = patrocinadorTableClass::ID ?>
<?php $correo = patrocinadorTableClass::CORREO ?>
<?php $direccion = patrocinadorTableClass::DIRECCION ?>
<?php $nombre = patrocinadorTableClass::NOMBRE ?>
<?php $telefono = patrocinadorTableClass::TELEFONO ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objPatrocinador)) ? 'update' : 'register')) ?> <?php echo i18n::__('patrocinador') ?>  <?php echo $objPatrocinador[0]->$patrocinador ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('patrocinador', ((isset($objPatrocinador)) ? 'update' : 'create')) ?>">
        <?php if (isset($objPatrocinador) == true): ?>

          <input name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::ID, true) ?>" value="<?php echo $objPatrocinador[0]->$idPatrocinador ?>" type="hidden">
        <?php endif ?>
        <label for="correo" class="sr-only"><?php echo i18n::__('Correo') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPatrocinador) == true) ? $objPatrocinador[0]->$correo : '') ?>" type="correo" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::CORREO, true) ?>" placeholder="Correo" required autofocus>
        <br>
        <label for="direccion" class="sr-only"><?php echo i18n::__('Direccion') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPatrocinador) == true) ? $objPatrocinador[0]->$direccion : '') ?>" type="direccion" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::DIRECCION, true) ?>" placeholder="Direccion" required autofocus>
        <br>
        <label for="nombre" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPatrocinador) == true) ? $objPatrocinador[0]->$nombre : '') ?>" type="nombre" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
        <br>	
        <label for="telefono" class="sr-only"><?php echo i18n::__('telefono') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPatrocinador) == true) ? $objPatrocinador[0]->$telefono : '') ?>" type="telefono" name="<?php echo patrocinadorTableClass::getNameField(patrocinadorTableClass::TELEFONO, true) ?>" placeholder="Telefono" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objPatrocinador)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'index') ?>">Cancelar</a>

    </form>
</div></br>