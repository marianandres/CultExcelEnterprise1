<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idOrganizacion = organizacionTableClass::ID ?>
<?php $correo = organizacionTableClass::CORREO ?>
<?php $direccion = organizacionTableClass::DIRECCION ?>
<?php $fax = organizacionTableClass::FAX ?>
<?php $nombre = organizacionTableClass::NOMBRE ?>
<?php $pagina_web = organizacionTableClass::PAGINA_WEB ?>
<?php $telefono = organizacionTableClass::TELEFONO ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objOrganizacion)) ? 'update' : 'register')) ?> <?php echo i18n::__('organizacion') ?>  <?php echo $objOrganizacion[0]->$organizacion ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('organizacion', ((isset($objOrganizacion)) ? 'update' : 'create')) ?>">
        <?php if (isset($objOrganizacion) == true): ?>

          <input name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::ID, true) ?>" value="<?php echo $objOrganizacion[0]->$idOrganizacion ?>" type="hidden">
        <?php endif ?>
        <label for="correo" class="sr-only"><?php echo i18n::__('Correo') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$correo : '') ?>" type="correo" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::CORREO, true) ?>" placeholder="Correo" required autofocus>
        <br>
        <label for="direccion" class="sr-only"><?php echo i18n::__('Direccion') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$direccion : '') ?>" type="direccion" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::DIRECCION, true) ?>" placeholder="Direccion" required autofocus>
        <br>
        <label for="fax" class="sr-only"><?php echo i18n::__('fax') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$fax : '') ?>" type="fax" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::FAX, true) ?>" placeholder="Fax" required autofocus>
        <br>
        <label for="nombre" class="sr-only"><?php echo i18n::__('Nombre') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$nombre : '') ?>" type="nombre" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::NOMBRE, true) ?>" placeholder="Nombre" required autofocus>
        <br>
        <label for="pagina_web" class="sr-only"><?php echo i18n::__('pagina') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$pagina_web : '') ?>" type="pagina_web" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::PAGINA_WEB, true) ?>" placeholder="Pagina Web" required autofocus>
        <br>
        <label for="telefono" class="sr-only"><?php echo i18n::__('telefono') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objOrganizacion) == true) ? $objOrganizacion[0]->$telefono : '') ?>" type="telefono" name="<?php echo organizacionTableClass::getNameField(organizacionTableClass::TELEFONO, true) ?>" placeholder="Telefono" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objOrganizacion)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('organizacion', 'index') ?>">Cancelar</a>

    </form>
</div></br>