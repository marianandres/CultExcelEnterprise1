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
            <h3><a  href="<?php echo routing::getInstance()->getUrlWeb('admin', 'index') ?>"><img src="<?php echo \mvc\routing\routingClass::getInstance()->getUrlImg('logo/logo.jpg') ?>" width="45" height="31" style="border-radius: 10px;" alt="Logo_index" > <?php echo i18n::__('EXCEL|') ?></a></h3>
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
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="todo-app" data-status="active"><i class="icon-check"></i><?php echo i18n::__('Todo') ?></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i><?php echo i18n::__('Calculadora') ?></a>
                                </div>
                            </div>
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="weather-widget" data-status="active"><i class="icon-cloud-3"></i><?php echo i18n::__('Weather') ?></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i><?php echo i18n::__('Calendario') ?></a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="stock-app" data-status="inactive"><i class="icon-chart-line"></i><?php echo i18n::__('Finanzas') ?></a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <form id="frmTraductor" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'traductor') ?>" method="POST">
                        <li class="language_bar">
                            <select class="form-control select_imagen" data-style="btn-default" data-width="auto" name="language" onchange="$('#frmTraductor').submit()">
                                <option class="es" <?php echo( config::getDefaultCulture() == 'es') ? 'selected' : '' ?> value="es"><?php echo i18n::__('Español') ?></option>
                                <option class="en" <?php echo( config::getDefaultCulture() == 'en') ? 'selected' : '' ?> value="en"><?php echo i18n::__('English') ?></option>
                            </select>
                            <input type="hidden" name="PATH_INFO" value="<?php echo request::getInstance()->getServer('PATH_INFO') ?>">
                        </li>
                    </form>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute">4</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                        <br /><i>2 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>
                                        <br /><i>8 minutes ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>John Malkovich</strong> Added 3 products
                                        <br /><i>3 hours ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                        <br /><i>12 hours ago</i>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <p><strong>Johnny Depp</strong> Updated his avatar
                                        <br /><i>Yesterday</i>
                                    </p>
                                </a>
                            </li>
                            <li class="dropdown-footer">
                                <div class="btn-group btn-group-justified">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>John Doe</strong><i class="pull-right msg-time">5 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Sandra Kraken</strong><i class="pull-right msg-time">22 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="clearfix">
                                    <img src="images/users/chat/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
                                    <strong>Zoey Lombardo</strong><i class="pull-right msg-time">41 minutes ago</i><br />
                                    <p>Duis autem vel eum iriure dolor in hendrerit ...</p>
                                </a>
                            </li>
                            <li class="dropdown-footer"><div class=""><a href="#" class="btn btn-sm btn-block btn-primary"><i class="fa fa-share"></i> See all messages</a></div></li>
                        </ul>
                    </li>
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="images/users/user-35.jpg"></span><strong><?php echo \mvc\session\sessionClass::getInstance()->getUserName() ?></strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><?php echo i18n::__('My') ?> </a></li>
                            <li><a href="#"><?php echo i18n::__('Change') ?></a></li>
                            <li><a href="#"><?php echo i18n::__('Account') ?></a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> <?php echo i18n::__('Help') ?></a></li>
                            <li><a href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>"><i class="icon-lock-1"></i><?php echo i18n::__('Lock') ?></a></li>
                            <li><a class="md-trigger" data-toggle="modal" data-target="#myModal"><i class="icon-logout-1"></i><?php echo i18n::__('Logout') ?></a></li>
                        </ul>
                    </li>
                    <li class="right-opener">
                        <a href="javascript:;" class="open-right"><i class="fa fa-angle-double-left"></i><i class="fa fa-angle-double-right"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
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