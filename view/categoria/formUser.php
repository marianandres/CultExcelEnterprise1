<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idCategoria = categoriaTableClass::ID ?>
<?php $nombre = categoriaTableClass::NOMBRE ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objCategoria)) ? 'update' : 'register')) ?> <?php echo i18n::__('Categoria') ?>  <?php echo $objCategoria[0]->$categoria ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('categoria', ((isset($objCategoria)) ? 'update' : 'create')) ?>">
        <?php if (isset($objCategoria) == true): ?>

          <input name="<?php echo categoriaTableClass::getNameField(categoriaTableClass::ID, true) ?>" value="<?php echo $objCategoria[0]->$idCategoria ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objCategoria) == true) ? $objCategoria[0]->$nombre : '') ?>" type="text" name="<?php echo categoriaTableClass::getNameField(categoriaTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objCategoria)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('categoria', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

    </form>
</div></br>