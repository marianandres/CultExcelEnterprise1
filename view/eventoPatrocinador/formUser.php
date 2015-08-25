<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php $idEventoPatrocinador = eventoPatrocinadorTableClass::ID ?>
<?php $eventoId = eventoPatrocinadorTableClass::EVENTO_ID ?>
<?php $PatrocinadorId = eventoPatrocinadorTableClass::PATROCINADOR_ID ?>

<div class="container container-fluid">
    <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__(((isset($objEventoPatrocinador)) ? 'update' : 'register')) ?> <?php echo i18n::__('patrocinador') ?>  <?php echo $objEventoPatrocinador[0]->$eventoPatrocinador ?> </h1>  
    <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('eventoPatrocinador', ((isset($objEventoPatrocinador)) ? 'update' : 'create')) ?>">
        <?php if (isset($objEventoPatrocinador) == true): ?>

          <input name="<?php echo eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::ID, true) ?>" value="<?php echo $objEventoPatrocinador[0]->$idEventoPatrocinador ?>" type="hidden">
        <?php endif ?>
        <label for="name" class="sr-only"><?php echo i18n::__('evento') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objEventoPatrocinador) == true) ? $objEventoPatrocinador[0]->$eventoId : '') ?>" type="eventoId" name="<?php echo eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::EVENTO_ID, true) ?>" placeholder="Id Evento" required autofocus>
        <br>
        <label for="name" class="sr-only"><?php echo i18n::__('patrocinadorId') ?>:</label>	  
        <input class="form-control" value="<?php echo ((isset($objEventoPatrocinador) == true) ? $objEventoPatrocinador[0]->$patrocinadorId : '') ?>" type="patrocinadorId" name="<?php echo eventoPatrocinadorTableClass::getNameField(eventoPatrocinadorTableClass::PATROCINADOR_ID, true) ?>" placeholder="Id Patrocinador" required autofocus>
        <br>


        <button class="btn btn-medium btn-success"><?php echo i18n::__(((isset($objEventoPatrocinador)) ? 'update' : 'register')) ?></button>
        <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('eventoPatrocinador', 'index') ?>"><?php echo i18n::__('Cancelar') ?></a>

    </form>
</div></br>