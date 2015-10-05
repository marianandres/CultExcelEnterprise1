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
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $localidad_id = trim(request::getInstance()->getPost(localidadTableClass::getNameField(localidadTableClass::LOCALIDAD_ID, true)));
        $nombre = trim(request::getInstance()->getPost(localidadTableClass::getNameField(localidadTableClass::NOMBRE, true)));





        $data = array(
            localidadTableClass::LOCALIDAD_ID => $localidad_id,
            localidadTableClass::NOMBRE => md5($nombre)
        );
        localidadTableClass::insert($data);
        routing::getInstance()->redirect('localidad', 'index');
      } else {
        routing::getInstance()->redirect('localidad', 'index');
      }
    } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
  }
}