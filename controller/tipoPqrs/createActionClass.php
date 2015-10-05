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
 * @author  Mariana Lopez, Andres Alvarez
 */
class createActionClass extends controllerClass implements controllerActionInterface {

  public function execute() {
    try {
      if (request::getInstance()->isMethod('POST')) {

        $nombre = request::getInstance()->getPost(tipoPqrsTableClass::getNameField(tipoPqrsTableClass::NOMBRE, true));


        $data = array(
            tipoPqrsTableClass::NOMBRE => $nombre,
        );
        tipoPqrsTableClass::insert($data);
        routing::getInstance()->redirect('tipoPqrs', 'index');
      } else {
        routing::getInstance()->redirect('tipoPqrs', 'index');
      }
    } catch (PDOException $exc) {
            session::getInstance()->setFlash('exc', $exc);
            routing::getInstance()->forward('shfSecurity', 'exception');
        }
  }

}
