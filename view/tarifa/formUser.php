<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idTarifa = tarifaTableClass::ID ?>
<?php $actived = tarifaTableClass::ACTIVED ?>
<?php $descripcion = tarifaTableClass::DESCRIPCION ?>
<?php $valor = tarifaTableClass::VALOR ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objTarifa)) ? 'update' : 'register')) ?> <?php echo i18n::__('tarifas') ?>  <?php echo $objTarifa[0]->$tarifa ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('tarifa', ((isset($objTarifa)) ? 'update' : 'create')) ?>">
        <?php if (isset($objTarifa) == true): ?>

          <input name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::ID, true) ?>" value="<?php echo $objTarifa[0]->$idTarifa ?>" type="hidden">
        <?php endif ?>
        <label for="actived" class="sr-only"><?php echo i18n::__('actived') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objTarifa) == true) ? $objTarifa[0]->$actived : '') ?>" type="actived" name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::ACTIVED, true) ?>" placeholder="Actived" required autofocus>
        <br>
        <label for="descripcion" class="sr-only"><?php echo i18n::__('Descripcion') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objTarifa) == true) ? $objTarifa[0]->$descripcion : '') ?>" type="descripcion" name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::DESCRIPCION, true) ?>" placeholder="Descripcion" required autofocus>
        <br>
        <label for="valor" class="sr-only"><?php echo i18n::__('Precio') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objTarifa) == true) ? $objTarifa[0]->$valor : '') ?>" type="valor" name="<?php echo tarifaTableClass::getNameField(tarifaTableClass::VALOR, true) ?>" placeholder="Valor" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objTarifa)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('terifa', 'index') ?>">Cancelar</a>

    </form>
</div></br>