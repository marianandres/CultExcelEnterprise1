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
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h3><a style="margin-left: 15%"><?php echo i18n::__('EXCEL|') ?></a></h3>
        </div>
        <button class="button-menu-mobile open-left">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i><?php echo i18n::__('Notas') ?></a>
                                </div>
                                <!--                                <div class="col-xs-4">
                                                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i><?php echo i18n::__('Todo') ?></a>
                                                                </div>-->
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i><?php echo i18n::__('Calculadora') ?></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i><?php echo i18n::__('Finanzas') ?></a>
                                </div>
                            </div>
                            <div class="row stacked">
                                <!--                                <div class="col-xs-4">
                                                                    <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i><?php echo i18n::__('Weather') ?></a>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i><?php echo i18n::__('Calendario') ?></a>
                                                                </div>-->
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li style="margin-top: 5%">
                        <form id="frmTraductor" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'traductor') ?>" method="POST">
                            <li class="language_bar">
                                <select class="form-control select_imagen" data-style="btn-default" data-width="auto" name="language" onchange="$('#frmTraductor').submit()">
                                    <option class="es" <?php echo( config::getDefaultCulture() == 'es') ? 'selected' : '' ?> value="es"><?php echo i18n::__('Español') ?></option>
                                    <option class="en" <?php echo( config::getDefaultCulture() == 'en') ? 'selected' : '' ?> value="en"><?php echo i18n::__('English') ?></option>
                                </select>
                                <input type="hidden" name="PATH_INFO" value="<?php echo request::getInstance()->getServer('PATH_INFO') ?>">
                            </li>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                        <ul class="dropdown-menu dropdown-message">
                           
                        </ul>-->
                    </li>
                    <li class="dropdown iconify hide-phone">
<!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">

                        </ul>-->
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="<?php echo routing::getInstance()->getUrlImg('logo/logo.jpg') ?>"></span><strong><?php echo \mvc\session\sessionClass::getInstance()->getUserName() ?></strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
<!--                            <li><a href="<?php echo routing::getInstance()->getUrlWeb('profile', 'index') ?>"><?php echo i18n::__('My') ?> </a></li>
                            <li><a href="#"><?php echo i18n::__('Change') ?></a></li>-->
<!--                            <li><a href="#"><?php echo i18n::__('Account') ?></a></li>-->
                            <li class="divider"></li>
<!--                            <li><a href="#"><i class="icon-help-2"></i> <?php echo i18n::__('Help') ?></a></li>-->
<!--                            <li><a href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>"><i class="icon-lock-1"></i><?php echo i18n::__('Lock') ?></a></li>-->
                            <li><a class="md-trigger" data-toggle="modal" data-target="#myModal"><i class="icon-logout-1"></i><?php echo i18n::__('Logout') ?></a></li>
                        </ul>
                    </li>
<!--                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>-->
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->