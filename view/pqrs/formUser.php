<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idPqrs = pqrsTableClass::ID ?>
<?php $contenido = pqrsTableClass::CONTENIDO ?>
<?php $estado_pqrs_id = pqrsTableClass::ESTADO_PQRS_ID ?>
<?php $tipo_pqrs_id = pqrsTableClass::TIPO_PQRS_ID ?>
<?php $titulo = pqrsTableClass::TITULO ?>
<?php $usuario_id = pqrsTableClass::USUARIO_ID ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objPqrs)) ? 'update' : 'register')) ?> <?php echo i18n::__('pqrs') ?>  <?php echo $objPqrs[0]->$pqrs ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('pqrs', ((isset($objPqrs)) ? 'update' : 'create')) ?>">
        <?php if (isset($objPqrs) == true): ?>

          <input name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::ID, true) ?>" value="<?php echo $objPqrs[0]->$idPqrs ?>" type="hidden">
        <?php endif ?>
        <label for="contenido" class="sr-only"><?php echo i18n::__('contenido') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPqrs) == true) ? $objPqrs[0]->$contenido : '') ?>" type="contenido" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true) ?>" placeholder="Contenido" required autofocus>
        <br>
        <label for="estado_pqrs_id" class="sr-only"><?php echo i18n::__('estadoPqrs') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPqrs) == true) ? $objPqrs[0]->$estado_pqrs_id : '') ?>" type="estado_pqrs_id" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::ESTADO_PQRS_ID, true) ?>" placeholder="Estado Pqrs Id" required autofocus>
        <br>
        <label for="tipo_pqrs_id" class="sr-only"><?php echo i18n::__('tipoPqrs') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPqrs) == true) ? $objPqrs[0]->$tipo_pqrs_id : '') ?>" type="tipo_pqrs_id" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TIPO_PQRS_ID, true) ?>" placeholder="Tipo Pqrs Id" required autofocus>
        <br>
        <label for="titulo" class="sr-only"><?php echo i18n::__('titulo') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPqrs) == true) ? $objPqrs[0]->$titulo : '') ?>" type="titulo" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TITULO, true) ?>" placeholder="Titulo" required autofocus>
        <br>
        <label for="usuario_id" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objPqrs) == true) ? $objPqrs[0]->$usuario_id : '') ?>" type="usuario_id" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::USUARIO_ID, true) ?>" placeholder="Usuario Id" required autofocus>
        <br>

        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objPqrs)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'index') ?>">Cancelar</a>

    </form>
</div></br>