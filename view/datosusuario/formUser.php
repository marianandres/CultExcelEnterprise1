<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idDatoUsuario = datoUsuarioTableClass::ID ?>
<?php $nombre = datoUsuarioTableClass::NOMBRE ?>
<?php $apellido = datoUsuarioTableClass::APELLIDO ?>
<?php $genero = datoUsuarioTableClass::GENERO ?>
<?php $userid = datoUsuarioTableClass::USUARIO_ID ?>
<?php $tid = datoUsuarioTableClass::TIPO_DOCUMENTO_ID ?>
<?php $fecha_nac = datoUsuarioTableClass::FECHA_NACIMIENTO ?>
<?php $correo = datoUsuarioTableClass::CORREO ?>
<?php $localidad = datoUsuarioTableClass::LOCALIDAD_ID ?>
<?php $organizacionId = datoUsuarioTableClass::ORGANIZACION_ID ?>


<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objDatoUsuario)) ? 'update' : 'register')) ?> <?php i18n::__('Datos') ?>  <?php echo $objDatoUsuario[0]->$datousuario ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('datosusuario', ((isset($objDatoUsuario)) ? 'update' : 'create')) ?>">
        <?php if (isset($objDatoUsuario) == true): ?>

          <input name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ID, true) ?>" value="<?php echo $objDatoUsuario[0]->$idDatoUsuario ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$nombre : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::NOMBRE, true) ?>" placeholder="<?php echo i18n::__('Nom') ?>" required autofocus>
        <br>
        <label for="apellido" class="sr-only"><?php echo i18n::__('Apellido') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$apellido : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::APELLIDO, true) ?>" placeholder="<?php echo i18n::__('Apellido') ?>" required autofocus>
        <br>

        <label for="genero" class="sr-only"><?php echo i18n::__('Genero') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$genero : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::GENERO, true) ?>" placeholder="<?php echo i18n::__('Genero') ?>" required autofocus>
        <br>
        <label for="userid" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$userid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::USUARIO_ID, true) ?>" placeholder="<?php echo i18n::__('usuario_id') ?>" required autofocus>
        <br>
        <label for="tipoDocumentoId" class="sr-only"><?php echo i18n::__('documento') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::TIPO_DOCUMENTO_ID, true) ?>" placeholder="<?php echo i18n::__('Documento') ?>" required autofocus>

        <br> 
        <label for="fechanacimiento" class="sr-only"><?php echo i18n::__('Nacimiento') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::FECHA_NACIMIENTO, true) ?>" placeholder="<?php echo i18n::__('Nacimiento') ?>" required autofocus>
        <br>
        <br> <label for="correo" class="sr-only"><?php echo i18n::__('Correo') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::CORREO, true) ?>" placeholder="<?php echo i18n::__('Correo') ?>" required autofocus>
        <br>
        <br> <label for="localidad" class="sr-only"><?php echo i18n::__('Localidad') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::LOCALIDAD_ID, true) ?>" placeholder="<?php echo i18n::__('Localidad') ?>" required autofocus>
        <br>
        <br> <label for="organizacionId" class="sr-only"><?php echo i18n::__('organizacion') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objDatoUsuario) == true) ? $objDatoUsuario[0]->$tid : '') ?>" type="text" name="<?php echo datoUsuarioTableClass::getNameField(datoUsuarioTableClass::ORGANIZACION_ID, true) ?>" placeholder="<?php echo i18n::__('organizacion') ?>" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objDatoUsuario)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('datosusuario', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

    </form>
</div></br>