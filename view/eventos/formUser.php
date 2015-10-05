<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>

<div class="container container-fluid">
    <div class="mainbox  col-sm-8 col-sm-offset-2 ">
        <h1 class="page-header"><span class="bg-steps">1 </span> <span> <?php echo i18n::__('DetalleEvento') ?></span></h1>  
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>"><?php echo i18n::__('Nombre') ?> <span>*</span></label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::NOMBRE, true) ?>" placeholder="Dale Un nombre Unico E Inconfundible" required autofocus>
            </div>
        </div>
        <!--        <div class="col-xs-12 ">
                    <div class="form-group">
                        <label for="lugar_latitud"> Ubicacion<?php echo i18n::__('lugar_latitud') ?>:</label>		
                        <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LATITUD, true) ?>" placeholder="lugar_latitud" required>
                    </div>
                </div>
                <div class="col-xs-12 ">
                    <div class="form-group">		
                        <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::LUGAR_LONGITUD, true) ?>" placeholder="lugar_longitud" required>
                        <ul>
                            <li><a class="btn btn-link"><i class="fa fa-laptop"></i><?php echo i18n::__('EventoOnline') ?> </a> <a class="btn btn-link"><i class="fa fa-search"></i> <?php echo i18n::__('¿No?') ?> </a></li>
                        </ul>
                    </div>
                </div>-->
        <div class="col-xs-12">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" ><?php echo i18n::__('DireccionLugarEvento') ?>:</label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DIRECCION, true) ?>" placeholder="Direccion Del Lugar Del Evento" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <div class="col-xs-6">
                    <div class="input-group date" id="datetimePicker">
                        <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>"><?php echo i18n::__('Inicio') ?>:</label>		
                        <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_EVENTO, true) ?>" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>"><?php echo i18n::__('FINALIZACION') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_EVENTO, true) ?>"  required>
            </div>
        </div>
        <div class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>"> <?php echo i18n::__('ImagenEvento') ?>:</label>		
                <input class="file" type="file" name="<?php echo eventoTableClass::getNameField(eventoTableClass::IMAGEN, true) ?>" required>
            </div>
        </div>
        <div style="margin-bottom: 40px;" class="col-xs-12 ">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>"> <?php echo i18n::__('DescripcionEvento') ?>:</label>
                <textarea class="form-control" rows="5" maxlength="180" name="<?php echo eventoTableClass::getNameField(eventoTableClass::DESCRIPCION, true) ?>" placeholder="Comenta que tiene tu Evento De Especial." required></textarea>

            </div>
            </br></br>
        </div>

        <h1 class="page-header"><span class="bg-steps"> <?php echo i18n::__('2') ?> </span><span> <?php echo i18n::__('AjustesAdicionales') ?>  </span></h1>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" ><?php echo i18n::__('FECHINICPUBLIEVENT') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_INICIAL_PUBLICACION, true) ?>" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>"><?php echo i18n::__('FECHFINALPUBLIEVE') ?>:</label>		
                <input class="form-control" type="datetime-local" name="<?php echo eventoTableClass::getNameField(eventoTableClass::FECHA_FINAL_PUBLICACION, true) ?>" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>"><?php echo i18n::__('Costo') ?>:</label>		
                <input class="form-control" type="text" name="<?php echo eventoTableClass::getNameField(eventoTableClass::COSTO, true) ?>" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="form-group">
                <label for="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>"> <?php echo i18n::__('TIPOEVENTO') ?>:</label>
                <select class="form-control" name="<?php echo eventoTableClass::getNameField(eventoTableClass::CATEGORIA_ID, true) ?>" required>
                    <option><?php echo i18n::__('SelecTipoEvento') ?></option>
                    <option value="1"><?php echo i18n::__('Categoria1') ?></option>
                    <option value="2"><?php echo i18n::__('Categoria2') ?></option>
                </select>
            </div>
        </div>
    </div>
</div></br>