<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idUsuarioGustaCategoria = usuarioGustaCategoriaTableClass::ID ?>
<?php $categoria_id = usuarioGustaCategoriaTableClass::CATEGORIA_ID ?>
<?php $usuario_id = usuarioGustaCategoriaTableClass::USUARIO_ID ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objUsuarioGustaCategoria)) ? 'update' : 'register')) ?> <?php echo i18n::__('Gusta') ?>  <?php echo $objUsuarioGustaCategoria[0]->$usuarioGustaCategoria ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', ((isset($objUsuarioGustaCategoria)) ? 'update' : 'create')) ?>">
        <?php if (isset($objUsuarioGustaCategoria) == true): ?>

          <input name="<?php echo usuarioGustaCategoriaTableClass::getNameField(usuarioGustaCategoriaTableClass::ID, true) ?>" value="<?php echo $objUsuarioGustaCategoria[0]->$idUsuarioGustaCategoria ?>" type="hidden">
        <?php endif ?>
        <label for="categoria_id" class="sr-only"><?php echo i18n::__('categoriaId') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objUsuarioGustaCategoria) == true) ? $objUsuarioGustaCategoria[0]->$categoria_id : '') ?>" type="categoria_id" name="<?php echo usuarioGustaCategoriaTableClass::getNameField(usuarioGustaCategoriaTableClass::CATEGORIA_ID, true) ?>" placeholder="Categoria Id" required autofocus>
        <br>
        <label for="usuario_id" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objUsuarioGustaCategoria) == true) ? $objUsuarioGustaCategoria[0]->$usuario_id : '') ?>" type="usuario_id" name="<?php echo usuarioGustaCategoriaTableClass::getNameField(usuarioGustaCategoriaTableClass::USUARIO_ID, true) ?>" placeholder="Usuario Id" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objUsuarioGustaCategoria)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', 'index') ?>">Cancelar</a>

    </form>
</div></br>