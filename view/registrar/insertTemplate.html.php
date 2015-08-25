<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>
<?php
use mvc\view\viewClass as view ?>
<!-- Full Body Container -->
<div id="container" class="boxed-page">
    <?php view::includePartial('partials/header.html') ?>    
    <div class="section purchase">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2"></div>
                <div class=" col-lg-6 col-md-8 col-sm-12 col-xs-12">
                    <?php view::includeHandlerMessage() ?>
                    <?php view::includePartial('registrar/formUser', array('mensaje' => $mensaje)) ?>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>


        </div><!-- .container -->
    </div>

    <?php view::includePartial('partials/footer.html') ?>
    <!-- Modal -->
    <div class="modal fade" id="t_and_c_m" style="margin-top: 100px;" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo i18n::__('Condiciones') ?></h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo i18n::__('Yo') ?></button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<!-- End Full Body Container -->
<!-- Modal registro -->
<?php echo (session::getInstance()->hasFlash('exito')) ? '

  <div class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Notificacion </h4>
        </div>
        <div class="modal-body">
          <div class="text-center">
            <h3><strong>Bienvenido</strong>  a Nuestra Comunidad Empresarial</h3>
            <p>Su Registro A cult Excel fue Exitoso. si Desea Puede Iniciar Sesion</p>
            <a href="<?php echo routing::getInstance()->getUrlWeb("admin", "index") ?>">Iniciar Sesion</a>

          </div>
        </div>
      </div>
    </div>
  </div>' : '' ?>
<!-- end Modal registro -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>
<div id="loader" style="display: none;">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<div id="ascrail2000" class="nicescroll-rails" style="width: 5px; z-index: 999999999; cursor: default; position: fixed; top: 0px; height: 100%; right: 0px; opacity: 0;">
    <div style="position: relative; top: 0px; float: right; width: 5px; height: 74px; border: 0px; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; background-color: rgb(51, 51, 51); background-clip: padding-box;">

    </div>
</div>