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
<?php $usu = usuarioTableClass::USER ?>
<?php $id = usuarioTableClass::ID ?>
<?php $created = usuarioTableClass::CREATED_AT ?>

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
            <div class="profile-banner" style="background-image:url(<?php echo routing::getInstance()->getUrlImg('parallax/bg-02.jpg') ?>);">
                <div class="col-sm-3 avatar-container">
                    <img src="<?php echo routing::getInstance()->getUrlImg('logo/logo.jpg') ?>" class="img-circle profile-avatar" alt="User avatar">
                </div>
<!--                <div class="col-sm-12 profile-actions text-right">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Friends</button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i> Send Message</button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-ellipsis-v"></i></button>
                </div>-->
            </div>
            <div class="content">

                <div class="row">
                    <div class="col-sm-3">
                        <!-- Begin user profile -->
                        <div class="text-center user-profile-2">
                            <h4><b><?php echo \mvc\session\sessionClass::getInstance()->getUserName() ?></b></h4>

<!--                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">1,245</span>
                                    Followers
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">245</span>
                                    Following
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">1,245</span>
                                    Tweets
                                </li>
                            </ul>-->

                            <!-- User button -->
                            <div class="user-button">
                                <div class="row">
                                    
                                </div>
                            </div><!-- End div .user-button -->
                        </div><!-- End div .box-info -->
                        <!-- Begin user profile -->
                    </div><!-- End div .col-sm-4 -->

                    <div class="col-sm-9">
                        <div class="widget widget-tabbed">
                            <!-- Nav tab -->
                            <ul class="nav nav-tabs nav-justified">
                                
                                <li class="active" ><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About</a></li>
                                <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Activities</a></li>
                            </ul>
                            <!-- End nav tab -->

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <!-- Tab about -->
                                <div class="tab-pane animated active fadeInRight" id="about">
                                    <div class="user-profile-content">
                                        <h5><strong>ABOUT</strong> ME</h5>

                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5><strong>CONTACT</strong> ME</h5>
                                                <address>
                                                    <strong>Phone</strong><br>
                                                    <abbr title="Phone">+62 857 123 4567</abbr>
                                                </address>
                                                <address>
                                                    <strong>Email</strong><br>
                                                    <a href="mailto:#">first.last@example.com</a>
                                                </address>
                                                <address>
                                                    <strong>Website</strong><br>
                                                    <a href="http://r209.com">http://r209.com</a>
                                                </address>
                                            </div>
                                            <div class="col-sm-6">
                                                <h5><strong>MY</strong> SKILLS</h5>
                                                <p>UI Design</p>
                                                <p>Clean and Modern Web Design</p>
                                                <p>PHP and MySQL Programming</p>
                                                <p>Vector Design</p>
                                            </div>
                                        </div><!-- End div .row -->
                                    </div><!-- End div .user-profile-content -->
                                </div><!-- End div .tab-pane -->
                                <!-- End Tab about -->


                                <!-- Tab user activities -->
                                <div class="tab-pane animated fadeInRight" id="user-activities">
                                    <div class="scroll-user-widget">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                        <br /><i>2 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                        <br /><i>8 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                        <br /><i>an hour ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Ari Rusmanto</strong> Added 3 products
                                                        <br /><i>3 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                        <br /><i>12 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Johnny Depp</strong> Updated his avatar
                                                        <br /><i>Yesterday</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
                                                        <br /><i>2 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
                                                        <br /><i>8 minutes ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
                                                        <br /><i>an hour ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Ari Rusmanto</strong> Added 3 products
                                                        <br /><i>3 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
                                                        <br /><i>12 hours ago</i></p>
                                                </a>
                                            </li>
                                            <li class="media">
                                                <a href="#fakelink">
                                                    <p><strong>Johnny Depp</strong> Updated his avatar
                                                        <br /><i>Yesterday</i></p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- End div .scroll-user-widget -->
                                </div><!-- End div .tab-pane -->
                                <!-- End Tab user activities -->

                                <!-- Tab user messages -->
                                <div class="tab-pane animated fadeInRight" id="mymessage">
                                    <div class="scroll-user-widget">
                                        <ul class="media-list">
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#fakelink">
                                                    <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- End div .scroll-user-widget -->
                                </div><!-- End div .tab-pane -->
                                <!-- End Tab user messages -->
                            </div><!-- End div .tab-content -->
                        </div><!-- End div .box-info -->
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
</div>