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

        $actived = request::getInstance()->getPost(estadoPqrsTableClass::getNameField(estadoPqrsTableClass::ACTIVED, true));
        $nombre = request::getInstance()->getPost(estadoPqrsTableClass::getNameField(estadoPqrsTableClass::NOMBRE, true));
        $pqrs_id = request::getInstance()->getPost(estadoPqrsTableClass::getNameField(estadoPqrsTableClass::PQRS_ID, true));




        $data = array(
            estadoPqrsTableClass::ACTIVED => $actived,
            estadoPqrsTableClass::NOMBRE => $nombre,
            estadoPqrsTableClass::PQRS_ID => $pqrs_id
        );
        estadoPqrsTableClass::insert($data);
        routing::getInstance()->redirect('estadoPqrs', 'index');
      } else {
        routing::getInstance()->redirect('estadoPqrs', 'index');
      }
    } catch (PDOException $exc) {
      echo $exc->getMessage();
      echo '<br>';
      echo '<pre>';
      print_r($exc->getTrace());
      echo '</pre>';
    }
  }

}
