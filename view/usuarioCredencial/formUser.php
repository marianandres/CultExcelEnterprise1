<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idUsuarioCredencial = usuarioCredencialBaseTableClass::ID ?>
<?php $credencial_id = usuarioCredencialTableClass::CREDENCIAL_ID ?>
<?php $usuario_id = usuarioCredencialTableClass::USUARIO_ID ?>


<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objUsuarioCredencial)) ? 'update' : 'register')) ?> <?php echo i18n::__('usuarioCredencial') ?>  <?php echo $objUsuarioCredencial[0]->$usuarioCredencialo ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', ((isset($objUsuarioCredencial)) ? 'update' : 'create')) ?>">
        <?php if (isset($objUsuario) == true): ?>

          <input name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::ID, true) ?>" value="<?php echo $objUsuarioCredencial[0]->$idUsuarioCredencial ?>" type="hidden">
        <?php endif ?>
        <label for="credencialId" class="sr-only"><?php echo i18n::__('credenId') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objUsuarioCredencial) == true) ? $objUsuarioCredencial[0]->$credencial_id : '') ?>" type="text" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::CREDENCIAL_ID, true) ?>" placeholder="Credencial Id" required autofocus>
        <br>
        <label for="usuario_id" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objUsuarioCredencial) == true) ? $objUsuarioCredencial[0]->$usuario_id : '') ?>" type="text" name="<?php echo usuarioCredencialTableClass::getNameField(usuarioCredencialTableClass::USUARIO_ID, true) ?>" placeholder="Usuario Id" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objUsuarioCredencial)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index') ?>">Cancelar</a>

    </form>
</div></br>