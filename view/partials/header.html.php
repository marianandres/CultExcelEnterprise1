<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\session\sessionClass as session ?>
<?php
use mvc\config\configClass as config ?>
<?php
use mvc\request\requestClass as request ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<!-- Start Header Section --> 
<div class="hidden-header"></div>
<header class="clearfix">
    <!-- Start Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- Start Contact Info -->
                    <ul class="contact-details">
                        <li><a href="#"><i class="fa fa-map-marker"></i> <?php echo i18n::__('lugar') ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                        </li>
                        <li><a href="#">  <?php echo i18n::__('EXCEL') ?> <i class="fa fa-phone"></i> +57 345 678 000</a>
                        </li>
                    </ul>
                    <!-- End Contact Info -->
                </div><!-- .col-md-6 -->
                <div class="col-md-5">
                    <!-- Start Social Links -->
                    <ul class="social-list">
                        <li>
                            <form id="frmTraductor" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'traductor') ?>" method="POST">

                                <select class="form-control" data-style="btn-default" data-width="auto" name="language" onchange="$('#frmTraductor').submit()">
                                    <option class="es" <?php echo( config::getDefaultCulture() == 'es') ? 'selected' : '' ?> value="es"><?php echo i18n::__('Español') ?></option>
                                    <option class="en" <?php echo( config::getDefaultCulture() == 'en') ? 'selected' : '' ?> value="en"><?php echo i18n::__('English') ?></option>
                                </select>
                                <input type="hidden" name="PATH_INFO" value="<?php echo request::getInstance()->getServer('PATH_INFO') ?>">
                            </form>
                        </li>
                        <li>
                            <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/Gano-Excel-Colombia-Sitio-Oficial-111734625565545/timeline/?__mref=message_bubble"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/ganoexcel_col"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="https://plus.google.com/114777112790218825340/posts"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>
                    <!-- End Social Links -->
                </div><!-- .col-md-6 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-bar -->
    <!-- End Top Bar -->


    <!-- Start  Logo & Naviagtion  -->
    <div class="navbar navbar-default navbar-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Stat Toggle Nav Link For Mobiles -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <!-- End Toggle Nav Link For Mobiles -->
                <a class="navbar-brand" href="<?php echo routing::getInstance()->getUrlWeb('homepage', 'index') ?>"> <img src="<?php echo routing::getInstance()->getUrlImg('logo/logo.jpg') ?>" width="45" height="20" style="border-radius: 10px;" alt="Logo_index" ><strong> <?php echo i18n::__('EXCEL') ?>  |</strong></a>
            </div>
            <div class="navbar-collapse collapse">
                <!-- Stat Search ---->                    
                <div class="search-side">
                    <a href="#" class="show-search"><i class="fa fa-search"></i></a>
                    <div class="search-form">
                        <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                            <input type="text" value="" name="s" id="s" placeholder="Buscar Eventos ...">
                        </form>
                    </div>
                </div><!--
                <!-- End Search -->
                <!-- Start Navigation List -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo routing::getInstance()->getUrlWeb('homepage', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('homepage')) ? 'active' : '' ?>"><i class="fa fa-home"></i> <?php echo i18n::__('Inicio') ?></a>
                    </li>
                    <li>
                        <a href="#"class="<?php echo (session::getInstance()->hasFlash('vision')) ? 'active' : '' ?><?php echo (session::getInstance()->hasFlash('mision')) ? 'active' : '' ?>" ><?php echo i18n::__('Nosotros') ?></a>
                        <ul class="dropdown">
                            <li><a href="<?php echo routing::getInstance()->getUrlWeb('vision', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('vision')) ? 'active' : '' ?>"><?php echo i18n::__('Vision') ?></a></li>
                            <li><a href="<?php echo routing::getInstance()->getUrlWeb('mision', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('mision')) ? 'active' : '' ?>"><?php echo i18n::__('Mision') ?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('eventosBlog')) ? 'active' : '' ?>" ><?php echo i18n::__('Evento') ?></a>
                    </li>
                    <?php if (session::getInstance()->isUserAuthenticated() == true) { ?>
                        <?php if (usuarioTableClass::getVerifyUser(mvc\session\sessionClass::getInstance()->getUserId()) == 0) { ?>
                        
                    <?php } elseif(usuarioTableClass::getVerifyUser(mvc\session\sessionClass::getInstance()->getUserId()) == 2) { ?>
                    
                        <?php } else { ?>
                            <li>                        
                                <a class="btn btn-info btn-medium btn-bordered <?php echo (session::getInstance()->hasFlash('eventos')) ? 'active' : '' ?>" style="color: #2b2b2b; font-weight: bold;" href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('eventos', 'insert') ?>"><?php echo i18n::__('Crear') ?></a>                     
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <li>
                        <a href="<?php echo routing::getInstance()->getUrlWeb('contact', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('contact')) ? 'active' : '' ?>"><?php echo i18n::__('Contacto') ?></a>
                    </li>
                    <?php if (session::getInstance()->isUserAuthenticated() == true): ?>
                        <?php if (session::getInstance()->hasCredential('admin')): ?>
                            <li>
                                <a href="<?php echo routing::getInstance()->getUrlWeb('admin', 'index') ?>"><i class="fa fa-laptop"></i> <?php echo i18n::__('Sistema') ?></a>
                                <ul class="dropdown">
                                    <li>
                                        <a href="<?php echo routing::getInstance()->getUrlWeb('admin', 'index') ?>"><i class="fa fa-users"></i> <?php echo i18n::__('adminpanel') ?></a>
                                    </li>
                                    <!--                                    <li>
                                                                            <a href="<?php echo routing::getInstance()->getUrlWeb('credencial', 'index') ?>"><i class="fa fa-user"></i> <?php echo i18n::__('creden') ?></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="404.html"><?php echo i18n::__('Bitacora') ?></a>
                                                                        </li>-->
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo routing::getInstance()->getUrlWeb('help', 'index') ?>"><i class="fa fa-info-circle"></i> <?php echo i18n::__('Ayuda') ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php else: ?>
                            <li>
                                <a href="#" class="<?php echo (session::getInstance()->hasFlash('userEvents')) ? 'active' : '' ?>"><i class="fa fa-laptop"></i> <?php echo i18n::__('Mi') ?></a>
                                <ul class="dropdown">

                                    <li>
                                        <a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('userEvents', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('userEvents')) ? 'active' : '' ?>"><i class="fa fa-calendar-o"></i> <?php echo i18n::__('Mis') ?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('userPQRS', 'index') ?>" class="<?php echo (session::getInstance()->hasFlash('userPQRS')) ? 'active' : '' ?>"><i class="fa fa-envelope-square"></i> <?php ?> Mis PQRS</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo routing::getInstance()->getUrlWeb('help', 'index') ?>"><i class="fa fa-info-circle"></i> <?php echo i18n::__('Ayuda') ?></a>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>

                        <li>
                            <a href="#"><i class="fa fa-user"></i> <?php echo session::getInstance()->getUserName() ?><span class="caret"></span></a>
                            <ul class="dropdown" role="menu">
                                <li><a href="<?php echo routing::getInstance()->getUrlWeb('profile', 'index') ?>"><i class="fa fa-user"></i><?php echo i18n::__('Perfiles') ?></a></li>
    <!--                                <li><a href="#"><i class="fa fa-cogs"></i> <?php echo i18n::__('Cambiar') ?></a></li>-->
                                <li class="divider"></li>
                                <li><a data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-out"></i><?php echo i18n::__('Cerrar') ?></a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="<?php echo routing::getInstance()->getUrlWeb('registrar', 'insert') ?>" class="<?php echo (session::getInstance()->hasFlash('register')) ? 'active' : '' ?>" ><?php echo i18n::__('Registrar') ?></a>
                        </li>
                        <li>
                            <a href="<?php echo routing::getInstance()->getUrlWeb('shfSecurity', 'index') ?>"  class="<?php echo (session::getInstance()->hasFlash('ingresar')) ? 'active' : '' ?>"><i class="fa fa-user"></i> <?php echo i18n::__('Iniciar') ?></a>                
                        </li>
                    <?php endif; ?>  

                </ul>
                <!-- End Navigation List -->
            </div>
        </div>
    </div>
    <!-- End Header Logo & Naviagtion -->
</header> 
<!-- End Header Section -->
<!-- Modal logout -->
<div class="modal fade" id="myModal" style="margin-top: 150px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cerrar Session</h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h3><strong>Logout</strong> Confirmation</h3>
                    <p>Are you sure want to logout from this awesome system?</p>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">No!</button>
                <a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>"  class="btn btn-success"><?php echo i18n::__('Deseo') ?></a>
            </div>
        </div>
    </div>
</div>
<!-- end Modal logout -->

<!-- Modal consejos -->
<div class="modal fade" id="consejos" style="margin-top: 150px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Consejos para el paso 1: Detalles del evento</h4>
            </div>
            <div class="modal-body">
                <div class="text-left">

                    <p>Aquí te presentamos algunos consejos de experto sobre los detalles de tu evento:</p></br>
                    <ul style="list-style: disc; padding-left: 10px;">

                        <li>Dale una nota de color a la descripción de tu evento mediante video or fotos.</li>
                        <li>Embellece tu página de perfil de organizador para promocionar tus eventos.</li>
                        <li>Descubre cómo configurar eventos periódicos con total facilidad.</li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Modal logout -->
<!-- Modal verificacion -->
<div class="modal fade" id="userVerify" style="margin-top: 150px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i>Solicitud De Activacion De La Cuenta</h4>
            </div>
            <div class="modal-body">
                <div class="text-left">
                    <form role="form" method="post" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'verificar') ?>">
                        <input name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>" value="<?php echo session::getInstance()->getUserId() ?>" type="hidden">
                        <div class="alert alert-info alert-dismissible" role="alert">
                            <strong>info!</strong> Ingrese su contraseña de usuario para enviar la solucitud de activacion al administrador del Portal Cult Excel
                        </div>
                        <div class="form-group">  
                            <label for="password" class="control-label">Contraseña Del Usuario:</label>	  
                            <input class="form-control" 
                                   type="password" id="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::PASSWORD, true) ?>" placeholder="Ingrese La Contraseña de Usuario" required autofocus>
                        </div>
                        <button class="btn btn-success" type="submit"> Enviar solicitud De Activacion</button>
                    </form>

                </div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
<!-- end Modal logout -->
