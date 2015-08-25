<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<form  id="registerForm" method="POST" action="<?php echo routing::getInstance()->getUrlWeb('registrar', 'create') ?>">
    <div class="row form-register">
        <h2><?php echo i18n::__('Registra') ?> <small><?php echo i18n::__('Disfrutalo') ?></small>
            <a  class="btn btn-link" href="<?php echo routing::getInstance()->getUrlWeb('admin', 'index') ?>">O Iniciar Sesion</a></h2>
    </div>
    <hr style="height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradieRegistratent(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
    <div class="row">


        <div class="form-group">
            <input class="form-control input-lg"  type="text" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true)?>" placeholder="<?php echo i18n::__('NickName') ?>"  required autofocus>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="form-control input-lg" placeholder="<?php echo i18n::__('Password') ?>" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <input type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class="form-control input-lg" placeholder="<?php echo i18n::__('Confirmar') ?>" required>
                </div>
            </div>
        </div>
        <!--    <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" placeholder="Nombre" required>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" class="form-control input-lg" placeholder="Apellido" required>
              </div>
            </div>
        =======
        <div class="container container-fluid">
            <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objUsuarios)) ? 'update' : 'register')) ?> <?php echo i18n::__('user') ?>  <?php echo $objUsuarios[0]->$usuario ?> </h1>  
            <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', ((isset($objUsuario)) ? 'update' : 'create')) ?>">
        <?php if (isset($objUsuario) == true): ?>
              
                        <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" value="<?php echo $objUsuario[0]->$idUsuario ?>" type="hidden">
        <?php endif ?>
                <label for="name" class="sr-only"><?php echo i18n::__('user') ?>:</label>	  
                <input class="form-control" value="<?php echo ((isset($objUsuario) == true) ? $objUsuario[0]->$usuario : '') ?>" type="text" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" placeholder="Usuario" required autofocus>
                <br>
                <label for="username" class="sr-only"><?php echo i18n::__('pass') ?>:</label>		
                <input class="form-control" value="<?php echo ((isset($objUsuario) == true) ? $objUsuario[0]->$password : '') ?>" type="password" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Contraseña" required>
                <br>
                <label for="conpassword" class="sr-only"><?php echo i18n::__('confipass') ?>:</label>		
                <input class="form-control" type="password" name="<?php echo usuarioTableClass::getNameField('confipassword', true) ?>" placeholder="Confirmar Contraseña" required>
                <br>
        
                <button class="btn btn-medium btn-primary"><?php echo i18n::__(((isset($objUsuario)) ? 'update' : 'register')) ?></button>
                <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>">Cancelar</a>
        >>>>>>> origin/master
        
            <div class="form-group">
              <input type="email" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" class="form-control input-lg" placeholder="Email" required>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" placeholder="Genero" required >
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input class="form-control input-lg" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true) ?>" placeholder="Id Usuario" required >
              </div> 
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" placeholder="Tipo Documento Id" required >
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input class="form-control input-lg"  type="date" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>"  required >
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="form-group">
                <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" placeholder="Localidad" required>
              </div>
            </div>
              <div class="form-group">
                <input class="form-control input-lg"  type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" placeholder="Organizacion Id" required >
              </div>-->
    </div>   
    <div class="row form-register">
        <div class="col-xs-4 col-sm-3 col-md-3">
            <span class="button-checkbox">
                <button type="button" class="btn" data-color="info" ><?php echo i18n::__('acuerdo') ?> </button>
                <input type="checkbox" name="acceptTerms" id="t_and_c" class="hidden">
            </span>
        </div>
        <div class="col-xs-8 col-sm-9 col-md-9 ">
            <?php echo i18n::__('Click') ?> <strong class="label label-primary"><?php echo i18n::__('Registrarse') ?>,</strong><?php echo i18n::__('Acuerdo') ?><a href="#" style="color: #CC0000"  data-toggle="modal" data-target="#t_and_c_m"><?php echo i18n::__('Terminos') ?></a> <?php echo i18n::__('Establecido') ?>    </div>
    </div>
    <hr style="height: 5px;
        border-top: 0;
        background: #c4e17f;
        border-radius: 5px;
        background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
        background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);">
    <div class="row">
        <div class="col-lg-12 col-md-6">
            <button type="submit" class="btn btn-success btn-block btn-lg"> <?php echo i18n::__('Registrarse') ?></button>
        </div>
    </div>
</form>
