<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\request\requestClass as request ?>
<?php $idUsuario = usuarioTableClass::ID ?>
<?php $password = usuarioTableClass::PASSWORD ?>
<?php $user = usuarioTableClass::USER ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objUsuarios)) ? 'update' : 'register')) ?> <?php echo i18n::__('user') ?>  <?php echo $objUsuarios[0]->$usuario ?> </h1>  
    <form  id="registerForm" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuario)) ? 'update' : 'create')) ?>">
        <?php if (isset($objUsuario) == true): ?>

          <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" value="<?php echo $objUsuario[0]->$idUsuario ?>" type="hidden">
        <?php endif ?>
        <div class="form-group <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true) === true)) ? 'has-error has-feedback' : '' ?> ">  
            <label for="usuario" class="control-label"><?php echo i18n::__('user') ?>:</label>	  
            <input class="form-control" value="<?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true) === true)) ? request::getInstance()->getPost(usuarioTableClass::getNameField(usuarioTableClass::USER, true)) : ''or ( (isset($objUsuario) == true) ? $objUsuario[0]->$usuario : '') ?>" 
                   type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" placeholder="<?php echo i18n::__('usertxtPlaceholder') ?>" required autofocus>
                   <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true) === true)): ?>
              <span class="fa fa-remove form-control-feedback"></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) === true)) ? 'has-error has-feedback' : '' ?> ">    
            <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="control-label"><?php echo i18n::__('pass') ?>:</label>		
            <input class="form-control" value="<?php echo ((isset($objUsuario) == true) ? $objUsuario[0]->$password : '') ?>"  type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" placeholder="<?php echo i18n::__('passtxtPlaceholder') ?>" required>
            <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) === true)): ?>
              <span class="fa fa-remove form-control-feedback"></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) === true)) ? 'has-error has-feedback' : '' ?> ">  
            <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class=" control-label" ><?php echo i18n::__('confipass') ?>:</label>		
            <input class="form-control" type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>"  name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" placeholder="<?php echo i18n::__('passtxtPlaceholder2') ?>" required>
            <?php if (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) === true)): ?>
              <span class="fa fa-remove form-control-feedback"></span>
            <?php endif; ?>
        </div>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objUsuario)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>">Cancelar</a>

    </form>
</div></br>