<?php

use mvc\routing\routingClass as routing ?>
<?php
use mvc\i18n\i18nClass as i18n ?>

<!-- Full Body Container -->
<div id="container" class="boxed-page">

    <?php mvc\view\viewClass::includePartial('partials/header.html') ?>
    <!-- Start Page Banner -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Blog</h2>
                    <p>Blog Page With Left Sidebar</p>
                </div>
                <div class="col-md-6">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <div class="container container-fluid">
        <h1 class="page-header"><i class="fa fa-user"></i>  <?php echo i18n::__('register') ?> <?php echo i18n::__('pqrs') ?> </h1>  
        <form class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 " method="post" action="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'create') ?>">
            <label for="contenido" class="sr-only"><?php echo i18n::__('contenido') ?>:</label>	  
            <input class="form-control" type="contenido" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::CONTENIDO, true) ?>" placeholder="Contenido" required autofocus>
            <br>
            <label for="estado_pqrs_id" class="sr-only"><?php echo i18n::__('estadoPqrs') ?>:</label>	  
            <input class="form-control"  type="estado_pqrs_id" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::ESTADO_PQRS_ID, true) ?>" placeholder="Estado Pqrs Id" required autofocus>
            <br>
            <label for="tipo_pqrs_id" class="sr-only"><?php echo i18n::__('tipoPqrs') ?>:</label>	  
            <input class="form-control"  type="tipo_pqrs_id" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TIPO_PQRS_ID, true) ?>" placeholder="Tipo Pqrs Id" required autofocus>
            <br>
            <label for="titulo" class="sr-only"><?php echo i18n::__('titulo') ?>:</label>	  
            <input class="form-control"  type="titulo" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::TITULO, true) ?>" placeholder="Titulo" required autofocus>
            <br>
            <label for="usuario_id" class="sr-only"><?php echo i18n::__('usuario_id') ?>:</label>	  
            <input class="form-control"  type="usuario_id" name="<?php echo pqrsTableClass::getNameField(pqrsTableClass::USUARIO_ID, true) ?>" placeholder="Usuario Id" required autofocus>
            <br>

            <button class="btn btn-medium btn-success"><?php echo i18n::__('register') ?></button>
            <a class="btn btn-danger btn-medium" href="<?php echo routing::getInstance()->getUrlWeb('pqrs', 'index') ?>">Cancelar</a>

        </form>
    </div></br>

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