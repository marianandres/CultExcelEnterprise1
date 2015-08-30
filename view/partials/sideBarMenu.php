<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\config\configClass as config ?>
<?php
use mvc\request\requestClass as request ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\i18n\i18nClass as i18n ?>

<!-- Left Sidebar Start -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!-- Search form -->
        <form role="search" class="navbar-form">
            <div class="form-group">
                <input type="text" placeholder="Buscar" class="form-control">
                <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
            </div>
        </form>
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
                <a href="profile.html" class="rounded-image profile-image"><img src="images/users/user-100.jpg"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text"><?php echo i18n::__('Bienvenido') ?><b><?php echo session::getInstance()->getUserName() ?></b></div>
                <div class="profile-buttons">
                    <a href="javascript:;"><i class="fa fa-envelope-o pulse"></i></a>
                    <a href="#connect" class="open-right"><i class="fa fa-comments"></i></a>
                    <a data-toggle="modal" data-target="#myModal" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('homepage', 'index') ?>' class=""><i class='icon-home-3'></i><span><?php echo i18n::__('Ir') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('admin', 'index') ?>' class="active"><i class='icon-home-3'></i><span><?php echo i18n::__('Panel') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('usuario', 'index') ?>' ><i class="fa fa-users fa-fw"></i><span><?php echo i18n::__('AdminUsu') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>' ><i class="fa fa-user"></i><span><?php echo i18n::__('creden') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('bitacora', 'index') ?>' ><i class="fa fa-edit fa-fw"></i><span><?php echo i18n::__('Bitacora') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('evento', 'index') ?>' ><i class="fa fa-calendar"></i><span><?php echo i18n::__('Evento') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('categoria', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('Categoria') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('datosusuario', 'index') ?>' ><i class="fa fa-database"></i><span><?php echo i18n::__('DatoUsu') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('usuarioCredencial', 'index') ?>' ><i class="fa fa-unlock"></i><span><?php echo i18n::__('userCredencial') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('recordarMe', 'index') ?>' ><i class="fa fa-bookmark"></i><span><?php echo i18n::__('RecordarMe') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('localidad', 'index') ?>' ><i class="fa fa-building"></i><span><?php echo i18n::__('Localidad') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('organizacion', 'index') ?>' ><i class="fa fa-university"></i><span><?php echo i18n::__('Organizacion') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('tipoDocumento', 'index') ?>' ><i class="fa fa-file-text-o"></i><span><?php echo i18n::__('tipoDocumento') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('detallePqrs', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('detallePqrs') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('estadoPqrs', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('Estado') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('eventoPatrocinador', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('EvePatrocinador') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('patrocinador', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('patrocinador') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('pqrs', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('PQRS') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('tarifa', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('tarifas') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('tipoPqrs', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('tipoPqrs') ?></span> <span class="pull-right"></span></a></li>
                <li><a href='<?php echo routing::getInstance()->getUrlWeb('usuarioGustaCategoria', 'index') ?>' ><i class='icon-home-3'></i><span><?php echo i18n::__('Gusta') ?></span> <span class="pull-right"></span></a></li>
                <li class='has_sub'>
                    <a href='javascript:void(0);'><i class='fa fa-cogs'></i><span><?php echo i18n::__('') ?><?php echo i18n::__('Configuracion') ?></span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a>
                    <ul>
                        <li>
                            <a href='index.html'><span><?php echo i18n::__('') ?><?php echo i18n::__('ConfiSis') ?></span></a>
                        </li>
                        <li><a href='<?php echo routing::getInstance()->getUrlWeb('maintenance', 'system') ?>'><span><?php echo i18n::__('') ?><?php echo i18n::__('Manteni') ?>Mantenimiento </span></a></li>
                    </ul>
                </li>
        </div>
        <div class="clearfix"></div>
        <div class="portlets">

        </div>
        <div class="clearfix"></div><br><br><br>
    </div>
</div>
<!-- Left Sidebar End -->