<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<?php
use mvc\config\configClass as config ?>
<?php
use \mvc\request\requestClass as request ?>
<?php $usuario = usuarioTableClass::USER; ?>
<div class="fixed-left">
    <!-- Modal Start -->
    <!-- Modal logout -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h3><strong>Logout</strong> Confirmation</h3>
                        <p>Are you sure want to logout from this awesome system?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No!</button>
                    <a  href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>" class="btn btn-success">Si! , Deseo Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal logout -->
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <?php view::includePartial('partials/topBarMenu') ?>
        <!-- Top Bar End -->
        <!-- Left Sidebar Start -->
        <?php view::includePartial('partials/sideBarMenu') ?>
        <!-- Left Sidebar End -->		    
        <!-- Right Sidebar Start -->
        <?php view::includePartial('partials/rightSideBar') ?>
        <!-- Right Sidebar End -->
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                <?php view::includeHandlerMessage() ?>
                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class="fa fa-users"></i>  <?php echo i18n::__('adminusu') ?></h1>
                    <h3><?php echo i18n::__('adminusulow') ?></h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong><?php echo i18n::__('adminusu') ?></strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                <br>					
                                <?php view::includeHandlerMessage() ?>
                                <?php view::includePartial('usuario/formUser', array('objUsuario' => $objUsuario, 'usuario' => $usuario)) ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <?php view::includePartial('partials/footerBar') ?>
                <!-- Footer End -->			
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->
        </div>
        <!-- End right content -->
    </div>
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</div> -->