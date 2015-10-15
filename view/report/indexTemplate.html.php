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
<div class="fixed-left">
    <!-- Modal Start -->
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

                <!-- Page Heading Start -->
                <div class="page-heading">
                    <h1><i class="fa fa-files-o"></i>  <?php ?><?php echo i18n::__('Reportes') ?> </h1>
                    <h3><?php ?><?php echo i18n::__('PublicadosCategoria') ?> </h3>            	</div>
                <!-- Page Heading End-->				<!-- Your awesome content goes here -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong><?php ?> <?php echo i18n::__('GraficaCategoria') ?></strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                </br>
                                <br>					
                                <div class="row">
                                    <div class="widget-content padding">
                                        <?php if (empty($objCategoryEvents)): ?>
                                            <?php echo "<h1>" . "no hay registros" . "</h1>"; ?>
                                        <?php endif; ?>
                                        <div id="report-event"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="widget-header">
                                <h2><strong><?php ?> <?php echo i18n::__('PublicadosCategoria') ?></strong></h2>
                                <div class="additional-btn">

                                    <a href="javascript:location.reload(true)" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                </br>
                                <?php view::includeHandlerMessage() ?>
                                <br>					
                                <div class="table-responsive">
                                    <form id="frmDeleteAll" class='form-horizontal' action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteSelect') ?>" method="POST">
                                        <div  style="margin-bottom: 10px; margin-left: 10px; margin-top: 20px;">
                                            <a href="<?php echo routing::getInstance()->getUrlWeb('report', 'report') ?>" class="btn btn-primary btn-medium"><i class="fa fa-file-pdf-o"></i> <?php echo i18n::__('PDF') ?></a>
<!--                                            <a href="#" onclick="window.print();" class="btn btn-primary btn-medium" title="Imprimir"><i class="fa fa-print"></i> </a> -->
<!--                                            <button type="button" class="btn btn-primary btn-medium" data-toggle="modal" data-target="#myModalfilter"><i class="fa fa-search"></i> <?php echo i18n::__('Filtrar') ?></button>
                                            <a class="btn btn-default btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('usuario', 'deleteFilters') ?>"><i class="fa fa-minus-circle"></i> <?php echo i18n::__('EliminarFiltros') ?></a>-->
                                        </div>
                                        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Categoria De Eventos</th>
                                                    <th>Cantidad De Eventos x Categoria</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>

                                                    <th>Categoria De Eventos</th>
                                                    <th>Cantidad De Eventos x Categoria</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach ($objCategoryEvents as $categoryEvents): ?>
                                                    <tr>

                                                        <td><?php echo $categoryEvents->nombre ?></td>
                                                        <td><?php echo $categoryEvents->conteo ?></td>

                                                    </tr>
                                                <?php endforeach ?>
                                            </tbody>
                                        </table>
                                    </form>
                                    <form id="frmDelete" action="<?php echo routing::getInstance()->getUrlWeb('usuario', 'delete') ?>" method="POST">
                                        <input type="hidden" id="idDelete" name="<?php echo usuarioTableClass::getNameField(usuarioTableClass::ID, true) ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <?php view::includePartial('partials/footerBar') ?>
                <!-- Footer En<d -->			
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
    <script>
        Morris.Bar({
        element: 'report-event',
                resize: true,
                data: [

                    {y: '2011', a: 75, b: 65}

                ],
                xkey: 'y',
                ykeys: ['a', ],
                labels: ['Series A']
        });
    </script>
</div>