<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\config\configClass as config ?>
<?php
use \mvc\request\requestClass as request ?>
<?php
use mvc\session\sessionClass as session;
use mvc\view\viewClass as view;
?>
<?php
$usuarios = usuarioTableClass::countUsers();
$eventos = eventoTableClass::countEvents();
$peticiones = pqrsTableClass::countPqrsf();
?>
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
                    <a href="<?php echo \mvc\routing\routingClass::getInstance()->getUrlWeb('shfSecurity', 'logout') ?>"  class="btn btn-success">Si! , Deseo Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end Modal logout -->
    <!-- Begin page -->
    <div id="wrapper">

        <?php mvc\view\viewClass::includePartial('partials/sideBarMenu') ?>
        <?php mvc\view\viewClass::includePartial('partials/topBarMenu') ?>
        <?php mvc\view\viewClass::includePartial('partials/rightSideBar') ?>

        <!-- Right Sidebar End -->		
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                <!-- Start info box -->
                <div class="row top-summary">
                    <div class="col-lg-3 col-md-6">
                        <div class="widget green-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="icon-globe-inv"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata"><?php echo i18n::__('total') ?> <b><?php echo i18n::__('VISITORS') ?></b></p>
                                    <h2><span class="animate-number" data-value="25153" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b><?php echo i18n::__('39%') ?></b> <?php echo i18n::__('increase') ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget red-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    
                                    <i class="fa fa-calendar-o"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata"> <?php echo i18n::__('total') ?> <b>Eventos </b></p>
                                    <h2><span class="animate-number" data-value="<?php echo $eventos ?>" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b><?php echo i18n::__('6%') ?></b> <?php echo i18n::__('increaseusers') ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget lightblue-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata"> <?php echo i18n::__('total') ?> <b> PQRSF´S</b></p>
                                    <h2><span class="animate-number" data-value="<?php echo $peticiones ?>" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b><?php echo i18n::__('6%') ?></b> <?php echo i18n::__('increaseusers') ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="widget lightblue-1 animated fadeInDown">
                            <div class="widget-content padding">
                                <div class="widget-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <div class="text-box">
                                    <p class="maindata"> <?php echo i18n::__('total') ?> <b><?php echo i18n::__('USERS') ?></b></p>
                                    <h2><span class="animate-number" data-value="<?php echo $usuarios ?>" data-duration="3000">0</span></h2>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="widget-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <i class="fa fa-caret-up rel-change"></i> <b><?php echo i18n::__('6%') ?></b> <?php echo i18n::__('increaseusers') ?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of info box -->

                <div class="row">
                    <div class="col-lg-8 portlets">
                        


                    </div>
                    <div class="col-lg-4 portlets">
                        <div class="widget darkblue-3">
                            <div class="widget-header transparent">
                                <h2><strong><?php echo i18n::__('Server') ?></strong> Status</h2>
                                <div class="additional-btn">
                                    <a href="javascript:location.reload()" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><?php echo i18n::__('Action') ?></a></li>
                                        <li><a href="#"><?php echo i18n::__('Another') ?></a></li>
                                        <li><a href="#"><?php echo i18n::__('total') ?></a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><?php echo i18n::__('Separated') ?></a></li>
                                    </ul>
                                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                    <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div id="website-statistic2" class="statistic-chart">

                                    <div class="col-sm-12 stacked">
                                        <h4><i class="fa fa-circle-o text-green-1"></i> <?php echo i18n::__('ServerLoads') ?></h4>
                                        <div class="col-sm-8 status-data">

                                            <div class="col-xs-12">
                                                <div class="row stacked">
                                                    <div class="col-xs-4 text-center right-border">
                                                        MB<br>
                                                        <span class="animate-number" data-value="<?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?>">0</span>
                                                    </div>
                                                    <div class="col-xs-4 text-center right-border">
                                                        <i class="fa fa-database"></i><br>
                                                        <?php if (session::getInstance()->hasAttribute('mvcDbQuery')): ?>
                                                            <span class="animate-number" data-value="<?php echo session::getInstance()->getAttribute('mvcDbQuery') ?>" >0</span>
                                                            <?php session::getInstance()->deleteAttribute('mvcDbQuery') ?>
                                                        <?php endif ?>
                                                    </div>
                                                    <div class="col-xs-4 text-center">
                                                        seg.<br>
                                                        <span class="animate-number" data-value="<?php echo number_format((microtime(true) - $GLOBALS['timeIni']), '4', '.', '\'') ?>" >0</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="progress progress-xs">
                                                <div style="width: <?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?>%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?>" role="progressbar" class="progress-bar bg-orange-2" title="Average Load: <?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?>%" data-placement="right" data-toggle="tooltip">
                                                    <span class="sr-only"><?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?>% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <div class="ws-load echart" data-percent="<?php echo number_format((memory_get_usage() / 1048576), '3', '.', '\'') ?>"><span class="percent"></span></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="home-chart-2"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 portlets">
                        <div class="widget">
  
                        </div>
                    </div>
                    <div class="col-lg-4 portlets">

                        <div class="row">
                            <div class="col-sm-12">
                                <div id="notes-app" class="widget">
                                    <div class="notes-line"></div>
                                    <div class="widget-header centered transparent">
                                        <div class="left-btn btn-group"><a class="btn btn-sm btn-primary add-note"><i class="fa fa-plus"></i></a><a class="btn btn-sm btn-primary back-note-list"><i class="icon-align-justify"></i></a></div>
                                        <h2>Notas</h2>
                                        <div class="additional-btn">
                                            <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                            <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                            <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                            <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                            <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                        </div>
                                    </div>
                                    <div class="widget-content padding-sm">
                                        <div id="notes-list">
                                            <div class="scroller">
                                                <ul class="list-unstyled">
                                                </ul>
                                            </div>
                                        </div>
                                        <div id="note-data">
                                            <form>
                                                <textarea class="form-control" id="note-text" placeholder="Escribe Tu Nota..."></textarea>
                                            </form>
                                        </div>
                                        <div class="status-indicator"><?php echo i18n::__('Guardado') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-lg-4 col-md-6 portlets">
                        <div id="calc" class="widget darkblue-2">
                            <div class="widget-header">
                                <div class="additional-btn left-toolbar">
                                    <div class="btn-group">
                                        <a class="additional-icon" id="dropdownMenu2" data-toggle="dropdown">
                                            <?php echo i18n::__('Calculadora') ?> Calculadora <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                                            <li><a href="#"><?php echo i18n::__('Guardado') ?></a></li>
                                            <li><a href="#"><?php echo i18n::__('Export') ?></a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><?php echo i18n::__('total') ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>

                                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div id="calculator" class="widget-content">
                                <div class="calc-top col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-3"><span class="calc-clean"><?php echo i18n::__('C') ?></span></div>
                                        <div class="col-xs-9"><div class="calc-screen"></div></div>
                                    </div>
                                </div>

                                <div class="calc-keys col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-3"><span><?php echo i18n::__('7') ?></span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('8') ?>8</span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('9') ?>9</span></div>
                                        <div class="col-xs-3"><span class="calc-operator">+</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>4</span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>5</span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>6</span></div>
                                        <div class="col-xs-3"><span class="calc-operator">-</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>1</span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>2</span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>3</span></div>
                                        <div class="col-xs-3"><span class="calc-operator">÷</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>0</span></div>
                                        <div class="col-xs-3"><span><?php echo i18n::__('total') ?>.</span></div>
                                        <div class="col-xs-3"><span class="calc-eval"><?php echo i18n::__('total') ?>=</span></div>
                                        <div class="col-xs-3"><span class="calc-operator"><?php echo i18n::__('total') ?>x</span></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6 portlets">
                        <!-- <div id="stock-widget" class="widget">
                            <div class="widget-header transparent">
                                <h2><strong>Realtime</strong> Stock Chart</h2>
                                <div class="additional-btn">
                                    <a href="#" onclick="fetchData()" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                <h4 id="stock-title"><strong>Google Inc</strong> Stock Chart</h4>
                                <div class="stock-options pull-right btn-group">
                                    <a class="btn btn-sm btn-default active" href="javascript:;" data-stock="GOOG">GOOGLE</a>
                                    <a class="btn btn-sm btn-default" href="javascript:;" data-stock="AMZN">AMAZON</a>
                                    <a class="btn btn-sm btn-default" href="javascript:;" data-stock="^IXIC">NASDAQ</a>
                                    <a class="btn btn-sm btn-default" href="javascript:;" data-stock="^GSPC">S&P</a>
                                </div>
                                <div id="stock-chart"></div>
                            </div>
                        </div>-->
                    </div>
                    <div class="col-lg-4 col-md-6 portlets">
                        <div id="stock-app" class="widget green-3">
                            <div class="widget-header transparent">
                                <h2><strong><?php echo i18n::__('total') ?>Stock</strong> Markets</h2>
                                <div class="additional-btn">
                                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                    <a class="hidden" id="dropdownMenu1" data-toggle="dropdown">
                                        <i class="fa fa-cogs"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right" role="menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><?php echo i18n::__('total') ?>Action</a></li>
                                        <li><a href="#"><?php echo i18n::__('total') ?>Another action</a></li>
                                        <li><a href="#"><?php echo i18n::__('total') ?>Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#"><?php echo i18n::__('total') ?>Separated link</a></li>
                                    </ul>
                                    <a href="#" class="widget-popout hidden tt" title="Pop Out/In"><i class="icon-publish"></i></a>
                                    <a href="#" class="widget-maximize hidden"><i class="icon-resize-full-1"></i></a>
                                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                    <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                                </div>
                            </div>
                            <div class="widget-content">
                                <div id="website-statistic3" class="statistic-chart">	
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h2><?php echo i18n::__('total') ?>NASDAQ</h2>
                                        </div>
                                        <div class="col-xs-6">
                                            <label id="nasdaq-status" class="stock-status"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h2><?php echo i18n::__('total') ?>DOW JONES</h2>
                                        </div>
                                        <div class="col-xs-6">
                                            <label id="dow-status" class="stock-status"></label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <h2>S&P</h2>
                                        </div>
                                        <div class="col-xs-6">
                                            <label id="sp-status" class="stock-status"></label>
                                        </div>
                                    </div>
                                </div>
                                <div id="home-chart-3"></div>
                            </div>
                            <div class="widget-footer">
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
    <div id="contextMenu" class="dropdown clearfix">
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
            <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
            <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
            <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
            <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
        </ul>
    </div>
    <!-- End of page -->
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>

</div>