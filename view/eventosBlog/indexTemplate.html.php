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
<?php $fechafnlpublicacion = eventoTableClass::FECHA_FINAL_PUBLICACION ?>
<?php $fechainipublicacion = eventoTableClass::FECHA_INICIAL_PUBLICACION ?>
<?php $fechafnlevento = eventoTableClass::FECHA_FINAL_EVENTO ?>
<?php $fechainievento = eventoTableClass::FECHA_INICIAL_EVENTO ?>
<?php $direccion = eventoTableClass::DIRECCION ?>
<?php $descripcion = eventoTableClass::DESCRIPCION ?>
<?php $usu = eventoTableClass::NOMBRE ?>
<?php $imagen = eventoTableClass::IMAGEN ?>
<?php $id = eventoTableClass::ID ?>
<?php $costo = eventoTableClass::COSTO ?>
<?php $categoria = categoriaTableClass::NOMBRE ?>
<?php $facebook = eventoTableClass::FACEBOOK ?>
<?php $twitter = eventoTableClass::TWITTER ?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php echo i18n::__('Eventos') ?></h2>
                    <p><?php echo i18n::__('EventosRecientes') ?> </p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#"><?php echo i18n::__('Inicio') ?></a></li>
                        <li><?php echo i18n::__('Eventos') ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!--Sidebar-->
    <div class="col-md-3 sidebar left-sidebar">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Content</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">Articles</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">News</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-file text-info"></span><a href="http://www.jquery2dotnet.com">Newsletters</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-comment text-success"></span><a href="http://www.jquery2dotnet.com">Comments</a>
                                    <span class="badge">42</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Invoices</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Shipments</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Tex</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Change Password</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Notifications</a> <span class="label label-info">5</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-trash text-danger"></span><a href="http://www.jquery2dotnet.com" class="text-danger">
                                        Delete Account</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Reports</a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Sales</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Customers</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Products</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-shopping-cart"></span><a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End sidebar-->

    <!-- Start Purchase Section -->
    <div class="section service">
        <div class="container">
            <div class="col-md-6">
                <h1 class="page-header"><i class="fa fa-calendar-o"></i> <?php echo i18n::__('EventosRecientes') ?></h1>
            </div>
            <div class="row">

                <div class="  col-sm-9 ">
                    <ul class="event-list">
                        <?php foreach ($objEventos as $eventos): ?>
                            <li>
                                <time datetime="2014-07-20 0000">
                                    <span class="day"><?php echo $eventos->$fechainievento ?></span>
                                </time>
                                <img src="../../web/upload/<?php
                                if ($eventos->$imagen == null) {
                                    echo 'default.jpg';
                                } else {
                                    echo $eventos->$imagen;
                                }
                                ?>" width="500" height="500">
                                <div class="info">
                                    <h2 class="title page-header"><?php echo $eventos->$usu ?></h2>
                                    <p class="desc"><?php echo $eventos->$descripcion ?></p>
                                    <p class="desc">Direccion: <?php echo $eventos->$direccion ?></p>
                                    <p class="desc">Inicio:<?php echo $eventos->$fechainievento ?>  Fin: <?php echo $eventos->$fechafnlevento ?></p>

                                    <ul>

                                        <li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Categoria: <?php echo $eventos->$categoria ?></a></li>
                                        <li style="width:50%;"><span class="fa fa-money"></span> <?php
                                            if ($eventos->$costo == 0) {
                                                echo 'Gratis / Free';
                                            } else {
                                                echo $eventos->$costo;
                                            }
                                            ?></li>
                                    </ul>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook" style="width:33%;"><a href="https://www.<?php
                                            if ($eventos->$facebook == null) {
                                                echo 'facebook.com';
                                            } else {
                                                echo $eventos->$facebook;
                                            }
                                            ?>"><span class="fa fa-facebook"></span></a></li>
                                        <li class="twitter" style="width:34%;"><a href="https://www.<?php
                                            if ($eventos->$twitter == null) {
                                                echo 'twitter.com';
                                            } else {
                                                echo $eventos->$twitter;
                                            }
                                            ?>"><span class="fa fa-twitter"></span></a></li>
                                        <li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
                                    </ul>
                                </div>
                            </li>
                        <?php endforeach ?>
                    </ul>
                    <div class="text-center">
                        Pagina <select id="sqlPaginador" onchange="paginador(this, '<?php echo routing::getInstance()->getUrlWeb('eventosBlog', 'index') ?>')">
                        <?php for ($x = 1; $x <= $cntPages; $x++): ?>
                                <option <?php echo (isset($page) and $page == $x) ? 'selected' : '' ?> value="<?php echo $x ?>"><?php echo $x ?></option>
                            <?php endfor ?>
                        </select> 
                        de <?php echo $cntPages ?>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div>
    <!-- End Purchase Section --> 

    <!--  </header> -->
    <!-- End Header Section -->

    <!-- Start Services Section -->
    <?php mvc\view\viewClass::includePartial('partials/footer.html') ?>
</div>
<!-- End Full Body Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>