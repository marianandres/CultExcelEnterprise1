<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idTipoDocumento = tipoDocumentoTableClass::ID ?>
<?php $nombre = tipoDocumentoTableClass::NOMBRE ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objTipoDocumento)) ? 'update' : 'register')) ?> <?php echo i18n::__('tipoDocumento') ?>  <?php echo $objTipoDocumento[0]->$tipoDocumento ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', ((isset($objTipoDocumento)) ? 'update' : 'create')) ?>">
        <?php if (isset($objTipoDocumento) == true): ?>

          <input name="<?php echo tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::ID, true) ?>" value="<?php echo $objTipoDocumento[0]->$idTipoDocumento ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('Nomnbre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objTipoDocumento) == true) ? $objTipoDocumento[0]->$nombre : '') ?>" type="nombre" name="<?php echo tipoDocumentoTableClass::getNameField(tipoDocumentoTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objTipoDocumento)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'index') ?>">Cancelar</a>

    </form>
</div></br>