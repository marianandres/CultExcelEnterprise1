<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\request\requestClass as request ?>
<!-- Modal verificacion -->
<div class="modal fade" id="inactive" style="margin-top: 150px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i>Desactivar Registro de La Cuenta</h4>
            </div>
            <div class="modal-body">
                <div class="text-left">
                    <form role="form" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'inactive') ?>">
                        <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" type="text">
                        <div class="form-group"> 
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong><i class="fa fa-info-circle"></i>Info!</strong> Por Favor Ingresar La contraseña Del Administrador Si Esta Seguro Desactivar Esta Cuenta. Perdera Los Beneficios Del Portal Web.
                            </div>
                            <!--                            <label for="statuskey" class="control-label">Codigo De Activacion:</label>	  
                                                        <input class="form-control" 
                                                               type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true) ?>" required autofocus>-->
                        </div>
                        <div class="form-group">  
                            <label for="statuskey" class="control-label">Contraseña Del Administrador</label>	  
                            <input class="form-control" 
                                   type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Ingresar Contraseña de Administrador
                                   " required autofocus>
                        </div>
                        <button class="btn btn-success" type="submit"> Desactivar Cuenta</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Modal logout -->
<!-- Modal verificacion -->
<div class="modal fade" id="active" style="margin-top: 150px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i>Activar Registro de La Cuenta</h4>
            </div>
            <div class="modal-body">
                <div class="text-left">
                    <form role="form" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'active') ?>">
                        <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" type="text">
                        <div class="form-group"> 
                            <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong><i class="fa fa-info-circle"></i>Info!</strong> Por Favor Ingresar La contraseña Del Administrador Si Esta Seguro Activar Esta Cuenta.
                            </div>
                            <!--                            <label for="statuskey" class="control-label">Codigo De Activacion:</label>	  
                                                        <input class="form-control" 
                                                               type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::CODIGOKEY, true) ?>" required autofocus>-->
                        </div>
                        <div class="form-group">  
                            <label for="statuskey" class="control-label">Contraseña Del Administrador</label>	  
                            <input class="form-control" 
                                   type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Ingresar Contraseña de Administrador
                                   " required autofocus>
                        </div>

                        <button class="btn btn-success" type="submit"> Activar Cuenta</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Modal logout -->

<div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3><i class="fa fa-user"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('user') ?> </h3>

            </div>
            <div class="modal-body">
                <form  id="registerUser" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'create') ?>">
                    <div class="form-group <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::USER, true) === true)) ? 'has-error has-feedback' : '' ?> ">  
                        <label for="usuario" class="control-label"><?php echo i18n::__('user') ?>:</label>	  
                        <input class="form-control"
                               type="text" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::USER, true) ?>" placeholder="<?php echo i18n::__('usertxtPlaceholder') ?>" required autofocus>

                    </div>
                    <div class="form-group <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) === true)) ? 'has-error has-feedback' : '' ?> ">    
                        <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" class="control-label"><?php echo i18n::__('pass') ?>:</label>		
                        <input class="form-control"  type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_1' ?>" placeholder="<?php echo i18n::__('passtxtPlaceholder') ?>" required>

                    </div>
                    <div class="form-group <?php echo (session::getInstance()->hasFlash(usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) === true)) ? 'has-error has-feedback' : '' ?> ">  
                        <label for="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" class=" control-label" ><?php echo i18n::__('confipass') ?>:</label>		
                        <input class="form-control" type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>"  name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) . '_2' ?>" placeholder="<?php echo i18n::__('passtxtPlaceholder2') ?>" required>

                    </div>

                    <button type="submit" class="btn btn-medium btn-success"><?php echo i18n::__('register') ?></button>
                    <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>">Cancelar</a>
                </form>
            </div>
            <div class="modal-footer">
                <h6 align="center">Todos los Derechos Reservados Mariana Lopez, Andres Felipe Alvarez -  &copy; 2015</h6>
                <button type="button" value="btnNewUser" id="btnAction" name="btnAction" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span> Cerrar</button>
            </div>
        </div>
    </div>
</div>


