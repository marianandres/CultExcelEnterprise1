<?php

use mvc\interfaces\controllerActionInterface;
use mvc\controller\controllerClass;
use mvc\config\configClass as config;
use mvc\request\requestClass as request;
use mvc\routing\routingClass as routing;
use mvc\session\sessionClass as session;
use mvc\i18n\i18nClass as i18n;

/**
 * Description of ejemploClass
 *
 * @author Julian Lasso <ingeniero.julianlasso@gmail.com>
 */
class deleteSelectActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $idsToDelete = request::getInstance()->getPost('chk');

        foreach ($idsToDelete as $id) {
          $ids = array(
              datoUsuarioTableClass::ID => $id
          );
          datoUsuarioTableClass::delete($ids, false);
        }

        routing::getInstance()->redirect('datosusuario', 'index');
      } else {
        routing::getInstance()->redirect('datosusuario', 'index');
      }
    } catch (PDOException $exc) {
      session::getInstance()->setFlash('exc', $exc);
      routing::getInstance()->forward('shfSecurity', 'exception');
    }
  }

}
